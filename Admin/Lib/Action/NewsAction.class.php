<?php
 
class  NewsAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('News')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
         
        $this->NData=M('News')->order('publictime desc')->select();
        
        $this->assign(array(
                'title'=>'部门信息', 
                'path' =>C('SHOWIMAGE'),
          ));
        $this->display();
    }
    
    public function handlerimage(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
        
        if (isset($_POST['upload'])) {
            
            $result=array();
             
            $arr=explode('.', $_FILES['uploadlogo']['name']);
            $size=count($arr)-1;
            $file_name = 'news'.microtime(true).time().'.'.$arr[$size];
            
            $result=checkImage($_FILES['uploadlogo']);
            
            if(!empty($result)) die(json_encode($result));
                
            $bool=move_uploaded_file($_FILES['uploadlogo']['tmp_name'],C('UPLOAD_PATH') . $file_name);
               
            if($bool)  {
                $result['state']   = 1;
                $result['file_name']=$file_name;
            }
            
            die(json_encode($result));
            
        }
        
        
    }
 
    public function handlerShownews(){
        if(!$this->isGet()){
            echo 'error';
            die;
        }
        $data['isshow']=$this->_get('isshow','intval');
        $data['id']    =$this->_get('id'    ,'intval');
        
        if(M('News')->save($data)){
            $data['isshow']==1?
            $this->success('开放成功',U('index')):
            $this->success('锁定成功',U('index'));
        }else{
            $this->error('处理失败');
        }
        
    }
  
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'title'         => $this->_post('title'),
                'img'           => $this->_post('img'),
                'publictime'    => $this->_post('publictime'),
                'sort'          => $this->_post('sort'),
                'isshow'        => $this->_post('isshow'),
                'content'       => $this->_post('content'),
                'summary'       => $this->_post('summary'),
                'new_catid'     => $this->_post('new_catid'),
            );
        
            if (M('News')->data($data)->add()) {
                $this->success('添加新闻', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
       $this->newsData=M('Newscategory')->field('id,cat_name')->select();
        
        $this->assign(array(
            'path' =>C('SHOWIMAGE'),
            'title'=>'添加新闻',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'            => $this->_post('id'),
                'title'         => $this->_post('title'),
                'img'           => $this->_post('img'),
                'publictime'    => $this->_post('publictime'),
                'sort'          => $this->_post('sort'),
                'isshow'        => $this->_post('isshow'),
                'content'       => $this->_post('content'),
                'summary'       => $this->_post('summary'),
                'new_catid'     => $this->_post('new_catid'),
            );
          
            
            
            $old=M('News')->field(array('img'))->find($this->_post('id'));
            if (M('News')->save($data)) {
               
                 if(!empty($old) && $old['img']!=$data['img'] )   
                     @unlink(C('UPLOAD_PATH').$old['img']);
            
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->NData=M('News')->find($id);
        }
        
        $this->newsData=M('Newscategory')->field('id,cat_name')->select();
        $this->assign(array(
            'title'=>'修改部门',
            'path' =>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $db=M('News');
        $old=$db->field(array('News'))->find($id);
        if ($db->delete($id)) {
            if(!empty($old)) @unlink(C('UPLOAD_PATH').$old['img']);
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
    public function show(){
    
        $id = $this->_get('id', 'intval');
    
        $ret=M('News')->field('content')->find($id);
        $this->content=$ret['content'];
         
        $this->display();
    
    }
    
    /*************some method*************************/

    /*
     * image upload image
     * @param  [string] $path save file name
     * @param  [string] $width
     * @param  [String] $height
     * @return [Array]  image upload information
     * */
    
    private function _upload($path,$width,$height){
        import('ORG.Net.UploadFile');
        $obj=new UploadFile();
    
        $obj->maxSize=C('UPLOAD_MAX_SIZE');
        
        $obj->savePath=C('UPLOAD_PATH'). $path. '/';
        
        $obj->saveRule='uniqid';
        
        $obj->uploadReplace=true;
        
        $obj->allowExts=C('UPLOAD_EXTS');
        
        $obj->thumb=true;
        
        $obj->thumbMaxHeight=$height;
        
        $obj->thumbMaxWidth=$width;
        
        $obj->thumbPrefix='max_,medium_,mini_'; 
        
        $obj->thumbPath=$obj->savePath.date('Y_m') . '/';
        //delete original image
        $obj->thumbRemoveOrigin=true;
        //use sub director save file 
        $obj->autoSub = true;
        
        $obj->subType='date';
        
        $obj->dateFormat='Y_m';
    }
    
    
    
}