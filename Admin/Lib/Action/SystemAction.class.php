<?php
/**
 * System setting
 */
Class SystemAction extends CommonAction {
 

	/**
	 * setting
	 */
	Public function setting () {
	    $this->assign(array(
	        'title'=>'网站设置',
	    ));
	    $this->config = include './Admin/Conf/System.php';
		$this->display();
	}


	/**
	 * modify setting action
	 */
	Public function runEdit () {
	    $path = './Admin/Conf/system.php';
	    $config = include $path;
	    $config['WEBNAME'] = $_POST['webname'];
	    $config['COPY'] = $_POST['copy'];
	    $config['REGIS_ON'] = $_POST['regis_on'];
	
	    $data = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
	
	    if (file_put_contents($path, $data)) {
	        $this->success('修改成功', U('setting'));
	    } else {
	        $this->error('修改失败， 请修改' . $path . '的写入权限');
	    }
	} 
	 
    /*
     * key word
     * */	
	public function filter(){
	    $config = include './Admin/Conf/System.php';
	    
	    $this->filter = implode('|', $config['FILTER']);
	     
	    $this->display();
	}
	
	/**
	 * modify filter
	 */
	Public function runEditFilter () {
	    $path = './Admin/Conf/system.php';
	    $config = include $path;
	    $config['FILTER'] = explode('|', $_POST['filter']);
	
	    $data = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
	     
	    
	    if (file_put_contents($path, $data)) {
	        $this->success('修改成功', U('filter'));
	    } else {
	        $this->error('修改失败， 请修改' . $path . '的写入权限');
	    }
	}
	
	/*
	 * modify password view
	 * */
	public function modifyPwd(){
	    
	    if($this->isPost()){
	        /**
	         * modify password action
	         */
	        $db = M('admin');
	        $old = $db->where(array('id' => session('uid')))->getField('password');
	        
	        if ($old != md5($_POST['old'])) {
	            $this->error('旧密码错误');
	        }
	        
	        if ($_POST['pwd'] != $_POST['pwded']) {
	            $this->error('两次密码不一致');
	        }
	        
	        $data = array(
	            'id' => session('uid'),
	            'password' => $this->_post('pwd', 'md5')
	        );
	        
	        if ($db->save($data)) {
	            $this->success('修改成功', U('Login/copy'));
	        } else {
	            $this->error('修改失败，请重试...');
	        }
	        die;
	    }
	    
	    $this->display();
	}
	
	public function rotateimg(){
        
	    $where=array(
	        'ckey'=>'rotateimg'
	    );
	    $this->data=M('Systemconfig')->where($where)->select(); 
	    $showimage=C('SHOWROTATEIMAGE');
	    $this->assign(array(
	        'showimage'=>$showimage,
	    )  );
	    
	    $this->display();
	}
	 
	public function handlerimage(){
	    if(!$this->isAjax()){
	        echo 'failed';
	        die;
	    }
	    
	    
	    if (isset($_POST['upload'])) {
	
	        $result=array();
	        $id=intval($_POST['id']);
	        $arr=explode('.', $_FILES['uploadfile']['name']);
	        $size=count($arr)-1;
	        $file_name = microtime(true).time().'.'.$arr[$size];
	
	        $result=checkImage($_FILES['uploadfile']);
	
	        if(!empty($result)) die(json_encode($result));
	        
	        $bool=move_uploaded_file($_FILES['uploadfile']['tmp_name'],C('ROTATEIMAGEPATH') . $file_name);
	         
	        if($bool)  {
	            //delete old image
	            $ret=M('Systemconfig')->field('cvalue')->find($id);
	            @unlink(C('ROTATEIMAGEPATH').$ret['cvalue']);
	            
	            //update
	            $where=array('id'=>$id,'ckey'=>'rotateimg');
	            $data =array('cvalue'=>$file_name);
	            M('Systemconfig')->where($where)->save($data);
	            
	            $result['state']     = 1;
	            $result['file_name'] = $file_name;
	            $result['id']        = $id;
	            $result['rotatepath']= C('SHOWROTATEIMAGE');
	        }else{
	            $result['state'] = 2;
	            $result['msg']   = '上传失败';
	        }
	
	        die(json_encode($result));
	
	    }
	
	
	}
	
	
	public function webinfo(){
	    
	    $this->config = include './Admin/Conf/System.php';
	    
	    
	    $this->display();
	    
	}
	public function runEditSite(){
	    $path = './Admin/Conf/System.php';
	    $config = include $path;
	    
	    $config['TELEPHONE'] = $_POST['telephone'];
	    $config['EMAIL'] = $_POST['email'];
	    $config['ADDRESS'] = $_POST['address'];
	    $config['FOX'] = $_POST['fox'];
	    $config['WEB_SITE'] = $_POST['web_site'];
	    $data = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
	    
	     
	    if (file_put_contents($path, $data)) {
	        $this->success('修改成功', U('webinfo'));
	    } else {
	        $this->error('修改失败， 请修改' . $path . '的写入权限');
	    }
	}
	
	public function skinmodel(){
	    if($this->isPost())
	    {
	        $path = './Admin/Conf/theme.php';
	        $config = include $path;
	        $config['DEFAULT_THEME'] = $_POST['default_theme'];
	        
	        $config['TMPL_PARSE_STRING']=array(
	            '__PUBLIC__' => __ROOT__ . '/Admin/Tpl/'.$_POST['default_theme'].'/Public',
	        );
	        $data = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
	         
	        
	        if (file_put_contents($path, $data)) {
	           
	            echo "<script>window.parent.location.reload();</script>";
	            $this->success('修改成功', U('webinfo'));
	        } else {
	            $this->error('修改失败， 请修改' . $path . '的写入权限');
	        }
	        
	    }
	    
	    $this->config = include './Admin/Conf/theme.php';
	     
	    $this->display();
	}
}
?>