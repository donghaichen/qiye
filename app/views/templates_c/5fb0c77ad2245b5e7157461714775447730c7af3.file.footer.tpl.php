<?php /* Smarty version Smarty-3.1.18, created on 2014-10-17 14:00:40
         compiled from "D:\WWW\changan\app\views\templates\changan\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149425440b088425618-26304999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fb0c77ad2245b5e7157461714775447730c7af3' => 
    array (
      0 => 'D:\\WWW\\changan\\app\\views\\templates\\changan\\footer.tpl',
      1 => 1411360316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149425440b088425618-26304999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440b0884402f5_47713190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440b0884402f5_47713190')) {function content_5440b0884402f5_47713190($_smarty_tpl) {?>     <div class="foot">
       <div class="footnav"> <a href="#">公司简介</a> <a href="#">联系我们</a> <a href="#">网站声明</a> <a href="#">隐私保密</a> <a href="#">工商信息</a> <a href="#">洽谈合作</a> <a href="#">诚聘英才</a> <a href="#" style="border:0px;">网站地图</a>
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
<?php }} ?>
