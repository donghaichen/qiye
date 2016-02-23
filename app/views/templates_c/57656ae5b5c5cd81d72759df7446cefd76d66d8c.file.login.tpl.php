<?php /* Smarty version Smarty-3.1.18, created on 2014-12-03 17:23:24
         compiled from "/home/uu170528/app/views/templates/changan/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194181975554783a420388e2-60925826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57656ae5b5c5cd81d72759df7446cefd76d66d8c' => 
    array (
      0 => '/home/uu170528/app/views/templates/changan/login.tpl',
      1 => 1417577785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194181975554783a420388e2-60925826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54783a420bcb57_12279610',
  'variables' => 
  array (
    'base_url' => 0,
    'auth' => 0,
    'show_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54783a420bcb57_12279610')) {function content_54783a420bcb57_12279610($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
<style>
.logged {
	text-align: center;
	margin-top: 40px;
}
</style>
</head>

<body>
<div class="cont"> <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="login">
    <div class="zlogin"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/zlt.jpg" alt="" /></div>
    <div class="ylogin">
      <div class="zcts">如果你没有账号，即可在此<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">注册</a></div>
      <div class="clear"></div>
      <?php if (isset($_smarty_tpl->tpl_vars['auth']->value)) {?>
      <p class="logged">您已经登陆过,无需再次登录! <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">点此</a> 返回首页</p>
      <?php } else { ?>
      <form  action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" method="post">
        <table>
        <?php if (isset($_smarty_tpl->tpl_vars['show_error']->value)) {?>
          <p class="show_error"><?php if ($_smarty_tpl->tpl_vars['show_error']->value==1) {?>密码错误<?php } elseif ($_smarty_tpl->tpl_vars['show_error']->value==2) {?>不存在的用户<?php } elseif ($_smarty_tpl->tpl_vars['show_error']->value==3) {?>验证码错误<?php }?></p>
        <?php }?>
          <tr>
            <td width=100><span>用户　名：</span></td>
            <td width=200><input name="username" type="text" maxlength=10 /></td>
            <td width=114></td>
          </tr>
          <tr>
            <td><span>确认密码：</span></td>
            <td><input name="password" type="password" /></td>
            <td><a href="#">忘记密码</a></td>
          </tr>
          <tr>
            <td><span>验证　码：</span></td>
            <td class="yzm"><input name="vcode" type="text" />
              <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
captcha/1" alt="" /></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td class="mrx"><input type="checkbox" name="cache" value='1'/>
              <span>7天内记住我的用户名和密码</span></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="image" id="dl" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/dl.jpg" /></td>
            <td></td>
          </tr>
        </table>
      </form>
      
      <?php }?> 
     <span style="color:red;position: relative;top:20px;">对不起,您需要登录后才能查看我司产品及相关信息!请点击注册按钮免费注册成为特定客户。</span>
    </div>
      
    <div class="clear"></div>
    
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
</html><?php }} ?>
