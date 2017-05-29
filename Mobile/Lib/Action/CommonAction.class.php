<?php
class CommonAction extends Action {
    
    Public function _initialize () {
        //rotate
        $where=array(
            'ckey'=>'rotateimg'
        );
        $this->rotatedata=M('Systemconfig')->where($where)->select();
    }
 
}