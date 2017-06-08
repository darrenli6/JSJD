<?php

class LoginAction extends Action {
    public function index(){
         
         $this->display();
    }
    
    
    public function log(){
        
        
       $is=M('Stu')->where(array(
         'stuid'=>array('eq',$_POST['username']),
         'password'=>array('eq',$this->_post('p','md5')),
       ))->find();
       if($is){
          if($is['locked']==0) $this->error('该用户锁定'); 
          
          $data = array(
              'id' => $is['id'],
              'lasttime' => time(),
              'lastip' => get_client_ip()
          );
          M('Stu')->save($data);
          session('sid', $is['id']);
          session('stuid', $is['stuid']);
          session('lasttime', date('Y-m-d H:i', $is['lasttime']));
          session('now', date('Y-m-d H:i', time()));
          session('lastip', $is['lastip']);
          $this->success('正在登录...', __APP__);
          
           
       }else{
           
          $this->error('用户名或者密码错误');die;
       }
        
    }
    
    

    public function logout(){
        //uninstall SESSION
        session_unset();
        session_destroy();
         
        //jump other page
        redirect(U('Index/index'));
    }
    
    
    
    public function reg(){
        
        //check user exitst
        $exit=M('stu')->where(array(
         'stuid'=>array('eq',$_POST['stuid'])
        ))->find();
        if($exit){$this->error('用户已经存在',U('Login/index')); die;}
        
        //insert new user
        $data = array(
            'stuid'   => $this->_post('stuid'),
            'password'=> $this->_post('password','md5'),
            'lock'   => 0,
        );
        
        $datai= array(
            'stu_id'   => $this->_post('stuid'),
            );
       if (M('Stu')->data($data)->add() && M('Stuinfo')->data($datai)->add() ) {
           $this->success('注册成功，请进行登录.等待管理员审核。', U('Login/index'));
           die;
           } else {
               $this->error('注册失败，请重试...');
               die;
           }
         
    }
    
}