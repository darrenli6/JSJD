<?php
 
class StuinfoAction extends CommonAction {
    
    public function index(){
        
        import('ORG.Util.Page');
        $count = M('classinfo')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $SModel=D('StuinfoView');
        $this->SData=$SModel->select();
       
        
        $this->assign(array(
                'title'=>'学生信息', 
          ));
        $this->display();
    }
    
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'stuid' => $this->_post('stuid'),
                'password'  => $this->_post('stuid','md5'),
            );
            $datainfo = array(
                'stuid' => $this->_post('stuid'),
                'stuname' => $this->_post('stuname'),
                'cid'  => $this->_post('cid'),
            );
            
            if (M('Stu')->data($data)->add()  && M('Stuinfo')->data($data)->add() ) {
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
    
}