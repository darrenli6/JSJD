<?php
class CommonAction extends Action {
    
    Public function _initialize () {
        if (!isset($_SESSION['sid']))
            redirect(U('Login/index'));
        $this->sessionid=session('sid');
        
        
        //rotate
        $where=array(
            'ckey'=>'rotateimg'
        );
        $this->rotatedata=M('Systemconfig')->where($where)->select();
    }
 
}