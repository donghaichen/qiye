$(document).ready(function(){
	$(".reservation-button").click(function(){
		$("#reservation input[type='text']").val("");
		$("#reservation_name").val(this.getAttribute("data-name"))
		$("#reservation").css({display:"block"});
	});
	$("#reservation .close").click(function(){
		$("#reservation").css({display:"none"});
	});
});