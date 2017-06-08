<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
	 
		<title><?php echo ($stuinfo["stuname"]); echo ($title); ?>  </title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/resume/css/style.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/resume/css/new.css" media="all"/>
		<link rel="stylesheet" href="__PUBLIC__/resume/css/bootstrap.min.css?v=2159" />
		<link rel="stylesheet" href="__PUBLIC__/resume/css/zxbj_base.css?v=2818" />
		<link rel="stylesheet" href="__PUBLIC__/resume/css/jm0203.css" />
<style type="text/css">
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
  
  <a href="<?php echo U('toPdfStuinfo',array('sid'=>$stuinfo[id]));?>" target="_blank">打印</a>
</p>
<table>
        <tr >
            <td rowspan="4">基本情况</td>
            <td>姓名</td>
            <td><?php echo ($stuinfo["stuname"]); ?></td>
            <td>性别</td>
            <td><?php echo $stuinfo['sex']==1?'男':'女'; ?></td>
            <td>出生年月</td>
            <td><?php echo substr($stuinfo['birthday'],0,10); ?></td>
            <td rowspan="3" ><img  src="<?php echo ($path); echo ($stuinfo["face"]); ?>"  width="100px" height="120px" /></td>
              
        </tr>
            <tr >
           <td colspan="1">身份证号</td>
           <td colspan="1"><?php echo ($stuinfo["idcard"]); ?></td>
           <td colspan="1">生源地</td>
           <td colspan="1"><?php echo ($stuinfo["resourcearea"]); ?></td>
           <td colspan="1">注册地</td>
           <td colspan="1"><?php echo ($stuinfo["registarea"]); ?></td>
           
              
        </tr>
          <tr >
           <td colspan="1">父母电话</td>
           <td colspan="1"><?php echo ($stuinfo["parentstel"]); ?></td>
           <td colspan="1">民族</td>
           <td colspan="1"><?php echo ($stuinfo["nation"]); ?></td>
           <td colspan="1">联系方式</td>
           <td colspan="1"><?php echo ($stuinfo["mobilephone"]); ?></td>
             
        </tr>
         <tr >
           <td colspan="1">E-Mail</td>
           <td colspan="1"><?php echo ($stuinfo["email"]); ?></td>
            <td colspan="1">学号</td>
           <td colspan="1"><?php echo ($stuinfo["stuid"]); ?></td>
           <td colspan="2">政治面貌</td>
           <td colspan="2"><?php echo ($stuinfo["rolename"]); ?></td>
             
        </tr>
      <?php  if($qData):?>
   <tr >
      
         <td rowspan="<?php echo count($qData)+1; ?>">素质拓展</td>
           <td colspan="2"></td>
           <td colspan="2">时间</td>
           <td colspan="2">名称</td>
           <td colspan="2">分数</td>
        </tr>
        <?php foreach($qData as $k=>$v): ?>
            <tr >
            <td colspan="2">第<?php echo ($k+1); ?>次</td>
           <td colspan="2"><?php echo $v['addtime']; ?></td>
           <td colspan="2"><?php echo $v['name']; ?></td>
           <td colspan="2"><?php echo $v['store']; ?></td>
              
        </tr>
        <?php endforeach; ?>
 
  
       <?php endif; ?>
 <?php  if($srData):?>
         <tr >
            <td rowspan="<?php  echo count($srData)+1; ?>">学科竞赛</td>
           <td colspan="1"></td>
           <td colspan="2">竞赛名称</td>
           <td colspan="2">开始时间</td>
           <td colspan="2">结束时间</td>
           
        </tr>
         <?php foreach($srData as $k=>$v): ?> 
            <tr >
         
           <td colspan="1"><?php echo ($k+1); ?></td>
           <td colspan="2"><?php echo $v['racename']; ?></td>
           <td colspan="2"><?php echo $v['racetime']; ?></td>
           <td colspan="2"><?php echo $v['endtime']; ?></td>
        </tr>
        <?php endforeach; ?>
     <?php endif; ?>
          <tr >
           
           <td rowspan="2" colspan="2">备注</td>
           <td rowspan="2" colspan="7"><?php echo ($stuinfo["stuinfo"]); ?></td>
          
              
        </tr>
          <tr >
           
                      
              
        </tr>
    
    </table>
</body>
</html>