<?php

class UsercenterAction extends CommonAction {
    
    
    
    public function index(){
        
        $stuinfo=M('Stuinfo')
        ->where(array(
            'stu_id'=>array('eq',session('stuid'))
        ))
        ->find();
        
        
        $this->display();
    }
    
    public function main(){
        
        $this->display();
    }
    
    
    /**
     * get userinfo 
     * 
     */
    
    public function personinfo(){
        $sid=session('sid');
        $this->s=M('Stuinfo')->find($sid);
        
        $this->assign(
            array(
                'mainarea'=>'个人中心',
                'title'   =>'个人资料',
            )
            );
        
        $this->display();
    }
    
    
    /**
     * 上传党员文档
     * 
     */
    public  function uploadPartyfile(){
        
        if($this->isPost()){
            $sid=session('sid');
             
            $data=array(
              'title'=>$this->_post('title'),
              'papertime'=>time(),
              'paperurl'=>$this->_post('paperurl'),
              'isverify'=>0,
               'sid'=>$sid,       
            );
            
            $ret=M('partyideapaper')->add($data);
            if($ret){
                $this->success('提交成功');
            }else{
                $this->error('提交失败');
            }
            die;
        }
        $this->mainarea='上传文件';
        $this->display();
    } 
    
    public function modifypwd()
    {   
        if($this->isPost())
        {  
            if($this->_post('new')!=$this->_post('new1'))
            {
                $this->error('密码不一致');
            }
            
            $r=M('stu')->field('id')->where(array(
                'id'=>array('eq',session('sid')),
                'password'=>array('eq',$this->_post('old','md5')),
            ))->find();
            if(!$r) $this->error('原密码错误');
            
            $data=array(
                'id'      =>session('sid'),
                'password'=>$this->_post('new','md5'),
            );
            $rs=M('stu')->save($data);
            if($rs){
                session_unset();
                session_destroy();
                $this->success('修改成功,请重新登录',U('Login/index'));
            }else{
                $this->error('修改失败');
            }
            die;
        }
        
        $this->display();
    }
    public function allfile()
    {  
        
        $this->data=M('partyideapaper')
               ->where(array(
                   'sid'=>session('sid'),
               ))
               ->select();
        $this->display();
        
        $this->mainarea='文件列表';
    }
    public function handlerfile()
    {
        
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
    
    
    public function showQuality(){
        
       $sessionid=session('sid');
       
       $this->data=M('Quastu')
       ->alias('a')
       ->join('LEFT JOIN __QUALITYDEVESTORE__ b ON b.id=a.qid ')
       ->where(array(
           'a.sid'=>array('eq',$sessionid)
       ))
       ->select();
       
      // var_dump($this->data);
       $this->display();
        
    }
    
    public function showStu()
    {
        if(!!$id=session('sid')){
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
    /*************some private method*********************/

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