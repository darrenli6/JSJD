<?php

class AboutAction extends BaseAction {
    public function index(){
         
        
        
        $this->display();
    }
    
    public function  contactus(){
        $path = './Admin/Conf/System.php';
        $this->config = include $path;
         
        $this->display();
    }
}