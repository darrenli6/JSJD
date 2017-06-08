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
             $data=array(
                 'feetime'=>$this->_post('feetime'),
                 'sid'=>$this->_post('sid'),
                 'feevalue'=>$this->_post('feevalue'),
                 'summary'=>$this->_post('summary'),
                 'id'=>$this->_post('id'),
             );
             if(M('Partyfee')->save($data))
             {
                 $this->success('修改成功',U('index'));
             }else{
                 $this->error('修改失败');
             }
             die;
         }
         
         $this->data=M('Partyfee')
         ->alias('a')
         ->field('a.*,b.stu_id,b.stuname')
         ->join('LEFT JOIN __STUINFO__ b ON b.id=a.sid')
         ->where(array(
             'a.id'=>array('eq',$id),
         ))
         ->find();
       //  echo M(Partyfee)->getLastSql();
         $this->display();
         
     }
     
     public function sendmsg()
     {
         $this->_get('id',intval);
         
         
     }
     private  function message($phone,$rand){
         require_once 'curl.func.php';
     
         $appkey = 'e322803774d1ff79';//你的appkey
         $content = '注册验证码:'.$rand.',尊敬的用户,请尽快注册.如非本人操作,请忽略本短信.【校园行APP】';//utf8
         $url = "http://api.jisuapi.com/sms/send?appkey=$appkey&mobile=$phone&content=$content";
         $result = curlOpen($url);
         $jsonarr = json_decode($result, true);
         //exit(var_dump($jsonarr));
     
         return $jsonarr['status'];
     }
	 
}
?>