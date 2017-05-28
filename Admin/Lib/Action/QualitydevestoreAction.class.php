<?php
 
class QualitydevestoreAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Qualitydevestore')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $CModel=M('Qualitydevestore');
        $this->QData=$CModel->select();
       
        
        $this->assign(array(
                'title'=>'素质拓展信息', 
          ));
        $this->display();
    }
    
    
    public function show(){
        
        $id = $this->_get('id', 'intval');
        
        $ret=M('Qualitydevestore')->field('qualityinfo')->find($id);
        $this->content=$ret['qualityinfo'];
         
        $this->display();
        
        
    }
    
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'qualityname' => $this->_post('qualityname'),
                'fullstore' => $this->_post('fullstore'),
                'qualityinfo'  => $this->_post('qualityinfo'),
            );
        
            if (M('Qualitydevestore')->data($data)->add()) {
                $this->success('添加成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
       
        
        $this->assign(array(
            'title'=>'添加素质拓展信息',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'      => $this->_post('id'),
                'qualityname'    => $this->_post('qualityname'),
                'qualityinfo' => $this->_post('qualityinfo'),
                'fullstore'     => $this->_post('fullstore'),
            );
        
            if (M('Qualitydevestore')->save($data)) {
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->QData=M('Qualitydevestore')->find($id);
        }
        
        
 
        
        
        $this->assign(array(
            'title'=>'修改素质拓展表',
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        if (M('Qualitydevestore')->delete($id)) {
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
}