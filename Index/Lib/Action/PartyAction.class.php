<?php

class PartyAction extends BaseAction {
    public function index(){
         $this->newsData=M('Partyactivity')
         ->field('id,title,smallimg,starttime,endtime')
         ->where(array(
             'is_show'=>array('eq',1),
         ))
         ->order('endtime DESC')
         ->select();
       //  var_dump($this->newsData);
        
        
         $this->display();
    }
    public function detail(){
        
        $nid=intval($this->_get('nid'));
        
      
        $this->detail=M('partyactivity')
        ->alias('a')
        ->where(array(
            'a.id'=>array('eq',$nid),
            'a.is_show'=>array('eq',1),
        ))->find();
        $sql="SELECT id,title FROM czxy_partyactivity WHERE id=
        (SELECT max(id) FROM czxy_partyactivity WHERE id<$nid ) LIMIT 1";
        $this->pre=M('Partyactivity')->query($sql);
        
        $sql="SELECT id,title FROM czxy_partyactivity WHERE id=
        (SELECT min(id) FROM czxy_partyactivity WHERE id>$nid ) LIMIT 1";
        $this->next=M('Partyactivity')->query($sql);
        
        $this->display();
    }
    
    
}