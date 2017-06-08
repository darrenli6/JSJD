/**
 * 
 */
$(function(){
	 var windowWidth = $(window).width();
	    // 判断屏幕属于大还是小
	    var isSmallScreen = windowWidth < 768;
	    if(isSmallScreen){
	    	window.location.href="/JSJD/mobile.php"
	    } 
});
