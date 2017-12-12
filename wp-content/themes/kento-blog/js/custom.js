jQuery(document).ready(function(){
	
  jQuery("a[href='#back-top']").click(function() {
	 jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	 return false;
  });
});