<?php
/**
 * Relationship between stu and stuinfo
 */
Class StuRelationModel extends RelationModel {

	//定义主表名称
	Protected $tableName = 'stu';

	//定义用户与用户信处表关联关系属性
	Protected $_link = array(
		'stuinfo' => array(
			'mapping_type' => HAS_ONE,
			'foreign_key' => 'stuid'
			)
		);

	/**
	 * 自动插入的方法
	 */
	Public function insert ($data=NULL) {
		$data = is_null($data) ? $_POST : $data;
		return $this->relation(true)->data($data)->add();
	}
}
?>