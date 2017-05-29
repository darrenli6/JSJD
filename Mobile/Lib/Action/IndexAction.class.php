<?php
 
class IndexAction extends CommonAction {
    public function index(){
        $where=array(
            'ckey'=>'rotateimg'
        );
        $this->rotatedata=M('Systemconfig')->where($where)->select();
        
         
        //news
        $this->newses=M('news')
        ->field('id,title,img,summary')
        ->order('sort DESC')
        ->limit(4)->select();
       
        //partyactivity
        $this->partyData=M('Partyactivity')
        ->field('id,title,starttime')
        ->order('endtime ASC')
        ->limit(5)->select(); 
        
        //subjectrace
        $this->srs=M('Subjectrace')
        ->field('id,racename,smallimg')
        ->where('id=(SELECT MAX(id) FROM czxy_subjectrace)')
        ->find();
        
        
        $this->display();
    }
}