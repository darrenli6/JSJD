<?php

class LoginAction extends CommonAction {
    public function index(){
         
        if($this->isPost()){
            
            //提取表单内容
            $account = $this->_post('stuid');
            $pwd = $this->_post('password', 'md5');
            
            $where = array('account' => $account);
            
            $user = M('Stu')->where($where)->find();
            
            if (!$user || $user['password'] != $pwd) {
                $this->error('用户名或者密码不正确');
            }
            
            if ($user['lock']==0) {
                $this->error('用户被锁定');
            }
            
            //处理下一次自动登录
            if (isset($_POST['auto'])) {
                $account = $user['stuid'];
                $ip = get_client_ip();
                $value = $account . '|' . $ip;
                $value = encryption($value);
                @setcookie('auto', $value, C('AUTO_LOGIN_TIME'), '/');
            }
            
            $data = array(
                'id' => $user['id'],
                'lasttime' => time(),
                'lastip' => get_client_ip()
            );
            M('Stu')->save($data);
            
           
            //登录成功写入SESSION并且跳转到首页
            session('sid', $user['id']);
            session('stuid', $user['stuid']);
            session('lasttime', date('Y-m-d H:i', $user['lasttime']));
            session('now', date('Y-m-d H:i', time()));
            session('lastip', $user['lastip']);
            
            header('Content-Type:text/html;Charset=UTF-8');
            redirect(__APP__, 3, '登录成功，正在为您跳转...');
            
            
        }
        
         $this->display();
    }
    
    
    
    
    

    public function logout(){
        //uninstall SESSION
        session_unset();
        session_destroy();
         
        //jump other page
        redirect(U('Index/index'));
    }
    
    
    
    public function reg(){
        if($this->isPost()){
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
    
    $this->display();
    
    }
    
}