<?php /* Smarty version Smarty-3.1.18, created on 2014-12-04 10:25:00
         compiled from "/home/uu170528/app/views/templates/changan/wjmm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855241828547ea20518fe69-13723252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526fca7d0b954eec44be3d368d982f47a5a6b9c4' => 
    array (
      0 => '/home/uu170528/app/views/templates/changan/wjmm.tpl',
      1 => 1417659898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855241828547ea20518fe69-13723252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547ea2051c57c0_71941074',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ea2051c57c0_71941074')) {function content_547ea2051c57c0_71941074($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>长安资产</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/iehack.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.4.2.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/dh.js"></script>

<!--[if IE 6]>

<script type="text/javascript" src="js/png.js" ></script>

<script type="text/javascript">

DD_belatedPNG.fix('*');

</script>

<![endif]-->

</head>
<style>
   .ylogin .formes{
     margin-top:120px;
   } 
</style>
<body>
<div class="cont"> <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="login">
    <div class="zlogin"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/zlt.jpg" alt="" /></div>
    <div class="ylogin">
      
      <div class="clear"></div>
      <form  action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
czmm" method="post" class="formes">
        <table>
          <tr>
            <td width=100><span>用户　名：</span></td>
            <td width=200><input name="username" type="text" maxlength=10 /></td>
          </tr>
          <tr>
            <td><span>注册邮箱：</span></td>
            <td><input name="email" type="text" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="image" id="dl" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/dl.jpg" /></td>
            <td></td>
          </tr>
        </table>
      </form>
    </div>
<div class="clear"></div>
    
  </div>
 <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
</html><?php }} ?>
