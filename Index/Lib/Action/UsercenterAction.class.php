<?php

class UsercenterAction extends CommonAction {
    
    
    
    public function index(){
        
        $stuinfo=M('Stuinfo')
        ->where(array(
            'stu_id'=>array('eq',session('stuid'))
        ))
        ->find();
        
        
        $this->display();
    }
    
    public function main(){
        
        $this->display();
    }
    
    
    /**
     * get userinfo 
     * 
     */
    
    public function personinfo(){
        $sid=session('sid');
        $this->s=M('Stuinfo')->find($sid);
        
        $this->assign(
            array(
                'mainarea'=>'个人中心',
                'title'   =>'个人资料',
            )
            );
        
        $this->display();
    }
    
    
    /**
     * 上传党员文档
     * 
     */
    //public  function 
}