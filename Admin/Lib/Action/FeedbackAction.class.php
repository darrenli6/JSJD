<?php
 
Class FeedbackAction extends CommonAction {
 

	 
	Public function index () {
		$this->fData = M('Feedback')
		->select(); 
		
		 
		$this->assign(array(
		    'title'=>'反馈信息列表',
		));
		
		$this->display();
	}
 
	 

	/**
	 * 删除后台管理员
	 */
	Public function del () {
		$id = $this->_get('id', 'intval');
		if (M('Feedback')->delete($id)) {
			$this->success('删除成功', U('index'));
		} else {
			$this->error('删除失败，请重试...');
		}
		
	}
  
	 
   
}
?>