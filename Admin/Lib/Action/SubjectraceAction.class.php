<?php
 
class  SubjectraceAction extends CommonAction {
    
    public function index(){
  
        import('ORG.Util.Page');
        $count = M('Subjectrace')->count();
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
        $SModel=M('Subjectrace');
        $SData=$SModel->select();
        
        
        
        $this->assign(array(
                'title'=>'学科竞赛信息', 
                'path' =>C('SHOWIMAGE'),
                'SData'=>$SData, 
               
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
            $file_name = 'subjectrace'.microtime(true).time().'.'.$arr[$size];
            
            $result=checkImage($_FILES['uploadlogo']);
            
            if(!empty($result)) die(json_encode($result));
                
            $bool=move_uploaded_file($_FILES['uploadlogo']['tmp_name'],C('UPLOAD_PATH') . $file_name);
               
            if($bool)  {
                $result['state']    =  1;
                $result['file_name']=  $file_name;
            }
            
            die(json_encode($result));
            
        }
        
        
    }
 
    public function show(){
    
        $id = $this->_get('id', 'intval');
    
        $ret=M('Subjectrace')->field('racecontent')->find($id);
        $this->content=$ret['racecontent'];
         
        $this->display();
    
    }
  
    
    public function add(){
        
        if ($this->isPost()) {
           // var_dump($_POST);die;
            $deds=implode(',', $_POST['deds']);
            $stus=explode('-', rtrim($_POST['stus'],'-'));
            
            $data = array(
                'racename'    => $this->_post('racename'),
                'racecontent' => $this->_post('racecontent'),
                'racetime'    => $this->_post('racetime'),
                'endtime'     => $this->_post('endtime'),
                'smallimg'     => $this->_post('smallimg'),
                'summary'      =>$this->_post('summary'),
                'deds'        => $deds,
            );
            
            if (!!$newId=M('Subjectrace')->data($data)->add()) {
                //handle photos in the subjectrace
                if(!empty($_POST['photos'])){
                foreach($_POST['photos'] as $k=>$v){
                    $data['rid']=$newId;
                    $data['img']=$v;
                    M('Racetoimg')->add($data);
                }
                }
                //handle subjectrace's student who will join race
                if(!empty($_POST['photos'])){
                foreach ($stus as $k=>$v){
                    $data['rid']=$newId;
                    $data['sid']=$v;
                    M('Racetostu')->add($data);
                }
                }
                $this->success('添加学科竞赛成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        
        //get department info
        $this->DData=M('Departinfo')->field('id,departname')->select();
       
        $this->assign(array(
            'title'=>'添加学科竞赛',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $deds=implode(',', $_POST['deds']);
            $stus=array_unique(explode('-', rtrim($_POST['stus'],'-')));
            
             
            $rid=intval($this->_post('id'));
            $data = array(
                'id'          => $rid,
                'racename'    => $this->_post('racename'),
                'racecontent' => $this->_post('racecontent'),
                'racetime'    => $this->_post('racetime'),
                'endtime'     => $this->_post('endtime'),
                'smallimg'     => $this->_post('smallimg'),
                'summary'      =>$this->_post('summary'),
                'deds'        => $deds,
            );
           
            $old=M('Subjectrace')->field(array('smallimg'))->find($this->_post('id'));
            if (M('Subjectrace')->save($data)) {
                //check old and new Image
                if(!empty($old) && $old['smallimg']!=$data['smallimg'] ) 
                     @unlink(C('UPLOAD_PATH').$old['smallimg']);
                //delete old table racetostu
                M('Racetostu')->where("rid=$rid")->delete();
                    foreach ($stus as $k=>$v){
                        $data['rid']=$rid;
                        $data['sid']=$v;
                        M('Racetostu')->add($data);
                    }  
              
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->SData=M('Subjectrace')->find($id);
            $this->rsData=M('Racetostu')->alias('a')
                          ->field('a.sid sid,b.stuid stuid')
                          ->join('LEFT JOIN __STU__ b ON b.id=a.sid')
                          ->where(array(
                                  'a.rid'=>array('eq',$id),
                              ))
                          ->select();
           
        }
        
        //get department info
        $this->DData=M('Departinfo')->field('id,departname')->select();
        
        
        
        $this->assign(array(
            'title'=>'修改学科竞赛',
            'path' =>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $db=M('Subjectrace');
        $old=$db->field(array('smallimg'))->find($id);
        if ($db->delete($id)) {
            if(!empty($old)) @unlink(C('UPLOAD_PATH').$old['smallimg']);
            M('Racetostu')->where("rid=$id")->delete();
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
   
    public function lock(){
        
        $data['id']=$this->_get('id','intval');
        $data['is_show']=$this->_get('is_show','intval');
        $ret=M('Subjectrace')->save($data);
        if($ret) $this->success('锁定成功',U('index'));
        else $this->error('锁定失败');
    }
    
    public function unlock(){
        
        $data['id']=$this->_get('id','intval');
        $data['is_show']=$this->_get('is_show','intval');
        $ret=M('Subjectrace')->save($data);
        if($ret) $this->success('开发成功',U('index'));
        else $this->error('开发失败');
    }
    
    public function ajaxSearchStu(){
       if(!$this->isAjax()) exit('error');
       $num=$this->_post('num');
       $res=M('Stu')->field('id,stuid')->where(array(
          'stuid'=>array('like',"%$num%")
       ))->select();
        
       $result=array();
       if($res){
          $result['status']=1;
          $result['data']=$res;
       }else{
          $result['status']=0;
          
       }
       die(json_encode($result));
    }
    
    //check imagefile in public/upload/subjectrace
    public function checkexists(){
        
        $targetFolder ='/Public/Upload/Subjectrace/'; // Relative to the root and should match the upload folder in the uploader script
        die(__ROOT__. $targetFolder);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] .__ROOT__. $targetFolder . '/' . $_POST['filename'])) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function uploadifive(){
        $result=array();
        $uploadDir = '/Public/Upload/Subjectrace/';
        
        // Set the allowed file extensions
        $fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions
        
        $verifyToken = md5('unique_salt' . $_POST['timestamp']);
        
        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile   = $_FILES['Filedata']['tmp_name'];
            $uploadDir  = $_SERVER['DOCUMENT_ROOT'].__ROOT__. $uploadDir;
            $arr=explode('.', $_FILES['Filedata']['name']);
            $ext=$arr[count($arr)-1];
            $filename='subject'.time().+rand(1, 1000).'.'.$ext;
            $targetFile = $uploadDir .$filename;
        
            // Validate the filetype
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array(strtolower($fileParts['extension']), $fileTypes)) {
        
                // Save the file
                move_uploaded_file($tempFile, $targetFile);
                //echo $targetFile;
                $result['status']=1;
                $result['filename']=$filename;
                die(json_encode($result));
        
            } else {
        
                // The file type wasn't allowed
              //  echo 'Invalid file type.';
                $result['status']=0;
                $result['msg']='上传失败';
            }
        }
        
    }
}