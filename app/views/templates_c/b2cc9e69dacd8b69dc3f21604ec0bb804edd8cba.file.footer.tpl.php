<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 15:51:01
         compiled from "/home/uu169418/app/views/templates/changan/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15427370055440cbb3072e74-23163502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2cc9e69dacd8b69dc3f21604ec0bb804edd8cba' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/footer.tpl',
      1 => 1418094156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15427370055440cbb3072e74-23163502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cbb307d848_85837533',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cbb307d848_85837533')) {function content_5440cbb307d848_85837533($_smarty_tpl) {?>     <div class="foot">
       <div class="footnav"> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj">公司简介</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/contact">联系我们</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj">网站声明</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj">隐私保密</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj">公司信息</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj">洽谈合作</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/jobs">诚聘英才</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about/gsjj" style="border:0px;">网站地图</a>
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
