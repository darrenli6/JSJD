<?php
 
class IndexAction extends Action {
    public function index(){
        $where=array(
            'ckey'=>'rotateimg'
        );
        $this->rotatedata=M('Systemconfig')->where($where)->select();
        
        $this->display();
    }
}