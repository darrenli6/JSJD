<?php

class IndexAction extends BaseAction {
    public function index(){
         
        //news 
        $this->newses=M('news')->limit(5)->select();
        
        $this->assign(array(
            'showimage'=>C('SHOWIMAGE'), 
        ));
        
        //subjectrace
        $this->srs=M('Subjectrace')->order('id DESC')->limit(3)->select();
        //webinfo
        $path = './Admin/Conf/System.php';
        $this->config = include $path;
        
        $this->display();
    }
}