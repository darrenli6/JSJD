<?php
class CommonAction extends Action {
    
    Public function _initialize () {
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