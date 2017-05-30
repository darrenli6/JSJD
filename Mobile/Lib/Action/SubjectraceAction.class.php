<?php

class SubjectraceAction extends CommonAction {
    public function index(){
        
        //get subjectrace info
        $this->sData=M('Subjectrace')
        ->field('id,racename,smallimg')
        ->order('id DESC')
        ->limit(5)
        ->select();
         
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
            
           
            
        //get images in the subjectrace
        $this->imgSubs=M('Racetoimg')
        ->where(array(
            'rid'=>array('eq',$sid)
        ))
        ->select();
        
        $this->freenum=mt_rand(0, count($this->imgSubs)-1);
        //get footscript next and pre content
        $sql="SELECT id,racename  FROM czxy_subjectrace WHERE id=
        (SELECT max(id) FROM czxy_news WHERE id<$sid ) LIMIT 1";
        $this->pre=M('Subjectrace')->query($sql);
        
        $sql="SELECT id,racename FROM czxy_subjectrace WHERE id=
        (SELECT min(id) FROM czxy_subjectrace WHERE id>$sid ) LIMIT 1";
        $this->next=M('Sujectrace')->query($sql);
        
        $this->display();
    }
}