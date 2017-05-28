<?php
/**
 * 班级信息视图模型
 */
Class ClassinfoViewModel extends ViewModel {

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
	
	// before_insert
	protected function _before_insert(&$data, $option)
	{
	     
	     
	    if(isset($_FILES['face']) && $_FILES['face']['error'] == 0)
	    {
	        $ret = uploadOne('face', 'Studentinfo');
	        if($ret['ok'] == 1)
	        {
	            $data['face'] = $ret['images'][0];
	        }
	        else
	        {
	            $this->error = $ret['error'];
	            return FALSE;
	        }
	    }
	}
	
	
}
?>