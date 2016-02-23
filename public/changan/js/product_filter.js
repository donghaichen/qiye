$(document).ready(function(){
	//init
	$(".xxknr li a").each(function(){
		var me=$(this),key=me.attr("data-key"),value=new Function("return "+me.attr("data-value"))(),filter=filter_data[key]||{};
		for(var p in filter){
			if(!(p in value) || value[p]!=filter[p])
				return;
		}
		for(var p in value){
			if(!(p in filter) || value[p]!=filter[p])
				return;
		}
		$(this).addClass("active");
	});
	//bind event
	$(".xxknr li a").click(function(){
		$("a.active",this.parentNode.parentNode).removeClass("active");
		$(this).addClass("active");
		//generate the values
		var filters=[];
		$(".xxknr li a.active").each(function(){
			var me=$(this);
			if(me.attr("data-value")!="{}")
				filters.push('"'+me.attr("data-key")+'":'+me.attr("data-value"));
		});
		var urls=document.location.href.split("/");
		urls.length--;
		document.location.href=urls.join("/")+"/"+"{"+filters.join(",")+"}";
	});
});