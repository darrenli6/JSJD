<?php

class AboutAction extends CommonAction {
    public function index(){
        $path = './Admin/Conf/System.php';
        $this->config = include $path;
        
        
        $this->display();
    }
    
    public function  contactus(){
        
    
        $this->display();
    }
    
    public function submitcon(){
        if(!$this->isAjax()){
            die('error runtime');
        }
        if($this->isPost()){
            $data=array(
                'phone'=>$this->_post('phone'),
                'email'=>$this->_post('email'),
                'content'=>$this->_post('content'),
            );
             
            $result=array();
            if(M('Feedback')->add($data))
            {
                $result['status']=1;
                 
            }else{
                $result['status']=0;
            }
             
            die(json_encode($result));
        }
    }
}