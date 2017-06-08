<?php

class SubjectraceAction extends  BaseAction {
    public function index(){
        
        $did=$this->_get('did','intval');
        
        //get department 
        $this->dData=M('departinfo')->field('id,departname')->select(); 
        
        if(empty($did))
        {    
        //get subjectrace info
        $this->sData=M('Subjectrace')
        ->order('id DESC')
        ->limit(9)
        ->select();

        }else{
           $result=array();
           $data=M('Subjectrace')
           ->order('id DESC')
           ->limit(9)
           ->select();
           
           foreach($data as $k=>$v)
           {   
               if(!strpos($v['deds'].',', $did.','))
               $result[$k]=$v;
           }
           $this->sData=$result;
        }
        
       
        $this->display();
    }
    public function detail(){
        
        $sid=$this->_get('sid');
        //detail 
        $this->dsData=M('Subjectrace')->where(
            array(
                'id'=>array('eq',$sid)
            )
            )->find();
        $this->orignals=M('Departinfo')
        ->field('GROUP_CONCAT(departname) departnames')
        ->where(array(
            'id'=>array('in',$this->dsData['deds'])
        ))
        ->find();
            
       //left nav
       $this->dssData=M('Subjectrace')
       ->alias('a')
       ->field('id,racename')
       ->where(
           array(
               'a.id'=>array('neq',$sid)
           )
           )   
       ->order('id DESC')
       ->limit(10)    
       ->select();    
            
        //get images in the subjectrace
        $this->imgSubs=M('Racetoimg')
        ->where(array(
            'rid'=>array('eq',$sid)
        ))
        ->select();
        
        $this->display();
    }
    
    
    public function ajaxLoadSub(){
        if(!$this->isAjax()){
            die('error');
        }
        
        $cid=$this->_post('targetid','intval');
        
        $result=array();
        $data=M('Subjectrace')
        ->field('racename,smallimg,deds,summary')
        ->where(array(
            'is_show'=>array('eq',1)
        ))
        ->order('id DESC')
        ->limit(9)
        ->select();
         
        foreach($data as $k=>$v)
        {
            if(!strpos($v['deds'].',', $cid.','))
                $result['data'][]=$v;
        }
        if($result)
        {
        $result['state']=1;    
        
        }else{
         $result['state']=0;   
        }
        die(json_encode($result));
    }
}