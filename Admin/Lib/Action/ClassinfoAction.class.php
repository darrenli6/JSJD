<?php
 
class ClassinfoAction extends CommonAction {
    
    public function index(){
       
       
        import('ORG.Util.Page');
        $count = M('classinfo')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $CModel=D('ClassinfoView');
        $this->CData=$CModel->select();
     
        
        $this->assign(array(
                'title'=>'班级信息', 
          ));
        $this->display();
    }
    
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'classid' => $this->_post('classid'),
                'name' => $this->_post('name'),
                'pid'  => $this->_post('pid'),
            );
        
            if (M('Classinfo')->data($data)->add()) {
                $this->success('添加成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
        //profession information
        $this->PData=M('Profession')->select();
        
        $this->assign(array(
            'title'=>'添加班级',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'      => $this->_post('id'),
                'name'    => $this->_post('name'),
                'classid' => $this->_post('classid'),
                'pid'     => $this->_post('pid'),
            );
        
            if (M('Classinfo')->save($data)) {
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->CData=M('Classinfo')->find($id);
        }
        
        

        //profession information
        $this->PData=M('Profession')->select();
        
        
        $this->assign(array(
            'title'=>'修改班级',
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        if (M('Classinfo')->delete($id)) {
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    public function delall(){
       $result=array(); 
       if(!$this->isAjax()){
           exit('error');
       }
       $ids=rtrim($this->_post('ids'),',');
       if (M('Classinfo')->delete($ids)) {
           $result['status']=1;
           
       } else {
           $result['status']=0;
           $result['msg']='删除失败';
       }
       
       die($result);
        
    }

    
}