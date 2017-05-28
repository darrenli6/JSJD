$(function () {

 
	//resource area of student
	var province = '';
	$.each(city, function (i, k) {
		province += '<option value="' + k.name + '" index="' + i + '">' + k.name + '</option>';
	});
	 
	$('select[name=province]').append(province).change(function () {
		var option = '';
		if ($(this).val() == '') {
			option += '<option value="">请选择</option>';
		} else {
			var index = $(':selected', this).attr('index');
			var data = city[index].child;
			for (var i = 0; i < data.length; i++) {
				option += '<option value="' + data[i] + '">' + data[i] + '</option>';
			}
		}
		
		$('select[name=city]').html(option);
	
	});
	 
	$('select[name=province]').val(resourceArr[0]);	
	$.each(city, function (i, k) {
		if (k.name == resourceArr[0]) {
			var str = '';
			for (var j in k.child) {
				str += '<option value="' + k.child[j] + '" ';
				if (k.child[j] == resourceArr[1]) {
					str += 'selected="selected"';
				}
				str += '>' + k.child[j] + '</option>';
			}
			$('select[name=city]').html(str);
		}
	 
	});

	$('input[name=country]').val(resourceArr[2]);
 
	 
	//regist area
	 
	var provinces = '';
	$.each(city, function (i, k) {
		provinces += '<option value="' + k.name + '" index="' + i + '">' + k.name + '</option>';
	});
	 
	$('select[name=provinces]').append(provinces).change(function () {
		var option = '';
		if ($(this).val() == '') {
			option += '<option value="">请选择</option>';
		} else {
			var index = $(':selected', this).attr('index');
			var data = city[index].child;
			for (var i = 0; i < data.length; i++) {
				option += '<option value="' + data[i] + '">' + data[i] + '</option>';
			}
		}
		
		$('select[name=citys]').html(option);
	
	});
	 
	$('select[name=provinces]').val(registArr[0]);	
	$.each(city, function (i, k) {
		if (k.name == registArr[0]) {
			var str = '';
			for (var j in k.child) {
				str += '<option value="' + k.child[j] + '" ';
				if (k.child[j] == registArr[1]) {
					str += 'selected="selected"';
				}
				str += '>' + k.child[j] + '</option>';
			}
			$('select[name=citys]').html(str);
		}
	 
	});

	$('input[name=countrys]').val(registArr[2]);
 
	
	//jQuery Validate form verify
 
	$.validator.addMethod("stuid", function(value, element) {   
	    var tel = /^[0-9]{8}$/;
	    return this.optional(element) || (tel.test(value));
	}, "必须为8位数字");
 
	
	
	 $('form[name=addstu]').validate({
		 errorElement : 'span',
		 success : function (label){
		      label.addClass('success');	 
		 },
		 rules:{
			 stuid:{
				 required :true,
				 stuid:true,
				 remote:{
					 url :checkStu ,
					 type:'post',
					 dataType: 'json',
					 data:{
						 stuid: function(){
							 return $('input[name=stuid]').val();
						 }
					 }
				 }
			 },
			 stuname:{
				 required: true,
			 }
		 },
		 messages:{
			 stuid:{
				 required:'学号不能为空',
				 stuid:'学号必须为八位数字',
				 remote:'学号已经存在',
			 },
			 stuname:{
				required:'姓名不能为空',  
			 },
		 },
	 });
	
});