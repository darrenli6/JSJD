<?php
 
class  PartyideapaperAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Partyideapaper')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $PModel=D('Partyideapaper');
        $this->PData=$PModel
        ->alias('a')
        ->field('a.*,b.stu_id stu_id,b.stuname stuname')
        ->join('LEFT JOIN __STUINFO__ b ON b.id=a.sid ')
        ->select();
       
        
        $this->assign(array(
                'title'=>'思想报告信息', 
                'path' =>C('DOWNFILE'),
          ));
        $this->display();
    }
    
    public function handlerfile(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
        
        if (isset($_POST['upload'])) {
            
            $result=array();
             
            $arr=explode('.', $_FILES['uploadfile']['name']);
            $size=count($arr)-1;
            $file_name = 'partypaper'.microtime(true).time().'.'.$arr[$size];
            
            $result=checkdocFile($_FILES['uploadfile']);
            
            if(!empty($result)) die(json_encode($result));
                
            $bool=move_uploaded_file($_FILES['uploadfile']['tmp_name'],C('UPLOAD_FILE_PATH') . $file_name);
               
            if($bool)  {
                $result['state']   = 1;
                $result['file_name']=$file_name;
            }
            
            die(json_encode($result));
            
        }
        
        
    }
 
    
   
    
    public function add(){
        
        if ($this->isPost()) {
        
            $data = array(
                'title' => $this->_post('title'),
                'papertime' => time(),
                'paperurl'    => $this->_post('paperurl'),
            );
        
            if (M('Partyideapaper')->data($data)->add()) {
                $this->success('添加思想报告成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
        $this->assign(array(
            'title'=>'添加思想报告',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $data = array(
                'id'            => $this->_post('id'),
                'departname'    => $this->_post('departname'),
                'context'       => $this->_post('context'),
                'departlogo'    => $this->_post('departlogo'),
            );
           
            $old=M('Partyideapaper')->field(array('departlogo'))->find($this->_post('id'));
            if (M('Partyideapaper')->save($data)) {
                 if(!empty($old) && $old['departlogo']!=$data['departlogo'] )  
                     @unlink(C('UPLOAD_PATH').$old['departlogo']);
            
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->DData=M('Partyideapaper')->find($id);
        }
        
       
        $this->assign(array(
            'title'=>'修改思想报告',
            'path' =>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $db=M('Partyideapaper');
        $old=$db->field(array('paperurl'))->find($id);
        if ($db->delete($id)) {
            if(!empty($old)) @unlink(C('UPLOAD_FILE_PATH').$old['paperurl']);
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
    /*************some method*************************/

    /*
     * image upload image
     * @param  [string] $path save file name
     * @param  [string] $width
     * @param  [String] $height
     * @return [Array]  image upload information
     * */
    
    private function _upload($path,$width,$height){
        import('ORG.Net.UploadFile');
        $obj=new UploadFile();
    
        $obj->maxSize=C('UPLOAD_MAX_SIZE');
        
        $obj->savePath=C('UPLOAD_PATH'). $path. '/';
        
        $obj->saveRule='uniqid';
        
        $obj->uploadReplace=true;
        
        $obj->allowExts=C('UPLOAD_EXTS');
        
        $obj->thumb=true;
        
        $obj->thumbMaxHeight=$height;
        
        $obj->thumbMaxWidth=$width;
        
        $obj->thumbPrefix='max_,medium_,mini_'; 
        
        $obj->thumbPath=$obj->savePath.date('Y_m') . '/';
        //delete original image
        $obj->thumbRemoveOrigin=true;
        //use sub director save file 
        $obj->autoSub = true;
        
        $obj->subType='date';
        
        $obj->dateFormat='Y_m';
    }
    
    public function unverify(){
    
        $data['id']=$this->_get('id','intval');
        $data['isverify']=$this->_get('isverify','intval');
        $ret=M('Partyideapaper')->save($data);
        if($ret) $this->success('未通过成功',U('index'));
        else $this->error('未通过失败');
    }
    
    public function verify(){
    
        $data['id']=$this->_get('id','intval');
        $data['isverify']=$this->_get('isverify','intval');
        
        $ret=M('Partyideapaper')->save($data);
        
        
        if($ret) $this->success('通过成功',U('index'));
        else $this->error('通过失败');
    }
    
    
}