<?php
 
class  DepartinfoAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Departinfo')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $DModel=D('Departinfo');
        $this->DData=$DModel->select();
       
        
        $this->assign(array(
                'title'=>'部门信息', 
                'path' =>C('SHOWIMAGE'),
          ));
        $this->display();
    }
    
    public function handlerimage(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
        
        if (isset($_POST['upload'])) {
            
            $result=array();
             
            $arr=explode('.', $_FILES['uploadlogo']['name']);
            $size=count($arr)-1;
            $file_name = microtime(true).date('Y-m-d').'departinfo'.'.'.$arr[$size];
            
            $result=checkImage($_FILES['uploadlogo']);
            
            if(!empty($result)) die(json_encode($result));
                
            $bool=move_uploaded_file($_FILES['uploadlogo']['tmp_name'],C('UPLOAD_PATH') . $file_name);
               
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
                'id'         => $this->_post('id'),
                'departname' => $this->_post('departname'),
                'departlogo' => $this->_post('departlogo'),
                'context'    => $this->_post('context'),
            );
        
            if (M('Departinfo')->data($data)->add()) {
                $this->success('添加部门成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
        $this->assign(array(
            'title'=>'添加部门',
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
           
            $old=M('Departinfo')->field(array('departlogo'))->find($this->_post('id'));
            if (M('Departinfo')->save($data)) {
               
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
            $this->DData=M('Departinfo')->find($id);
        }
        
       
        $this->assign(array(
            'title'=>'修改部门',
            'path' =>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $db=M('Departinfo');
        $old=$db->field(array('departlogo'))->find($id);
        if ($db->delete($id)) {
            if(!empty($old)) @unlink(C('UPLOAD_PATH').$old['departlogo']);
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
    public function delall(){
        $result=array();
        if(!$this->isAjax()){
            exit('error');
        }
        
        $ids=rtrim($this->_post('ids'),',');
        
        $db=M('Departinfo');
        $old=$db->field(array('departlogo'))->select($ids);
         
        if ($db->delete($ids)) {
            foreach($old as $k=>$v){
                if(!empty($v['departlogo']))  @unlink(C('UPLOAD_PATH').$v['departlogo']);
            }
            
            $result['status']=1;
             
        } else {
            $result['status']=0;
            $result['msg']='删除失败';
        }
         
        die($result);
    
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
    
    
    
}