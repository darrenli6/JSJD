<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/css/jquery-validate.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    <script type="text/javascript">
    var SHOWIMAGE="/JSJD/Public/Upload/";
    </script>
</head>
<body>
    
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<div style='width:600px;text-align:center;margin : 20px auto;'>
		<form name="findform"  >
			检索方式：
			<select name="type">
				<option value="0">学生姓名</option>
				<option value="1">学号</option>
			</select>
			<input type="text" name='sech'/>
			<input type="button"  value='搜索' class='see'/>
		    <input type="button"  value='打印' class="print" />
		</form>
	</div>
	<table class="table" id="table">
		<?php if(isset($stu) && !$stu): ?><tr>
				<td align='center'>没有检索到相关学生信息</td>
			</tr>
		<?php else: ?>
		  <div class="result_wrap">
          <div class="result_content">
			<tr class="list_tab">
				<th width='50'>ID</th>
				<th width='50'>学号</th>
				<th width='100'>姓名</th>
				<th width='200'>免冠图片</th>
				<th>班级</th>
				<th width='300'>操作</th>
			</tr>
				<?php if(is_array($stu)): foreach($stu as $key=>$v): ?><tr>
			    <td width='50' align='center'><?php echo ($v["id"]); ?></td> 
				<td width='50' align='center'><?php echo ($v["stuid"]); ?></td>
				<td width='100'><?php echo ($v["stuname"]); ?></td>
				<td width="200">
				      <?php if($v["face"]): ?><img src="<?php echo ($imagepath); echo ($v[face]); ?>" width="120px" height="120px" />
				      <?php else: ?>
				         <img src="__PUBLIC__/images/people.png" width="120px" height="120px" /><?php endif; ?>
				</td>
				<td  align='center'>
					<?php echo ($v["name"]); ?>
				</td>
				<td width='300' align='center'>
				<a href="<?php echo U('show', array('id' => $v['id']));?>" class='see'></a>
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'></a>
				<a href="<?php echo U('del', array('id' => $v['id'],'stuid'=>$v['stuid']));?>" class='del'></a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		        </div>
		  </div><?php endif; ?>
	</table>
</body>

</body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>  	
<script type="text/javascript">
    var printStu="<?php echo U('printStu');?>";
    var showStu="<?php echo U('sechStu');?>";
    var imagepath="<?php echo ($imagepath); ?>";
    var publicpath="__PUBLIC__";
    var seeurl="<?php echo U('showStu');?>";
    var editurl="<?php echo U('edit');?>";
   $('input[class=print]').click(function(e){
	     var type=$('select[name=type]').val();
	     var val=$('input[name=sech]').val();
	     if(type=='' || val=='')
	     {
	    	 alert('请您填写信息');
	    	 return false;
	     }
	     window.location.href=printStu+"?type="+type+"&val="+val;
   });
   
   $('input[class=see]').click(function(e){
	     var type=$('select[name=type]').val();
	     var val=$('input[name=sech]').val();
	     $.ajax({
	    	 url:showStu,
	    	 data:{type:type,sech:val},
	    	 type:'GET',
	    	 datatype:'json',
	    	 success:function(msg){
	    		 
	    		var msg=eval("("+msg+")");
	    		 
	            var html="";
	    		if(msg!=null){
	      html+="<tr><th>ID</th><th>学号</th><th>姓名</th><th>免冠图片</th>";
 	      html+="<th>班级</th><th>操作</th></tr>";
				$.each(msg,function(k,v){
		  
		   
		  html+="<tr> <td width='50' align='center'>"+v.id+"</td> ";
		  html+="<td width='50' align='center'>"+v.stuid+"</td>";
		  html+="<td width='100'>"+v.stuname+"</td>";
		  if(v.face!=null){
		  html+="<td width='200'> <img src="+imagepath+v.face+" width='120px' height='120px' /></td>";
		  }
		  else{
		 
		  html+="<td width='200'><img src='"+publicpath+"/images/people.png' width='120px' height='120px' /></td>";
		  }
		  html+="<td  align='center'>"+v.name+"</td>";
		  html+="<td width='300' align='center'>";
		  html+="<a href='"+seeurl+'/id/'+v.id+"' class='see'>展示</a>&nbsp;&nbsp;";
		  html+="<a href='"+editurl+'/id/'+v.id+"' class='edit'>编辑</a>&nbsp;&nbsp;";
		   
		  html+= "</td></tr>";
				});
	      
	    		}else{
				   html+="<tr><td align='center'>没有检索到相关用户</td></tr>"
				}	
	     $('#table').html(html);	
	    		
	    	 },
	     });
   });
</script>
</html>