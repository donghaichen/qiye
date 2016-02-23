<?php /* Smarty version Smarty-3.1.18, created on 2014-11-28 15:59:59
         compiled from "/home/uu170528/app/views/templates/changan/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56724760754782b7f172996-24304587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9943834b5294d52481950bbd8b34f44069f57a22' => 
    array (
      0 => '/home/uu170528/app/views/templates/changan/footer.tpl',
      1 => 1417160641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56724760754782b7f172996-24304587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54782b7f1bf421_28985349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54782b7f1bf421_28985349')) {function content_54782b7f1bf421_28985349($_smarty_tpl) {?>     <div class="foot">
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
