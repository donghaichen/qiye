     <div class="foot">
       <div class="footnav"> <a href="{$base_url}about/gsjj">公司简介</a> <a href="{$base_url}about/contact">联系我们</a> <a href="{$base_url}about/gsjj">网站声明</a> <a href="{$base_url}about/gsjj">隐私保密</a> <a href="{$base_url}about/gsjj">公司信息</a> <a href="{$base_url}about/gsjj">洽谈合作</a> <a href="{$base_url}public/jobs">诚聘英才</a> <a href="{$base_url}about/gsjj" style="border:0px;">网站地图</a>
         <div class="clear"></div>
       </div>
       <p>长安资产版权所有 | 沪ICP备08018085号</p>
     </div>
     
     
       <script type="text/javascript">  

   $(document).ready(function(){   

       var leftsize = -600;   

       $("#btn_l").click(function(){

			if(leftsize > -298){

			   leftsize = leftsize - 298;

               $(".cc").animate({ "left":leftsize });

			   }

			else if(leftsize = -298) {

			   leftsize = leftsize - 298;

               $(".cc").animate({ "left":leftsize });

			}

			else { $(".cc").css('left','0px'); }

        });   

  

       $("#btn_r").click(function(){   

			if(leftsize < -298){

			   leftsize = leftsize + 298;

               $(".cc").animate({ "left":leftsize });

			   }

			else if(leftsize = -298) {

			   leftsize = leftsize + 298;

               $(".cc").animate({ "left":leftsize });

			}

			else{ $(".cc").css('left','-494px'); }

       });   

    });   

   </script>
