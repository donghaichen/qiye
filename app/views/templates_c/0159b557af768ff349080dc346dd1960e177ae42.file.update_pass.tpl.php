<?php /* Smarty version Smarty-3.1.18, created on 2014-12-04 09:58:28
         compiled from "/home/uu170528/app/views/templates/admin/update_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1148617725547fbfc47a4137-70409468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0159b557af768ff349080dc346dd1960e177ae42' => 
    array (
      0 => '/home/uu170528/app/views/templates/admin/update_pass.tpl',
      1 => 1417160629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148617725547fbfc47a4137-70409468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547fbfc487b983_24249545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547fbfc487b983_24249545')) {function content_547fbfc487b983_24249545($_smarty_tpl) {?><!DOCTYPE html>
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
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/sy.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/reset.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/buttons.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/iealert/style.css" media="all" rel="stylesheet" type="text/css" />
<meta name="keywords" content="后台, 后台管理, meetsh后台管理系统">
<meta name="description" content="meetsh是一家专注网站开发,微信公众平台开发的公司.">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
</head>
<style>
.header {
	text-shadow: 0px 1px 0px #FFF;
	border-bottom: 1px solid #E5E5E5;
	min-width: 1000px;
	box-sizing: border-box;
	text-shadow: 0px 1px 0px #FFF;
}
.header h2 {
	padding-left: 40px;
}
.header a {
	font-size: 18px;
	color: #333;
	text-decoration: none;
}
.header a:hover {
	color: #4183C4;
}
.container {
	width: 980px;
	margin-right: auto;
	margin-left: auto;
}
.auth-form {
	width: 400px;
	margin: 60px auto;
}
.auth-form-header {
	position: relative;
	padding: 10px 20px;
	margin: 0px;
	color: #FFF;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
	background-color: #829AA8;
	border: 1px solid #768995;
	border-radius: 3px 3px 0px 0px;
	box-sizing: border-box;
}
.auth-form-header h1 {
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 16px;
}
.auth-form-body {
	padding: 20px;
	font-size: 14px;
	background-color: #FFF;
	border-right: 1px solid #D8DEE2;
	border-width: 0px 1px 1px;
	border-style: none solid solid;
	border-color: -moz-use-text-color #D8DEE2 #D8DEE2;
	-moz-border-top-colors: none;
	-moz-border-right-colors: none;
	-moz-border-bottom-colors: none;
	-moz-border-left-colors: none;
	border-image: none;
	border-radius: 0px 0px 3px 3px;
	box-sizing: border-box;
}
.auth-form-body .input-block {
	margin-top: 5px;
	margin-bottom: 15px;
}
.footer {
	border-top: 1px solid #E5E5E5;
	position: relative;
	margin-top: 40px;
	padding-top: 40px;
	padding-bottom: 40px;
	font-size: 12px;
	line-height: 1.5;
	color: #777;
	border-top: 1px solid #EEE;
}
.footer ul li {
	display: inline;
	margin-right: 10px;
}
.logo_icon {
	margin-left: 110px;
}  
</style>
<body>
<div id="article">
  <div class="tab_menu">
   <!-- <ul>
      <li class="current"><a href="javascript:void();">基本设置 </a></li>
      <li><a href="javascript:void();">邮箱配置 </a></li>
      <li><a href="javascript:void();">语言设置 </a></li>
      <li><a href="javascript:void();">附件配置 </a></li>
      <li><a href="javascript:void();">系统变量 </a></li>
    </ul>-->
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
	
        <!--<div id="shouyes"> 
       <!--<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/sys.jpg" style="margin-top:-13px;margin-left:-19px;">
           当前密码：<input type="text" name="username" class="one" /><br/>
           新密　码：<input type="password" name="password" /><br/>
           确认密码：<input type="password" name="password" /><br/>
                   <input type="image"  class="dlss"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/dlss.jpg" />
           
         </form>
       </div>-->
        <div class="content">
  <div id="login" class="auth-form">
    <div class="auth-form-header">
      <h1>密码修改</h1>
    </div>
    <div class="auth-form-body">
      <form accept-charset="UTF-8" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/update_pass" method="post">
        新　密码:　 <input type="password" name="p" class="input-block" />
        确认密码: <input type="password" name="p1" class="input-block" />
                <input type="submit" class="button button-rounded button-action" value="修改" style="margin-top: 15px;"/>
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
