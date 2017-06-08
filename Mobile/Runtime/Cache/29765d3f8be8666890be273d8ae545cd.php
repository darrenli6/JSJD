<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>个人中心</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- loading mui -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.min.css">
	<!-- custorm style -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/style.css">
		 
	<!-- loading mui.picker.min -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.picker.min.css">
	<!-- loading mui.popicker -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.poppicker.css">
	<!-- custorm style -->
</head>
<body>
	<!-- 导航栏 -->
	<header id="header" class="mui-bar mui-bar-nav">
		<h1 class="mui-title"></h1>
		<a class="mui-action-back mui-btn mui-btn-blue mui-btn-link mui-btn-nav mui-pull-left" href="javascript:history.go(-1)"><span class="mui-icon mui-icon-left-nav"></span></a>
		<a class="mui-icon mui-icon-bars mui-pull-right" href="#topPopover"></a>
	</header>
	<!-- 右上角弹出菜单 -->
	<div id="topPopover" class="mui-popover">
			<div class="mui-popover-arrow"></div>
			<div class="mui-scroll-wrapper">
				<div class="mui-scroll">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell">
							<a href="<?php echo U('Index/index'); ?>">首页</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo U('Usercenter/qualityinfo'); ?>">素质拓展表</a>
						</li>
					     <li class="mui-table-view-cell"><a href="<?php echo U('Usercenter/index'); ?>">个人中心</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 
	<!-- 主内容部分 -->
	<div class="content">
		<section class="xueqi">
			<div class="class">
				<label id="classResult">请选择学期</label>
				<button id="showCityPicker" class="select" type="button">选择</button>
			</div>
		</section>
		<section class="query">
			<table id="timeTable">
				<tr>
					<th>名称</th>
					<th>满分</th>
					<th>得分️</th>
					<th>时间</th>
					 
				</tr>
			   <?php foreach($data as $k=>$v): ?>
				<tr>
					 
					<td class="timetable-course"><?php echo $v['qualityname'] ?></td>
					<td class="timetable-course"><?php echo $v['fullstore'] ?></td>
					<td class="timetable-course"><?php echo $v['store'] ?></td>
					<td class="timetable-course"><?php echo $v['addtime'] ?></td> 
				</tr>
				 <?php endforeach; ?>
			</table>
		</section>
	</div>
	
	<div class="cover_table">
		<div class="exit">
			<img src="__PUBLIC__/center/img/exit.png" height="50" width="50">
		</div>
		<table>
			<tr>
				<th>内容</th>
				
			</tr>
			<tr>
				<td id="bigcontent"></td>
				
			</tr>
		</table>
	</div>

	<!-- loading jquery -->
	<script type="text/javascript" src="__PUBLIC__/center/js/jquery-1.12.1.min.js"></script>
	<!-- loading mui -->
	<script type="text/javascript" src="__PUBLIC__/center/js/mui.min.js"></script>
	<!-- loading picker -->
	<script type="text/javascript" src="__PUBLIC__/center/js/mui.picker.min.js"></script>
	<!-- loading popicker -->
	<script type="text/javascript" src="__PUBLIC__/center/js/mui.poppicker.js"></script>
	<!-- loading class-data -->
	<script type="text/javascript" src="__PUBLIC__/center/js/quatime-data.js"></script>
	<script type="text/javascript">
		(function($, doc) {
			$.init();
			$.ready(function() {
				var cityPicker = new $.PopPicker({
					layer: 3
				});
				cityPicker.setData(classData);
				var showCityPickerButton = doc.getElementById('showCityPicker');
				var cityResult = doc.getElementById('classResult');
				showCityPickerButton.addEventListener('tap', function(event) {
					
					cityPicker.show(function(items) {
				    console.log(items);
					cityResult.innerText = items[0].text + " " + items[1].text + " ";
						//返回 false 可以阻止选择框的关闭
						//return false;
					});
				}, false);
			});
		})(mui, document);
		window.onload = function(){
			// 便利获取表格中所有的值
			$('.timetable-course').each(function() {
				if ($(this).text() != '') {
					$(this).css({"background-color":"#5cb85c", "color":"#ffffff"});
					$(this).on('click', function(event){
						
						$('.cover_table').show();
						$('#bigcontent').text($(this).text());
					});
				}
			});
			$('.exit').on('click', function(event) {
				$('.cover_table').hide();
			});
		}
	</script>
</body>
</html>