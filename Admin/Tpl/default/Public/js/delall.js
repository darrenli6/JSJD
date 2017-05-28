 
function delall(){
	var value='';
	var isdel=confirm('确定要进行批量删除吗?');
	if(isdel){
	$.each($('#tr > .tc'),function(k,v){
		if($(this).find('input[type=checkbox]').prop('checked')){
			value+=$(this).find('input[type=checkbox]').val()+',';
		}
      
	});
	if(value=='' || value==null){
		alert('不能进行批量删除');return;
	} 
   $.ajax({
	   type: 'POST',
	   url: delallurl,
	   data: {ids:value},
	   success: function(msg){
	      if(msg.status==1){
	    		$.each($('#tr > .tc'),function(k,v){
	    			if($(this).find('input[type=checkbox]').prop('checked')){
	    				 $(this).slideUp('slow',function(){
	    					 $(this).remove();
	    				 });
	    			}
	    	      
	    		});
	    	  
	      }else{
	    	  alert(msg.msg);
	      }
	       
	   },
	   dataType: 'json'
	 });
   
	}
}