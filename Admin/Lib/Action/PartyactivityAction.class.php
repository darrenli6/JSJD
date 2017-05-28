<?php
 
class  PartyactivityAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Partyactivity')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $PModel=D('Partyactivity');
        $this->PData=$PModel->select();
       
        
        $this->assign(array(
                'title'  =>'党员活动信息',
                'imgpath'=>C('SHOWIMAGE'),
                'path'   =>C('DOWNFILE'),
          ));
        $this->display();
    }
    
    public function handlerfile(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
        
        if (isset($_POST['upload'])) {
            
            $result=array();
             
            $arr=explode('.', $_FILES['attachfile']['name']);
            $size=count($arr)-1;
            $file_name = 'partyactivity'.microtime(true).time().'.'.$arr[$size];
            
            $result=checkFile($_FILES['attachfile']);
            
            if(!empty($result)) die(json_encode($result));
                
            $bool=move_uploaded_file($_FILES['attachfile']['tmp_name'],C('UPLOAD_FILE_PATH') . $file_name);
               
            if($bool)  {
                $result['state']   = 1;
                $result['file_name']=$file_name;
            }
            
            die(json_encode($result));
            
        }
        
        
    }
 
    public function handlerimage(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
    
        if (isset($_POST['upload'])) {
    
            $result=array();
             
            $arr=explode('.', $_FILES['smallimg']['name']);
            $size=count($arr)-1;
            $file_name = 'partyactivity'.microtime(true).time().'.'.$arr[$size];
    
            $result=checkImage($_FILES['smallimg']);
    
            if(!empty($result)) die(json_encode($result));
    
            $bool=move_uploaded_file($_FILES['smallimg']['tmp_name'],C('UPLOAD_PATH') . $file_name);
             
            if($bool)  {
                $result['state']   = 1;
                $result['file_name']=$file_name;
            }
    
            die(json_encode($result));
    
        }
    
    
    }
   
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'title'     => $this->_post('title'),
                'starttime' => $this->_post('starttime'),
                'endtime'   => $this->_post('endtime'),
                'smallimg'  => $this->_post('smallimg'),
                'attachfile'=> $this->_post('attachfile'),
                'content'   => $this->_post('content'),
            );
           
            if (M('Partyactivity')->data($data)->add()) {
                
                $this->success('添加党员活动成功', U('index'));
                die;
                
            } else {
                
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
        $this->assign(array(
            'title'=>'添加党员活动',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'        => $this->_post('id'),
                'title'     => $this->_post('title'),
                'starttime' => $this->_post('starttime'),
                'endtime'   => $this->_post('endtime'),
                'smallimg'  => $this->_post('smallimg'),
                'attachfile'=> $this->_post('attachfile'),
                'content'   => $this->_post('content'),
            );
           
            $old=M('Partyactivity')->field(array('attachfile','smallimg'))->find($this->_post('id'));
            if (M('Partyactivity')->save($data)) {
                 if(!empty($old) && $old['smallimg']!=$data['smallimg']   )   
                     @unlink(C('UPLOAD_PATH').$old['smallimg']);
                 if(!empty($old) && $old['attachfile']!=$data['attachfile']   )
                     @unlink(C('UPLOAD_FILE_PATH').$old['attachfile']);
                  
                 
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->PData=M('Partyactivity')->find($id);
        }
        
       
        $this->assign(array(
            'title'=>'修改党员活动',
            'path' =>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $db=M('Partyactivity');
        $old=M('Partyactivity')->field(array('attachfile','smallimg'))->find($id);
        if ($db->delete($id)) {
         if(!empty($old))   
                 {
                     @unlink(C('UPLOAD_PATH').$old['smallimg']);
                     @unlink(C('UPLOAD_FILE_PATH').$old['attachfile']);
                 }
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    public function showdetail(){
        
        $id = $this->_get('id', 'intval');
        
        $ret=M('Partyactivity')->field('content')->find($id);
        $this->content=$ret['content'];
         
        $this->display();
    }
 
    public function show(){
    
        $data['id']=$this->_get('id','intval');
        $data['is_show']=$this->_get('is_show','intval');
        $ret=M('Partyactivity')->save($data);
        if($ret) $this->success('开放成功',U('index'));
        else $this->error('开放失败');
    }
    
    public function unshow(){
    
        $data['id']=$this->_get('id','intval');
        $data['is_show']=$this->_get('is_show','intval');
        
        $ret=M('Partyactivity')->save($data); 
        if($ret) $this->success('开放成功',U('index'));
        else $this->error('开放失败');
    }
    
    
}