<?php

class UsercenterAction extends CommonAction {
    
    
    
    public function index(){
        header('Content-Type:text/html;Charset=utf8');
        $this->stuinfo=M('Stuinfo')
        ->alias('a')
        ->where(array(
            'a.stu_id'=>array('eq',session('stuid'))
        ))
        ->join('LEFT JOIN __CLASSINFO__ b ON b.id=a.cid')
        ->find();
        
        //dump($stuinfo);
        $this->display();
    }
    
    public function qualityinfo(){
        $sessionid=session('sid');
        $this->data=M('Quastu')
        ->alias('a')
        ->join('LEFT JOIN __QUALITYDEVESTORE__ b ON b.id=a.qid ')
        ->where(array(
            'a.sid'=>array('eq',$sessionid)
        ))
        ->select();
        
        $this->display();
    }
}