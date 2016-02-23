
$(document).ready(function(){
	$('.fcd').hover(function(){
		   $(this).find('#xlzcd').show()
	}, function() {
            $('.fcd').find("#xlzcd").hide();
        });
})