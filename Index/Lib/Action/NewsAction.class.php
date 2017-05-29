<?php

class NewsAction extends CommonAction {
    public function index(){
         $this->newsData=M('News')
         ->field('id,title,img,publictime,summary')
         ->where(array(
             'isshow'=>array('eq',1),
         ))
         ->order('sort DESC')
         ->select();
         
         //get news category
         $this->newsCat=M('Newscategory')->field('id,cat_name')->select();
        
         $this->display();
    }
    public function detail(){
        
        $nid=intval($this->_get('nid'));
        
        //islike ++
        M('News')->where('id='.$nid)->setInc('islike');
        
        //get news category
        $this->newsCat=M('Newscategory')->field('id,cat_name')->select();
        
        
        $this->detail=M('News')
        ->field('a.*,b.cat_name')
        ->alias('a')
        ->join('LEFT JOIN __NEWSCATEGORY__ b ON b.id=a.new_catid')
        ->where(array(
            'a.id'=>array('eq',$nid),
            'a.isshow'=>array('eq',1),
        ))->find();
        
        $sql="SELECT id,title FROM czxy_news WHERE id=
            (SELECT max(id) FROM czxy_news WHERE id<$nid ) LIMIT 1";
        $this->pre=M('News')->query($sql);
        
        $sql="SELECT id,title FROM czxy_news WHERE id=
        (SELECT min(id) FROM czxy_news WHERE id>$nid ) LIMIT 1";
        $this->next=M('News')->query($sql);
        
        $this->display();
    }
    
    public function ajaxGetNewsByCat(){
       if(!$this->isAjax()){
            echo '访问错误';
            die;
        }
        
        $cat_id=$this->_post('targetid');
        
        $data=M('News')
        ->field('id,title,img,publictime,summary')
        ->where(array(
          'new_catid'=>array('eq',intval($cat_id)),
          'isshow'=>array('eq',1),
        ))
        ->order('sort DESC')
        ->select();
        $result=array();
        if($data){
         $result['data']=$data;
         $result['status']=1;   
        }else{
         $result['status']=0;
        }
        die(json_encode($result));
    }
}