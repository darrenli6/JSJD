<?php
/**
 * student view
 */
Class StuQualityViewModel extends ViewModel {

	Protected $viewFields = array(
		'Quastu' => array(
			'id', 'sid','qid','addtime','store',
			'_type' => 'LEFT'
		    ),
	    'Stu'=>array(
	        'id'=>'sid','stuid',
	        '_on'=>'Stu.id=Quastu.sid',
	        '_type'=>'LEFT',
	    ),
	    'Stuinfo'=>array(
	        'stuname',
	        '_on'=>'Stu.stuid=Stuinfo.stu_id',
	        '_type'=>'LEFT',
	    ),
	    'Qualitydevestore'=>array(
	         'id'=>'qid','qualityname','fullstore',
	        '_on'=>'Qualitydevestore.id=Quastu.qid',
	        '_type'=>'LEFT',
	    ),
	    
		);
	
}
?>