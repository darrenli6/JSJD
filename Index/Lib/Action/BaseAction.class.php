<?php
class BaseAction extends Action {
    
    Public function _initialize () {
        $sid=session('sid');
        $this->sessionid=session('sid');
        //rotate
        $where=array(
            'ckey'=>'rotateimg'
        );
        
        $this->rotatedata=M('Systemconfig')->where($where)->select();
        $this->mainstu=M('Stuinfo')->field('face')->where(array(
            'id'=>$sid
        ))->find();
        //department info
        $this->departinfo=M('departinfo')
                     ->field('id,departname')
                     ->select();
        
    }
 
}