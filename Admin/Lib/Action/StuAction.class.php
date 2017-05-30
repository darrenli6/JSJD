<?php
 
class StuAction extends CommonAction {
    
    public function index(){
 
        
        import('ORG.Util.Page');
        $count =M('Stu')->alias('a')
               ->field('a.stuid,b.stuname,c.name')
               ->join('LEFT JOIN __STUINFO__ b ON b.stu_id=a.stuid
                       LEFT JOIN __CLASSINFO__ c ON c.id=b.cid 
                      ') ->count();
        
        $page = new Page($count, 20);
        $limit = $page->firstRow . ',' . $page->listRows;
         
        $this->page = $page->show();
        
         
         
        $this->CData=M('Stu')->alias('a')
               ->field('a.id,a.stuid,b.stuname,b.face,c.name,a.locked')
               ->join('LEFT JOIN __STUINFO__ b ON b.stu_id=a.stuid
                       LEFT JOIN __CLASSINFO__ c ON c.id=b.cid 
                      ')  
               ->select();
         
        
        $this->assign(array(
                
                'imagepath'=>C('SHOWIMAGE'),
                'title'=>'学生信息', 
          ));
        $this->display();
    }
    public function changeLocked(){
        $id=$this->_get('id','intval');
        $status=$this->_get('status','intval');
        $data=array(
          'id'=>$id,
          'locked'=>$status,  
        );
        if(M('Stu')->save($data))
            $this->success('操作成功');
        else $this->error('操作失败');
    }
    
    public function add(){
        
        if ($this->isPost()) {
            
            $registarea=$_POST['province'].'-'.$_POST['city'].'-'.$_POST['country'];
            $resourcearea=$_POST['provinces'].'-'.$_POST['citys'].'-'.$_POST['countrys'];
            $data = array(
                'stuid'   => $this->_post('stuid'),
                'password'=> $this->_post('stuid','md5'),
            );
           
            $datai= array(
                'stu_id'   => $this->_post('stuid'),
                'stuname' => $this->_post('stuname'),
                'idcard' => $this->_post('idcard'),
                'sex' => $this->_post('sex'),
                'birthday' => $this->_post('birthday'),
                'nation' => $this->_post('nation'),
                'registarea' => $registarea,
                'resourcearea' => $resourcearea,
                'face' => $this->_post('face'),
                'email' => $this->_post('email'),
                'mobilephone' => $this->_post('mobilephone'),
                'parentstel' => $this->_post('parentstel'),
                'stuinfo' => $this->_post('stuinfo'),
                'deid' => $this->_post('deid'),
                'cid'     => $this->_post('cid'),
            );
            
            if (M('Stu')->data($data)->add() && M('Stuinfo')->data($datai)->add() ) {
                $this->success('添加成功', U('index'));
                die;
            } else {
                $this->error('添加失败，请重试...');
                die;
            }
        
        }
        //get department information
        $this->DData=M('Departinfo')->field('id,departname')->select();
        //profession information
        $this->PData=M('Profession')->select();
        //get class infomation
        $this->CData=M('Classinfo')->where(array(
             'id'=>array('eq',1),
        ))->select();
        //get partyinfo
        $this->Partyinfo=M('Partyrole')->field('id,rolename')->select();
        $this->assign(array(
            'title'=>'添加学生',
        ));
        $this->display();
    }
    
    public function edit(){
       
        if($this->isPost()){
            $registarea=$_POST['province'].'-'.$_POST['city'].'-'.$_POST['country'];
            $resourcearea=$_POST['provinces'].'-'.$_POST['citys'].'-'.$_POST['countrys'];
            
            $data = array(
                'id'      => $this->_post('id'),
                'stuid'   => $this->_post('stuid'),
                'password'=> $this->_post('stuid','md5'),
            );
           
            $datai= array(
                'id'           => $this->_post('id'),
                'idcard'       => $this->_post('idcard'),
                'stu_id'       => $this->_post('stuid'),
                'stuname'      => $this->_post('stuname'),
                'sex'          => $this->_post('sex'),
                'birthday'     => $this->_post('birthday'),
                'nation'       => $this->_post('nation'),
                'registarea'   => $registarea,
                'email'        => $this->_post('email'),
                'resourcearea' => $resourcearea,
                'face'         => $this->_post('face'),
                'mobilephone'  => $this->_post('mobilephone'),
                'parentstel'   => $this->_post('parentstel'),
                'stuinfo'      => $this->_post('stuinfo'),
                'deid'         => $this->_post('deid'),
                'cid'          => $this->_post('cid'),
            );
            $old=M('Stuinfo')->field(array('face'))->find($this->_post('id'));
            if (M('Stu')->data($data)->save() && M('Stuinfo')->data($datai)->save() ) {
                if(!empty($old) && $old['face']!=$data['face'] )
                    @unlink(C('UPLOAD_PATH').$old['face']);
                $this->success('修改成功', U('index'));
                die;
            } else {
                $this->error('修改失败，请重试...');
                die;
            }
        }
        
        if($this->isGet()){
            $id = $this->_get('id', 'intval');
            $this->SData=M('Stuinfo')->find($id);
        }
        
        //get department information
        $this->DData=M('Departinfo')->field('id,departname')->select();
        //profession information
        $this->PData=M('Profession')->select();
        //get cid -> pid ->pname 
        $this->classinfo=M('Classinfo')->where(array(
            'id'=>array('eq',$this->SData['cid'])
        ))->find();
       // dump($pid);die;
        //get class infomation
        $this->CData=M('Classinfo')->select();
        //get partyinfo
        $this->Partyinfo=M('Partyrole')->field('id,rolename')->select();
        $this->assign(array(
            'imagepath' =>C('SHOWIMAGE'),
            'title'=>'修改学生',
        ));
        $this->display();
    }
    
    public function del(){
        $id = $this->_get('id', 'intval');
        $stuid = $this->_get('stuid');
        if (M('stu')->delete($id) && M('stuinfo')->where("stu_id=$stuid")->delete() ) {
            $this->success('删除成功', U('index'));
        } else {
            $this->error('删除失败，请重试...');
        }
    }
    
    public function ajaxLoadFace(){
        if(!$this->isAjax()){
            echo 'failed';
            die;
        }
        
        if (isset($_POST['upload'])) {
        
            $result=array();
             
            $arr=explode('.', $_FILES['uploadlogo']['name']);
            $size=count($arr)-1;
            $file_name = microtime(true).time().'.'.$arr[$size];
        
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
    
    public function ajaxLoadClass(){
        if(!$this->isAjax()){
            echo '访问错误';
            die;
        }
        $result=array();
        $pid=$this->_post('pid','intval');
        
        $CData=M('Classinfo')->where(array('pid'=>array('eq',$pid)))->select();
        if($CData){
            $result['error']=0;
            $result['data']=$CData;
        }else{
            $result['error']=1;
        }
        echo json_encode($result);
        die;
    }
    //check stuid exitsts
    public function checkStuid(){
        if(!$this->isAjax()){
            echo 'error';
            die;
        }
        $stuid = $this->_post('stuid');
        $where = array('stuid'=>$stuid);
        if(M('Stu')->where($where)->getField('id')){
            echo 'false';
        }else{
            echo 'true';
        }
        
    }
    
    
    
    //upload data by xls
    public function uploadDataByxls(){
      
        if ($this->isPost()) {
            //先做一个文件上传，保存文件
            $path = $_FILES['import'];
            if(empty($path)){
                $this->error('没有文件进行上传');
               }
            }
            
            $filePath =C('UPLOADEXCEL').$path['name'];
             
            $result=move_uploaded_file($path["tmp_name"],$filePath);
         
            //导入
            $datainfo=array('A'=>'stu_id','B'=>'stuname','C'=>'cid');
            $tablenameinfo='stuinfo'; 
            $stuinfo=$this->excel_fileput($filePath,$datainfo,$tablenameinfo);
            
            if($stuinfo ){
               $this->success('上传成功'); 
            }else{
               $this->error('上传失败');
            }
             
    }
    public function showStu(){
        if(!!$id=$this->_get('id')){
        $where=array('id'=>$id);
        $this->stuinfo = D('StuView')
                         ->where($where) 
                         ->find();
        header('Content-Type:text/html;charset=utf8');
        //dump($this->stuinfo);
        
        //show quality
        $this->qData=M('Quastu')
        ->alias('a')
        ->field('a.addtime,a.store,b.qualityname name')
        ->join('LEFT JOIN __QUALITYDEVESTORE__ b ON b.id=a.qid')
        ->where(array(
                'a.sid'=>array('eq',$id),
            ) ) 
        ->select();
         
        //show subjectrace
        $this->srData=M('subjectrace')
        ->alias('a')
        ->field('a.racename,a.racetime,a.endtime')
        ->join('LEFT JOIN __RACETOSTU__ b ON b.rid=a.id') 
        ->where(array(
            'b.sid'=>array('eq',$id),
        ) )
        ->select();
       // var_dump($this->srData);die;
        
        $this->assign(array(
            'title'=>'学生个人信息',
            'path'=>C('SHOWIMAGE'),
        ));
        $this->display();
        }else{
            $this->error('访问错误');
        }
        
    }
    
    public function toPdfStuinfo(){
        
        
        $id=$this->_get('sid');
        $html='';
        $html=$this->getStuinfo($id);
        include("./Public/mpdf/mpdf.php");
        $mpdf = new mPDF('zh-CN');
        $mpdf->useAdobeCJK = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit;
        
    }
    
    public function sechStu(){
        
        if (isset($_GET['sech']) && isset($_GET['type'])) {
            if(!$this->isAjax()) die('error');
            
			$where = $_GET['type'] ? array('stuid' => $this->_get('sech', 'intval')) : array('stuname' => array('LIKE', '%' . $this->_get('sech') . '%'));
				$user =M('Stu')->alias('a')
			       ->field('a.id,a.stuid,b.*,c.classid,c.id claid,c.name,d.rolename,e.departname')
			       ->join('
			           LEFT JOIN __STUINFO__ b ON b.stu_id=a.stuid
			           LEFT JOIN __CLASSINFO__ c ON c.id=b.cid
			           LEFT JOIN __PARTYROLE__ d ON d.id=b.partyid
			           LEFT JOIN __DEPARTINFO__ e ON e.id=b.deid
			           ')
			       ->where($where)
			       ->select();
			$result=$user ? $user : null;
			echo json_encode($result);
			die;
		}
   
        $this->assign(array(
            'title'=>'学生检索',
            'imagepath'=>C('SHOWIMAGE'),
        ));
        $this->display();
    }
    public function printStu(){
 
        if(!session('uid')) $this->error('请您登陆',U('Login/index'));
        if (isset($_GET['val']) && isset($_GET['type'])) {
        
            $where = $_GET['type'] ? array('stuid' => $this->_get('val', 'intval')) : array('stuname' => array('LIKE', '%' . $this->_get('val') . '%'));
             
        	$user =M('Stu')->alias('a')
		       ->field('a.id,a.stuid,b.*,c.classid,c.id claid,c.name,d.rolename,e.departname')
		       ->join('
		           LEFT JOIN __STUINFO__ b ON b.stu_id=a.stuid
		           LEFT JOIN __CLASSINFO__ c ON c.id=b.cid
		           LEFT JOIN __PARTYROLE__ d ON d.id=b.partyid
		           LEFT JOIN __DEPARTINFO__ e ON e.id=b.deid
		           ')
		       ->where($where)
		       ->select();
            $user ? $user : false;
            
            $titlelist=array();
            $titlelist['a'] = "学号";
            $titlelist['b'] = "学生姓名";
            $titlelist['c'] = "民族";  
            $titlelist['d'] = "学生户籍";
            $titlelist['e'] = "学生生源";
            $titlelist['f'] = "政治面貌";
            $titlelist['g'] = "出生年月";
            $titlelist['h'] = "班级id";
            $titlelist['i'] = "学生性别";
            $titlelist['j'] = "学生手机号";
            $titlelist['k'] = "父母联系方式";
            
          
            $this->data_excelfile($titlelist,$user);
            
        }
        
    }
    
    /**************** show quality development section*******************************/
    public function showQuality(){
         
        $id=intval($_GET['id']);
       
        if(!empty($id))
        {  
            
          $this->qsData=D('StuQualityView')->where(array(
              'sid'=>array('eq',$id),
          ))
          ->order('addtime desc')
          ->select();
         
          $this->assign(array(
             'sid'   => $id, 
             'title' => '项目列表',
          ));  
          $this->display();
          
        }else{
           
        $this->error('error');
        }
        
    }
    
    public function addQuality(){
        if($this->isPost()){
             
            $data=array(
                
                'sid'=>$this->_post('sid','intval'),
                'qid'=>$this->_post('qid','intval'),
                'store'=>$this->_post('store','intval'),
                'addtime'=>$this->_post('addtime'),
            );
            $ret=M('Quastu')->add($data);
            $ret?$this->success('添加成功',U('showQuality',array('id'=>$data['sid'])))
            :$this->error('添加失败');
            die;
        
        }
        
        if(!!$sid=$this->_get('id','intval')){
           
            //get Qualitydevelopment item
            $this->stuinfo=M('Stu')
                           ->field('id,stuid')
                           ->where(array('id'=>array('eq',$sid))) 
                           ->find();
            $this->qItems=M('Qualitydevestore')
                          ->field('id,qualityname,fullstore')
                          ->select();
            
            $this->display();
        }else{
            $this->error('error access');
        }
       
    
    }
    
    public function editQuality(){
        $id=$this->_get('id','intval');  
        
        if (!!$sid=$this->_get('sid','intval'))
        {
            //get Qualitydevelopment item
            $this->stuinfo=M('Stu')
                            ->field('id,stuid')
                            ->where(array('id'=>array('eq',$sid)))
                            ->find();
            $this->qItems=M('Qualitydevestore')
                            ->field('id,qualityname,fullstore')
                            ->select();
             
            $this->qsItem=M('quastu')->where(array(
                                'id'=>array('eq',$id),
                            ))->find(); 
             
        }
        
        if($this->isPost()){
             
            $data=array(
                'id'=>$id,
                'sid'=>$this->_post('sid','intval'),
                'qid'=>$this->_post('qid','intval'),
                'store'=>$this->_post('store','intval'),
                'addtime'=>$this->_post('addtime'),
            );
             $ret=M('Quastu')->save($data);
             $ret?$this->success('更新成功',U('showQuality',array('id'=>$data['sid'])))
            :$this->error('更新失败');
             die;
        
        }
        $this->assign(array(
            'id'=>$id,
            'sid'=>$_GET['sid'],
            'title'=>'编辑素质拓展表',
        ));
        $this->display();
        
    }
    
    public function delQuality(){
        
        $id=$this->_get('id','intval');
        $ret=M('quastu')->delete($id);
        $ret?$this->success('删除成功'):$this->error('删除失败');
    }
/********************packaging function method***********************/    
    
    /**data to excel
     * @param Array $resource data
     * @param Array $titlelist
     */
    private function data_excelfile($titlelist,$sourcedata){
        
        include './Public/Excel/PHPExcel.php';
        
        	
        error_reporting(E_ALL);
        date_default_timezone_set('Europe/London');
        $objPHPExcel = new PHPExcel();
        /*以下是一些设置 ，什么作者  标题啊之类的*/
        $objPHPExcel->getProperties()->setCreator("test")
        ->setLastModifiedBy("czxy")
        ->setTitle("数据EXCEL导出")
        ->setSubject("数据EXCEL导出")
        ->setDescription("备份数据")
        ->setKeywords("excel")
        ->setCategory("result file");
        	
 
        
        $objPHPExcel->setActiveSheetIndex(0)
        //Excel的第A列，uid是你查出数组的键值，下面以此类推
        ->setCellValue('A1', $titlelist['a'])
        ->setCellValue('B1', $titlelist['b'])
        ->setCellValue('C1', $titlelist['c'])
        ->setCellValue('D1', $titlelist['d'])
        ->setCellValue('E1', $titlelist['e'])
        ->setCellValue('F1', $titlelist['f'])
        ->setCellValue('G1', $titlelist['g'])
        ->setCellValue('H1', $titlelist['h'])
        ->setCellValue('I1', $titlelist['i'])
        ->setCellValue('J1', $titlelist['j'])
        ->setCellValue('K1', $titlelist['k']) ;
      
        foreach($sourcedata as $k => $v){
        
            $num=$k+2;
            $objPHPExcel->setActiveSheetIndex(0)
        
            //Excel的第A列，uid是你查出数组的键值，下面以此类推
            ->setCellValue('A'.$num, $v['stuid'])
            ->setCellValue('B'.$num, $v['stuname'])
            ->setCellValue('C'.$num, $v['nation'])
            ->setCellValue('D'.$num, $v['registarea'])
            ->setCellValue('E'.$num, $v['resourcearea'])
            ->setCellValue('F'.$num, $v['rolename'])
            ->setCellValue('G'.$num, $v['birthday'])
            ->setCellValue('H'.$num, $v['classid'])
            ->setCellValue('I'.$num, $v['sex']==1?'男':'女')
            ->setCellValue('J'.$num, $v['mobilephone'])
            ->setCellValue('K'.$num, $v['parentstel']);
            	
        }
        
    
        
        $objPHPExcel->getActiveSheet()->setTitle('User');
        $objPHPExcel->setActiveSheetIndex(0);
        $name = "学生信息";
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel;charset=utf8');
        header('Content-Disposition: attachment;filename="'.$name.'.xls"');
        header('Cache-Control: max-age=0');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
       
        
        $objWriter->save('php://output');
        	
        exit;
        
        
    }
    
    //upload excel data
    private function excel_fileput($filePath,$data,$tablename){
    
        include './Public/Excel/PHPExcel.php';
    
        $PHPExcel = new PHPExcel();
        $PHPReader = new PHPExcel_Reader_Excel2007();
    
        if(!$PHPReader->canRead($filePath)){
            $PHPReader = new PHPExcel_Reader_Excel5();
            if(!$PHPReader->canRead($filePath)){
                echo 'no excel';
                return ;
            }
        }
         
        // 加载excel文件
        $PHPExcel = $PHPReader->load($filePath);
         
        // 读取excel文件中的第一个工作表
        $currentSheet = $PHPExcel->getSheet(0);
        // 取得最大的列号
        $allColumn = $currentSheet->getHighestColumn();
        // 取得一共有多少行
        $allRow = $currentSheet->getHighestRow();
         
        // 从第二行开始输出，因为excel表中第一行为列名
        for($currentRow = 2;$currentRow <= $allRow;$currentRow++){
            //scan file A  B  C column data
            for($currentColumn= 'A';$currentColumn<= $allColumn; $currentColumn++){
                $val = $currentSheet->getCellByColumnAndRow(ord($currentColumn) - 65,$currentRow)->getValue();
    
                if($currentColumn <= $allColumn){
                    $data1[$currentColumn]=$val;
                }
            }
    
            $sarr=array();
            foreach($data as $key=>$val){
                if($key=='A')
                {
                    $sarr['stuid']=$data1[$key];
                    $sarr['password']=$data1[$key];
                }
                $data2[$val]=$data1[$key];
            }
             
            $m = D($tablename)->add($data2);
            $s = D('stu')->add($sarr);
             
        }
         
        if ($m && $s) {
            return true;
        }else {
            return false;
        }
        
        
        
    }
    
    
      private function getStuinfo($id){
          header('Content-Type:text/html;charset=utf8');
          //show basic  information
          $where=array('id'=>$id);
          $stuinfo = D('StuView')
          ->where($where)
          ->find();
      
          $path=C('SHOWIMAGE');
          //show quality
          $qData=M('Quastu')
          ->alias('a')
          ->field('a.addtime,a.store,b.qualityname name')
          ->join('LEFT JOIN __QUALITYDEVESTORE__ b ON b.id=a.qid')
          ->where(array(
              'a.sid'=>array('eq',$id),
          ) )
          ->select();
           
          //show subjectrace
          $srData=M('subjectrace')
          ->alias('a')
          ->field('a.racename,a.racetime,a.endtime')
          ->join('LEFT JOIN __RACETOSTU__ b ON b.rid=a.id')
          ->where(array(
              'b.sid'=>array('eq',$id),
          ) )
          ->select();
          $html='';
          
          
          $html.=' <style type="text/css">
table {
    position: relative;
    margin: auto;
    border: 1px solid black;
    height: 400px;
    width: 1000px;
    border-spacing: 0px;
    border-collapse: collapse;
}
 
table tr td {
    border: 1px solid black;
    width: 100px;
    height: 50px;
}
 
table tr {
    height: 50px;
}
</style>
</head>

<body style="height:auto;background:#f8f8f8;">
<p>
  ';
 
$html.='</p>
<table>
        <tr >
            <td rowspan="4">基本情况</td>
            <td>姓名</td>';
    $html.= '<td>'.$stuinfo['stuname'].'</td>';
     $html.= ' <td>性别</td>';
    $html.= '        <td>';
            $sex=$stuinfo['sex']==1?'男':'女';
           $html.=$sex;
            $html.= '</td>
            <td>出生年月</td>
            <td>';
            
    $html.= ' '.substr($stuinfo['birthday'],0,10).'</td>
            <td rowspan="3" >
            <img  src="'.$path.$stuinfo['face'].'"  width="100px" height="120px" /></td>
              
        </tr>
            <tr >
           <td colspan="1">身份证号</td>';
      $html.= '      <td colspan="1">'.$stuinfo['idcard'].'</td>
           <td colspan="1">生源地</td>
           <td colspan="1">'.$stuinfo['resourcearea'].'</td>
           <td colspan="1">注册地</td>
           <td colspan="1">'.$stuinfo['registarea'].'</td>
        </tr>
          <tr >
           <td colspan="1">父母电话</td>
           <td colspan="1">'.$stuinfo['parentstel'].'</td>
           <td colspan="1">民族</td>
           <td colspan="1">'.$stuinfo['nation'].'</td>
           <td colspan="1">联系方式</td>
           <td colspan="1">'.$stuinfo['mobilephone'].'</td>
             
        </tr>
         <tr >
           <td colspan="1">E-Mail</td>
           <td colspan="1">'.$stuinfo['email'].'</td>
            <td colspan="1">学号</td>
           <td colspan="1">'.$stuinfo['stuid'].'</td>
           <td colspan="2">政治面貌</td>
           <td colspan="2">'.$stuinfo['rolename'].'</td>
             
        </tr>';
       if($qData):
 $html.= ' <tr >
         <td rowspan="'.(count($qData)+1).'">素质拓展</td>
           <td colspan="2"></td>
           <td colspan="2">时间</td>
           <td colspan="2">名称</td>
           <td colspan="2">分数</td>
        </tr>';
        foreach($qData as $k=>$v): 
    $html.=     '    <tr >';
    $html.=     '         <td colspan="2">第'.($k+1).'次</td>';
     $html.=     '       <td colspan="2">'.$v['addtime'].'</td>';
     $html.=     '       <td colspan="2">'.$v['name'].'</td>';
    $html.=     '        <td colspan="2">'.$v['store'].'</td></tr>';
       endforeach;
 
  
        endif; 
  if($srData):
       $html.='<tr >
            <td rowspan="'.(count($srData)+1).'">学科竞赛</td>
           <td colspan="1"></td>
           <td colspan="2">竞赛名称</td>
           <td colspan="2">开始时间</td>
           <td colspan="2">结束时间</td>
           
        </tr>';
     foreach($srData as $k=>$v):  
      $html.='       <tr ><td colspan="1">'.($k+1).'</td>';
       $html.='     <td colspan="2">'.$v['racename'].'</td>';
       $html.='     <td colspan="2">'.$v['racetime'].'</td>';
       $html.='     <td colspan="2">'.$v['endtime'].'</td>';
       $html.='  </tr>';
 endforeach; 
     endif;
       $html.='<tr >
           
           <td rowspan="2" colspan="2">备注</td>
           <td rowspan="2" colspan="7">'.$stuinfo['stuinfo'].'</td>    
        </tr>
          <tr >
    
        </tr>
    
    </table>
</body>';
            
        
          return $html;
          
      }
    
}