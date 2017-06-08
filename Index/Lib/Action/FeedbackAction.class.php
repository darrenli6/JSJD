<?php

class FeedbackAction extends BaseAction {
    public function index(){
       if($this->isPost()){
           
         $data=array(
             'phone'=>$this->_post('phone'),
             'email'=>$this->_post('email'),
             'content'=>$this->_post('content'),
             'addtime'=>time(),
         );
         if(!empty(session('stuid'))) $data['username']=session('stuid');
         $result=M('Feedback')->add($data);
         if($result)
         {
             $this->success('同学，你的反馈建议已提交,我们尽快为你解决',U('index'));
         }else{
             $this->error('提交失败');
         }
         die;
       }
               
        $this->display();
    }
    
    
}