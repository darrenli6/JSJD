<?php

class IndexAction extends CommonAction {
    public function index(){
         
        //news 
        $this->newses=M('news')->limit(5)->select();
        
        $this->assign(array(
            'showimage'=>C('SHOWIMAGE'), 
        ));
        
        //subjectrace
        $this->srs=M('Subjectrace')->order('id DESC')->limit(3)->select();
        
        
        $this->display();
    }
}