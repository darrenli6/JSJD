<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html>
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

select#hebei,select#henan{width:130px; height:220px;}
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
                  
                  <span class="other">添加学生</span>
                 
                 </p> 
                </div>
            </div>
		 
	</div>
 
       	 
	<form id="myform" action="__SELF__" method='post' onsubmit="return submithandle()"  >
		<table  class="tab_table" >
			<tr>
				<td width='40%' align='right'>党费：</td>
				<td>
					<input type="text" name='feevalue' value="0.2"/>元
				</td>
			</tr>
			
			 <tr>
				<td width='40%' align='right'>缴纳时间：</td>
				<td>
			     <input  name="feetime" readonly="readonly" id="feetime" value="" />
                    </td> 
			 
			</tr>
			 
		  <tr>
				<td width='40%' align='right'>是否缴纳：</td>
				<td>
			     <select name="status"  >
			     <option value="1" >已经缴纳</option>
			     <option value="0" >未缴纳</option>
			     </select>
                    </td> 
				
			</tr>
		     
			  <tr>
				<td width='40%' align='right'>备注：</td>
				<td>
				  
				 <textarea name="summary" rows="5" cols="80"></textarea>
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
            
        </select>
        <br /><br />
        <input type="button" value="-->" onclick="toRight()">
        <input type="button" value="==>" onclick="toAllRight()">
        <input type="button" value="<--" onclick="toLeft()">
        <input type="button" value="<==" onclick="toAllLeft()">
            	 
            	</td>
            
            	</tr>

         </table>   	
 
         
            <tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
	</form>
</div>

</div>

 
<script>
  
  var SEARCHSTU="<?php echo U('Subjectrace/ajaxSearchStu');?>";
  
</script>
                       	<!-- 引入时间插件 -->
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<link href="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$( "input[name='feetime']" ).datetimepicker(); ;
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
        
       var html="<input type='hidden' name='sid' value="+all+"  />";
       $('#myform').append(html);
       return true;
   }
</script>