<?php
/**
 * 用户管理控制器
 */
Class PartyfeeAction extends CommonAction {
 

	/**
	 * 后台管理员列表
	 */
	Public function index () {
		$this->data = M('Partyfee')
		->alias('a')
		->field('a.*,b.stu_id,b.stuname')
		->join('LEFT JOIN __STUINFO__ b ON b.id=a.sid')
		->select();
		 
		$this->assign(array(
		    'title'=>'学生党费列表',
		));
		
		$this->display();
	}

	/**
	 * 添加后台管理员
	 */
	Public function add () {
	    if($this->isPost()){
	        
	        $sids=explode('-', rtrim($_POST['sid'],'-'));
	       
	        foreach($sids as $k=>$v)
	        {
	            $res=M('Partyfee')->add(array(
	            'feetime'=>$this->_post('feetime'),
	            'sid'=>$v,
	            'feevalue'=>$this->_post('feevalue'),
	            'summary'=>$this->_post('summary'),
	            ));
	            
	            if(!$res)
	            {
	                $this->error('添加失败，请重试...');
	            }
	            
	        }
	        
	        $this->success('添加成功', U('index'));
	       
	        exit;
	    }
	     
	     
	    $this->assign(array(
	        'title'=>'添加党费',
	    ));
		$this->display();
	}
 

	/**
	 * 删除后台管理员
	 */
	Public function del () {
		$id = $this->_get('id', 'intval');
        
		if (M('Partyfee')->delete($id)) {
			$this->success('删除成功', U('index'));
		} else {
			$this->error('删除失败，请重试...');
		}
		
	}
 
 
	
     public function edit(){
         $id = $this->_get('id', 'intval');
         if($this->isPost()){
             
         }
         
         
         $this->display();
         
     }
	 
}
?>