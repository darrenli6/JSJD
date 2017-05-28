<?php
 
class ProfessionAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('profession')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        $PModel=M('Profession');
        $this->PData=$PModel->select();
         
        $this->assign(array(
                'title'=>'专业信息', 
          ));
          $this->display();
    }
    
    
    public function add(){
        
        if ($this->isPost()) {
            
            $data = array(
                'name' => $this->_post('name'),
            );
            
            if (M('profession')->data($data)->add()) {
                $this->success('添加成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
            
        }
        
        $this->assign(array(
            'title'=>'添加专业',
        ));
        $this->display();
    }
    
    public function edit(){
        if($this->isPost()){
            $data = array(
                'id'   => $this->_post('id'),
                'name' => $this->_post('name'),
            );
            
            if (M('profession')->save($data)) {
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
        $id = $this->_get('id', 'intval');
        $this->PData=M('Profession')->find($id);
        }
        
        $this->assign(array(
            'title'=>'修改专业',
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        if (M('Profession')->delete($id)) {
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
}