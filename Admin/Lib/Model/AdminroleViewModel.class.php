<?php
 
class AdminroleModel extends ViewModel
{
    
    Protected $viewFields = array(
        'admininfo' => array(
            'id', 'classid', 'name',
            '_type' => 'LEFT'
        ),
        'profession' => array(
            'name'=>'pname',
            '_on' => 'profession.id =classinfo.pid'
        )
    );
    
    
    
    
}   