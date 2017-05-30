<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    <script type="text/javascript">
    var SHOWIMAGE="/JSJD/Public/Upload/";
    </script>
</head>
<body>
    
 

    <!--搜索结果页面 列表 开始-->
 
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="<?php echo U('add');?>"><i class="fa fa-plus"></i>新增</a>
                    <a href="#" onclick="delall()"><i class="fa fa-recycle"></i>批量删除</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                    <th class="tc" width="5%"><input type="checkbox" id="all" name=""></th>
                    <th>ID</th>
					<th>学号</th>
					<th>姓名</th>
					<th>免冠图片</th>
					<th>班级</th>
					<th colspan="2">状态</th>
					<th>操作</th>
                    </tr>
               
			

				<?php if(is_array($CData)): foreach($CData as $key=>$v): ?><tr id="tr">
			   <td class="tc">
			   <input type="checkbox" name="id"  id="id<?php echo ($v["id"]); ?>" onclick="addchecked(<?php echo ($v["id"]); ?>)"  value="<?php echo ($v["id"]); ?>"></td>
			    <td width='50' align='center'><?php echo ($v["id"]); ?></td> 
				<td width='50' align='center'><?php echo ($v["stuid"]); ?></td>
				<td width='100'><?php echo ($v["stuname"]); ?></td>
				<td width="200">
				      <?php if($v["face"]): ?><img src="<?php echo ($imagepath); echo ($v[face]); ?>" width="120px" height="120px" />
				      <?php else: ?>
				         <img src="__PUBLIC__/Images/people.png" width="120px" height="120px" /><?php endif; ?>
				</td>
				<td  align='center'>
					<?php echo ($v["name"]); ?>
				</td>
				<td  align='center'>
					<?php echo $v['locked']==0?'锁定':'开放'; ?>
				</td>
				<td  align='center'>
				   <?php if($v['locked']==0){ ?>
					<a href="<?php echo U('changeLocked', array('id' => $v['id'],'status'=>1));?>" class='quality'>开放</a>
				  <?php  }else{ ?>
				    <a href="<?php echo U('changeLocked', array('id' => $v['id'],'status'=>0));?>" class='quality'>锁定</a>
				  <?php } ?>
				</td>
				<td width='300' align='center'>
				<a href="<?php echo U('showQuality', array('id' => $v['id']));?>" class='quality'>素质拓展</a>
				<a href="<?php echo U('showStu', array('id' => $v['id']));?>" class='see'>展示</a>
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('del', array('id' => $v['id'],'stuid'=>$v['stuid']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
       <tr height='50'>
		  <td align='center' colspan='3'> 
		  <a href="<?php echo C('DOWNCOMMONFILE');?>stuinfo.xls">
		  <input type="button" class="download" value="下载模板" /></td>
		  </a>
		  <td align='center' colspan='4'>
		  
		  <form  method="post" action="<?php echo U('uploadDataByxls');?>" enctype="multipart/form-data">
		   <input type="file" id="excel" name="import" />
           <input type="submit" class="download" value="上传数据" />                      
          </form>
          
          </td>
		   
		</tr>
                    
                </table>
  
                <div class="page_list">
                   <?php echo ($page); ?>
                </div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->


 
    <script type="text/javascript">
      var delallurl="<?php echo U('delall');?>";
    </script>
    <script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>
  </body>
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>