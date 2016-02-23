function validate(selector){
	$(selector).each(function(){
		var reg=new RegExp(this.getAttribute("data-regex"));
		if(this.value.match(reg)){
			$(this).css("background","white");
		}else{
			$(this).css("background","rgb(255, 192, 203)");
			valid=false;
		}
	});
}