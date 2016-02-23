<?php /* Smarty version Smarty-3.1.18, created on 2014-12-27 17:01:55
         compiled from "/home/uu169418/app/views/templates/admin/site_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1183469647545194faeea2b6-14376792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3cd32a85a52a955804eb9689d58147a6c27e3e' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/site_set.tpl',
      1 => 1418094154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1183469647545194faeea2b6-14376792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545194fb017c11_26199232',
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
    'site_set' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545194fb017c11_26199232')) {function content_545194fb017c11_26199232($_smarty_tpl) {?><!DOCTYPE html>
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
<style>
.tab_content_wrap {
	padding: 25px;
}
.tab_menu ul li {
	cursor: pointer;
}
#main_setting td {
	padding: 10px;
}
</style>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-1.7.2.min.js?ver=2.1"></script>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a onClick="setTab(this,0);">基本设置 </a></li>
      <li><a  onClick="setTab(this,1);">系统变量 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <h2>基本设置</h2>
      <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/configs" method="post">
      <table id="main_setting">
      <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_set']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <tr>
          <td>新浪微博链接:</td>
          <td><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sinaweibo'];?>
" name="sina" style="width:300px"/></td>
        </tr>
        <tr><td></td><td ><input type="submit" value="提交" /></td></tr>
        <?php } ?>
      </table>
      </form>
    </div>
    <div class="tab_content" style="display:none">
      <h2>系统变量</h2>
    </div>
  </div>
</div>
</body>
<script>
 function setTab(p,i){
	 $('.tab_content').css('display','none');
	 $('.tab_content').eq(i).css('display','');
	 $('.tab_menu ul li').removeClass('current');
	 $(p).parent('li').addClass('current');
 }
</script>
</html><?php }} ?>
