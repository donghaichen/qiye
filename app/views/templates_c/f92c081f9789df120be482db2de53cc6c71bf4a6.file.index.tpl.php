<?php /* Smarty version Smarty-3.1.18, created on 2014-11-28 16:04:25
         compiled from "/home/uu170528/app/views/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69702730754782c899adc63-92412638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92c081f9789df120be482db2de53cc6c71bf4a6' => 
    array (
      0 => '/home/uu170528/app/views/templates/admin/index.tpl',
      1 => 1417160627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69702730754782c899adc63-92412638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
    'admin_username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54782c89a1a933_77275177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54782c89a1a933_77275177')) {function content_54782c89a1a933_77275177($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/admin.css" type="text/css" media="all">
<meta name="keywords" content="后台, 后台管理, meetsh后台管理系统">
<meta name="description" content="meetsh是一家专注网站开发,微信公众平台开发的公司.">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<!--[if lt IE 9]><script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/html5.js"></script><![endif]-->

</head>
<body>
<header class="header">
  <div class="navbar">
    <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin" title="大前端---关注前端开发和wordpress主题的博客">Luser</a></h1>
    <ul class="nav">
      <li id="" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin">后台首页</a></li>
      <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children "><a href="javascript:LSAC('admin/side_content','admin/category');">内容管理</a> </li>

      <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="javascript:void();">模块管理</a></li>
<li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/yewu">业务管理</a></li>
    </ul>
    <div class="screen-mini">
      <button data-type="screen-nav" class="btn btn-inverse screen-nav"><i class="icon-tasks icon-white"></i></button>
    </div>
    <div class="menu pull-right"> </div>
  </div>
  <div class="speedbar">
    <div class="pull-right"> 欢迎您 <?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
 <i class="icon-user icon12"></i> <a href="javascript:LSAC(1,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/content');">修改密码</a> <i class="icon-user icon12"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/logout">退出</a> </div>
    <div class="toptip"><strong class="text-success"></strong><a rel="external nofollow" href=""></a>  <a rel="external nofollow" href=""></a>  <a rel="external nofollow" href=""></a> <a rel="external nofollow" href=""></a><a rel="external nofollow" href=""></a><strong class="text-info"></strong></div>
  </div>
</header>
<div id="Scroll"><div id="leftMain"></div></div>
<iframe name="right" id="rightMain" frameborder="false" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/home" scrolling="auto" style="border:none; margin-bottom:30px" width="100%" allowtransparency="true"></iframe>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-1.7.2.min.js?ver=2.1"></script> 
<script type="text/javascript">

window.onload = function (){
	$("#leftMain").load("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/side");
	$('#rightMain').height(800);
}
/*
$(document).ready(function() {
    $('.submenu li').click(function(){
		$('.submenu li').removeClass('selected');
		$(this).addClass('selected');
		});
});*/

function LSAC(menuUrl,targetUrl) { /* load sidemenu and  content */
	$("#leftMain").load("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" + menuUrl);
	$('.nav li').removeClass('current-menu-item');	
	$("#rightMain").attr('src', "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"+ targetUrl);

	//$('#rightMain').height(800);
	
}

function CC(obj,targetUrl) { /* change content */

	$('.submenu li').removeClass('selected');
	$(obj).parent('li').addClass('selected');

	
	$('.nav li').removeClass('current-menu-item');	
	$("#rightMain").attr('src', targetUrl);
	 
	//$("#middle_main").contents().find("#main").height()
	//$('#rightMain').height(1200);
	//alert($('#rightMain').contents().find('#article').height());

}


</script>
</body>
</html>
<?php }} ?>
