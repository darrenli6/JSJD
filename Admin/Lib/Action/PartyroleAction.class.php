<?php
 
class PartyroleAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Partyrole')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $PModel=M('Partyrole');
        $this->PData=$PModel->select();
       
            
        $this->assign(array(
                'title'=>'党员角色信息', 
          ));
        $this->display();
    }
    
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'rolename' => $this->_post('rolename'),
                'rolecontent' => $this->_post('rolecontent'),
            );
        
            if (M('Partyrole')->data($data)->add()) {
                $this->success('添加成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
    
        $this->assign(array(
            'title'=>'添加党员角色',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'          => $this->_post('id'),
                'rolename'    => $this->_post('rolename'),
                'rolecontent' => $this->_post('rolecontent'),
            );
        
            if (M('Partyrole')->save($data)) {
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->PData=M('Partyrole')->find($id);
        }
        
       
        
        $this->assign(array(
            'title'=>'修改党员角色',
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        if (M('Partyrole')->delete($id)) {
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
}