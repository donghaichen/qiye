<?php /* Smarty version Smarty-3.1.18, created on 2014-12-27 17:03:32
         compiled from "/home/uu169418/app/views/templates/admin/sql_reback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110844982754519517d382e8-99466410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a565202fe526823b7644336158064d794b340cd2' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/sql_reback.tpl',
      1 => 1418094154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110844982754519517d382e8-99466410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54519517da27a6_19564188',
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54519517da27a6_19564188')) {function content_54519517da27a6_19564188($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a href="javascript:void();">基本设置 </a></li>
      <li><a href="javascript:void();">邮箱配置 </a></li>
      <li><a href="javascript:void();">语言设置 </a></li>
      <li><a href="javascript:void();">附件配置 </a></li>
      <li><a href="javascript:void();">系统变量 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
	<h2>数据库还原</h2>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
