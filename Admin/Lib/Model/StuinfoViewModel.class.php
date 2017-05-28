<?php
/**
 * 班级信息视图模型
 */
Class StuinfoViewModel extends ViewModel {

	Protected $viewFields = array(
		'classinfo' => array(
			'id', 'classid', 'name',
			'_type' => 'LEFT'
			),
		'profession' => array(
			'name'=>'pname', 
			'_on' => 'profession.id =classinfo.pid'
			)
		);
	
}
?>