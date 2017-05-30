<?php

class PartyAction extends CommonAction {
    public function index(){
        //get party info
         $this->pData=M('Partyactivity')
         ->field('id,title,starttime')
         ->where(array(
             'is_show'=>array('eq',1),
         ))
         ->order('endtime DESC')
         ->limit(9)
         ->select();
        
       
         //get news info
         $this->nData=M('News')
         ->field('id,title,publictime')
         ->where(array(
             'isshow'=>array('eq',1),
         ))
         ->order('sort DESC')
         ->limit(9)
         ->select();
        
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