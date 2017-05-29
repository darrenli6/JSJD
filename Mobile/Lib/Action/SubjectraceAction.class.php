<?php

class SubjectraceAction extends CommonAction {
    public function index(){
        //get department 
        $this->dData=M('departinfo')->field('id,departname')->select(); 
        //get subjectrace info
        $this->sData=M('Subjectrace')->order('id DESC')->limit(9)->select();
         
        $this->display();
    }
    public function detail(){
        
        $sid=$this->_get('sid');
        //detail 
        $this->dsData=M('Subjectrace')->where(
            array(
                'id'=>array('eq',$sid)
            )
            )->find();
        $this->orignals=M('Departinfo')
        ->field('GROUP_CONCAT(departname) departnames')
        ->where(array(
            'id'=>array('in',$this->dsData['deds'])
        ))
        ->find();
            
       //left nav
       $this->dssData=M('Subjectrace')
       ->alias('a')
       ->field('id,racename')
       ->where(
           array(
               'a.id'=>array('neq',$sid)
           )
           )   
       ->order('id DESC')
       ->limit(10)    
       ->select();    
            
        //get images in the subjectrace
        $this->imgSubs=M('Racetoimg')
        ->where(array(
            'rid'=>array('eq',$sid)
        ))
        ->select();
        
        $this->display();
    }
}