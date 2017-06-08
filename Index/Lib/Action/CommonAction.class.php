<?php
class CommonAction extends Action {
    
    Public function _initialize () {
        if (!isset($_SESSION['sid']))
            redirect(U('Login/index'));
        $sid=session('sid');
        //rotate
        $where=array(
            'ckey'=>'rotateimg'
        );
        
        $this->rotatedata=M('Systemconfig')->where($where)->select();
        $this->mainstu=M('Stuinfo')->field('face')->where(array(
            'id'=>$sid
        ))->find();
        
        
    }
 
}