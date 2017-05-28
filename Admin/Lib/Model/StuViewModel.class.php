<?php
/**
 * student view
 */
Class StuViewModel extends ViewModel {

	Protected $viewFields = array(
		'Stu' => array(
			'id', 'stuid', 
			'_type' => 'LEFT'
			),
		'Stuinfo' => array(
			'*',
			'_on' => 'Stuinfo.stu_id =stu.stuid',
			'_type' => 'LEFT',
		    ),
	    'classinfo'=>array(
	        'classid','id'=>'claid','name',
	        '_on'=>'Stuinfo.cid=classinfo.id',
	        '_type'=>'LEFT',
	    ),
	    'partyrole'=>array(
	         'rolename',
	        '_on'=>'partyrole.id=Stuinfo.partyid',
	        '_type'=>'LEFT',
	    ),
	    'departinfo'=>array(
	        'departname',
	        '_on'=>'departinfo.id=Stuinfo.deid',
	    ),
		);
	
}
?>