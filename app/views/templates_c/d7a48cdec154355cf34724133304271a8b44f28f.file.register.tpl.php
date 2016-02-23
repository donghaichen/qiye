<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 17:13:11
         compiled from "/home/uu169418/app/views/templates/changan/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:954096858545190fa065b43-25447441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a48cdec154355cf34724133304271a8b44f28f' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/register.tpl',
      1 => 1418116380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '954096858545190fa065b43-25447441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545190fa11dc82_94924874',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545190fa11dc82_94924874')) {function content_545190fa11dc82_94924874($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
    .span1{
       display:none;
       color:red;
    }
</style>
<body>
<div class="cont">
  <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="zcxx">
    <div class="zctx">如果你已有账号，即可在此<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login">登陆</a></div>
    <div class="clear"></div>
    <form id="register-form" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register" method="post">
      <table>
        <tr>
          <td class="tctd" width=91><span>用户类别：</span></td>
          <td width=380 class="xzz">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" checked="checked" name="user_type" class="xz" value="自然人" />
            自然人
            
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="user_type" value="机构" class="xz"  />
            机构 </td>
        </tr>
        <tr>
          <td class="tctd">姓名/机构名：</td>
          <td><input type="text" onfocus="if(this.value=='请填写真实姓名或机构全称'){ this.value='' };this.style.color='#000';" onblur="if(this.value==''||this.value=='请填写真实姓名或机构全称'){ this.value='请填写真实姓名或机构全称';this.style.color='#d6d6d6'; }" name="username" style="color:#d6d6d6"/><span class="span1">请输入用户名或机构名</span></td>
        </tr>
        <tr>
          <td class="tctd">证件类型：</td>
          <td><select name="certificate_type">
              <option value="身份证">身份证</option>
              <option value="军官证">军官证</option>
            </select></td>
        </tr>
        <tr>
          <td class="tctd">证件号码：</td>
          <td><input type="text" id="" name="certificate_number"/></td>
        </tr>
        <!-- tr>
          <td class="tctd">手机号码：</td>
          <td><input type="text" s/>
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hqsj.jpg" class="hqsj" alt="" /></a></td>
        </tr>
        <tr>
          <td class="tctd">短信验证码：</td>
          <td><input type="text" s/></td>
        </tr -->
        <tr>
          <td class="tctd">登录密码：</td>
          <td><input type="password" id="password" name="password"/></td>
        </tr>
        <tr>
          <td class="tctd">确认密码：</td>
          <td><input type="password" id="pwd1" name="pwd1"/></td>
        </tr>
        <tr>
          <td class="tctd">所在城市：</td>
          <td><input type="text"  id="city" name="city"/></td>
        </tr>
        <tr>
          <td class="tctd">电子邮箱：</td>
          <td><input type="text"  id="mail" name="mail"/></td>
        </tr>
        <tr>
          <td class="tctd" style="background:none;"></td>
          <!--<td class="ck"><input type="checkbox" class="" name="cache" value='1'/>
            <span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
read_file">我已阅读并同意《长安资产网络服务使用协议》</a></span></td>-->
        </tr>
        <tr>
          <td></td>
          <td><input type="image" id="xyb" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/xyibu.jpg" /></td>
        </tr>
      </table>
    </form>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  
</div>
</body>
<script>
    
        function checkes(){
            var username = document.getElementById('username').value();
            alert(username);
        
    }
    
</script>
</html><?php }} ?>
