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
    
 <style type="text/css">
  input.big-btn{
	margin-left:50%;
  }
  span.other{
	font-size:19px;
  	color:#666;
  }
select{width:130px; height:220px;}
</style>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
	<div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
             <?php echo ($title); ?>
                <div class="short_wrap">
                  <p>
                  <span class="current">基本信息</span>
                  <span class="other">比赛内容</span>
                  <span class="other">添加学生</span>
                  <span class="other">添加活动照片</span>
                 </p> 
                </div>
            </div>
	</div>
	<form id="myform" action="__SELF__" method='post' onsubmit="return submithandle()" >
		<table class="tab_table">
			<input type="hidden" name="id" value="<?php echo ($SData["id"]); ?>" />
			<tr>
				<td width='40%' align='right'>名称：</td>
				<td>
					<input type="text" name='racename' value="<?php echo ($SData["racename"]); ?>"/>
				</td>
			</tr>
		
			 
			 
		   <tr>
				<td width='40%' align='right'>竞赛缩略图：</td>
				<td>
					 <input  type="file"   id="uploadlogo" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                       <img width='120' height='120' src="<?php echo ($path); echo ($SData["smallimg"]); ?>" />;
                       <input type="hidden" name="smallimg" value="<?php echo ($SData["smallimg"]); ?>" />
	                 </div>
	 			</td>
			</tr>
		     
			 
		   <tr>
				<td width='40%' align='right'>部门组织：</td>
				<td>
				<?php $exit=explode(',',$SData['deds']); ?> 
				<?php if(is_array($DData)): foreach($DData as $key=>$v): if(in_Array($v['id'],$exit)) { ?> 
					  <input type="checkbox" name="deds[]" checked="checked" value="<?php echo ($v["id"]); ?>" ><?php echo ($v["departname"]); ?>
	 			     <?php }else {?>
	 			     <input type="checkbox" name="deds[]" value="{$v.id}" ><?php echo ($v["departname"]); ?>
	 			     <?php  } endforeach; endif; ?>
	 			</td>
			</tr>
		       <tr>
				<td width='40%' align='right'>简介：</td>
				<td>
				  
				 <textarea name="summary" rows="10" cols="40"><?php echo ($SData["summary"]); ?></textarea>
	 			</td>
			</tr>
			
		 
				 <tr>
				<td width='40%' align='right'>开始时间：</td>
				<td>
			     <input  name="racetime" readonly="readonly" id="racetime" value="<?php echo ($SData["racetime"]); ?>" />
                    </td> 
				</td>
			</tr>
			
			   <tr>
				<td width='40%' align='right'>结束时间：</td>
				<td>
			      <input name="endtime" readonly="readonly"  id="endtime" value="<?php echo ($SData["endtime"]); ?>" />
                    </td> 
				</td>
			</tr>
			
			
		</table>
			<table style="display:none;" width="100%" class="tab_table" align="center">
           
				<tr>
				<td width='40%' align='right'>竞赛信息：</td>
				<td>
			 
			 
			    <textarea id="context" cols="40" rows="6"  name="racecontent">
			     <?php echo ($SData["racecontent"]); ?>
			    </textarea>
                    </td> 
				 
			</tr>
            	 
            </table>
            <table style="display:none;" width="100%" class="tab_table" align="center">
              	<tr>
             <td>
             <input type="text" name="searchStu" placeholder="请输入学号进行查询" value="" />
            
             <input type="button"  id="searchStu" value="搜索" />
             </td>
            	</tr>
            	<tr>
            	<td >
          <select id="hebei" multiple="multiple">
          
        </select>
        <select id="henan"   multiple="multiple">
            <?php foreach($rsData as $k=>$v): ?>
             <option value="<?php echo $v['sid']; ?>"><?php echo $v['stuid']; ?></option>
            <?php endforeach; ?>
        </select>
        <br /><br />
        <input type="button" value="-->" onclick="toRight()">
        <input type="button" value="==>" onclick="toAllRight()">
        <input type="button" value="<--" onclick="toLeft()">
        <input type="button" value="<==" onclick="toAllLeft()">
            	 
            	</td>
            	</tr>
            	
            	 
            </table>
                 <table style="display:none;" width="100%" class="tab_table" align="center">
                     <?php if(!empty($imgData)): ?>
                     <tr>
                     <?php foreach($imgData as $k=>$v): ?>
                     <td > 
                     <div id="imgdiv<?php echo $v['id']; ?>" >
                      <img width='120' height='120' src="<?php echo $path.'Subjectrace/'.$v['img']; ?>" />
                      <span onclick="delimg(<?php echo $v['id']; ?>)">删除</span>
                     </div>
                     </td>
                      <?php endforeach; ?>
                     </tr>
                     <?php  endif; ?>
                     <tr cols="4">
                      	<!-- 引入时间插件 -->
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<link href="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$( "input[name='racetime'],input[name='endtime']" ).datetimepicker(); ;
</script>
<script type="text/javascript" src="__PUBLIC__/Js/uploadraceimage.js"></script> 
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<style type="text/css">
.uploadifive-button {
	float: left;
	margin-right: 10px;
}
#queue {
     
	border: 1px solid #E5E5E5;
	height: 177px;
	overflow: auto;
	width: 300px;
}
</style>
<body >
<div id="addpic" style="display:none;">

  <form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<a style="" href="javascript:$('#file_upload').uploadifive('upload')">确定上传</a>
	    
	   </form>
</div>
<script src="__ROOT__/Public/MulImageUp/jquery.min.js" type="text/javascript"></script>
<script src="__ROOT__/Public/MulImageUp/jquery.uploadifive.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/MulImageUp/uploadifive.css">  	 
          
   <script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : "<?php echo U('Subjectrace/checkexists'); ?>",
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : "<?php echo U('Subjectrace/uploadifive'); ?>",
				'onUploadComplete' : function(file, data) { 
					var data=eval("("+data+")");
					//console.log(file.queueItem[0]);
					if(data.status==1){
					  	
					var html="<input type='hidden' name='photos[]' value="+data.filename+"   />";
					$(file.queueItem[0]).append(html);
					}else if(data.status==0){
						alert(data.msg);
					}
					 
				}
			});
		   
		});
	</script>
     



</body>
</html>
 </tr>
           </table>
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
	</form>
<script>
  var IMAGEURL="<?php echo U('Subjectrace/handlerimage');?>";
  var EditName='context';
  var SEARCHSTU="<?php echo U('Subjectrace/ajaxSearchStu');?>";
   
</script>
 
 
<!--导入在线编辑器 -->

<!--导入在线编辑器 -->
	<!-- 配置文件 -->
    <script type="text/javascript" src="__ROOT__/Public/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__ROOT__/Public/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor(EditName);
    </script>	
<script>
    //search for student for studentNum
    $('#searchStu').click(function(){
    	   var nums=$('input[name="searchStu"]').val();
    	 //  alert(nums);
    	   $.ajax({
    		   'type':'post',
    		   'url':SEARCHSTU,
    		   'datetype':'json',
    		   'data':{num:nums},
    		   success:function(msg){
    			   var msg=$.parseJSON(msg);
    			   var html='';
    			   if(msg.status==1){
    				  $.each(msg.data,function(k,v){
    					  html+='<option value='+v.id+'>'+v.stuid+'</option>';
    				  });
    				   $(html).appendTo($('#hebei'));
    				   clickoptiontoright();
    			   }else{
    				   alert('没有查找到');
    			   }
    		   }
    	   });
    	
    });
   
   $('.short_wrap p span').click(function(){
  	 var i=$(this).index();
  	 
  	 //先隐藏所有的table
  	 $(".tab_table").hide();
  	 //显示第一个table
  	 $(".tab_table").eq(i).show();
  	 if(i==3){
  		 $('#addpic').show();
  	 }else{
  		 $('#addpic').hide();
  	 }
  	 //先取消原来按钮的选中状态
  	 $(".current").removeClass("current").addClass("other");
  	 //设置当前按钮选中
  	 $(this).removeClass("other").addClass("current");
   });
  function clickoptiontoright(){
	  $('option').dblclick(function(){
          //this分别依次代表每个option的dom对象
          //判断当前option的父节点类型,(hebei的节点移到henan，反之亦然)再做移动操作
          if(this.parentNode.id=='hebei'){
              $(this).appendTo($('#henan'));
          }else{
              $(this).appendTo($('#hebei'));
          }
      });
  }
   
 //页面加载完毕，给每个option设置双击事件
   $(function(){
      clickoptiontoright();
   });

   function toRight(){
       //左侧"选中"的项目移动到右侧
       $("#hebei option:selected").appendTo($('#henan'));
   }
   function toLeft(){
       //右侧"选中"的项目移动到左侧
       $("#henan option:selected").appendTo($('#hebei'));
   }
   function toAllRight(){
       //左侧全部项目移动到右侧
       $("#hebei option").appendTo($('#henan'));
   }
   function toAllLeft(){
       //右侧全部的项目移动到左侧
       $("#henan option").appendTo($('#hebei'));
   }
   function submithandle(){
	   
	   var all = "";
       $("select#henan option").each(function() {
           all += $(this).attr("value")+"-";
       });
        
       var html="<input type='hidden' name='stus' value="+all+"  />";
       $('#myform').append(html);
       return true;
   }
   //js delete img
   function delimg(id){
	   var DELIMGURL="<?php echo U('Subjectrace/ajaxDelImg') ?>";
	   var imgid=id;
	   var r=window.confirm('确定删除吗?');
	   if(r==true)
	{
		   $.post(
				DELIMGURL,
				{imgid:imgid},
				function(msg){
					 
					if(msg.status==1)
					{
					  
					  $('div#imgdiv'+imgid).slideDown(1000).remove();
				    }else if(msg.status==0){
				    	  alert('删除失败');
				    }
				},'json',
				  
		   );
		   
		   
    } 
   }
</script>