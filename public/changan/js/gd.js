   $(document).ready(function(){   
       var leftsize = -494;   
       $("#btn_l").click(function(){
			if(leftsize > -247){
			   leftsize = leftsize - 247;
               $(".cc").animate({"left":leftsize});
			   }
			else if(leftsize = -247) {
			   leftsize = leftsize - 247;
               $(".cc").animate({"left":leftsize});
			}
			else {$(".cc").css('left','0px');}
        });   
  
       $("#btn_r").click(function(){   
			if(leftsize < -247){
			   leftsize = leftsize + 247;
               $(".cc").animate({"left":leftsize});
			   }
			else if(leftsize = -247) {
			   leftsize = leftsize + 247;
               $(".cc").animate({"left":leftsize});
			}
			else{$(".cc").css('left','-494px');}
       });   
    });  