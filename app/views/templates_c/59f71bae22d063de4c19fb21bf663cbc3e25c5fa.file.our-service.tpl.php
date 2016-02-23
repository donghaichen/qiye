<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 15:57:09
         compiled from "/home/uu169418/app/views/templates/changan/our-service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:363788335545b07d4d6d5d3-77514962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f71bae22d063de4c19fb21bf663cbc3e25c5fa' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/our-service.tpl',
      1 => 1418111827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '363788335545b07d4d6d5d3-77514962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545b07d4e0cde1_72022749',
  'variables' => 
  array (
    'base_url' => 0,
    'products' => 0,
    'data' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b07d4e0cde1_72022749')) {function content_545b07d4e0cde1_72022749($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
<script>
   $(function(){
      $('#uu li').click(function(){
          $(this).addClass('on1');
      })
   })
</script>


<!--[if IE 6]>

<script type="text/javascript" src="js/png.js" ></script>

<script type="text/javascript">

DD_belatedPNG.fix('*');

</script>

<![endif]-->

</head>

<body>
<div class="cont">
  <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="dycont">
    <div class="dyleft"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>服务中心 <span> Service</span></div>
        </h2>
        <ul id="uu">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
service-center/ourservice">我们的服务</a></li>
          
          <li><a href="http://58.246.62.13:7001/">网上自助</a></li>
          <li><a href="http://wpa.qq.com/msgrd?V=1&Uin=123691873&Site=三生有幸网客服&Menu=yes">在线客服</a></li>
          <li style="border:0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">注册服务</a></li>
	  
        </ul>
      </div>
      <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
      <div class="zxj"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" class="slt2" alt="" style="width:70px;height:95px;"/>
        <div class="zxjy"><span><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
<br>
          </span>
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/gscpxqy" method="post" style="margin-top: 20px;">
          <input type="hidden" class="s2" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
          <input type="image"  class="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/xaniu.jpg" />
          </form>    
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="dyright">
      <div class="rposi"><span class="span1">我们的服务</span>
        <div class="posi">您现在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
service-center/ourservice">服务中心</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
service-center/ourservice">我们的服务</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
	  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <p><h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4></p>
            <span><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</span>
          <?php } ?>
        <div class="lb2" style="margin-top:20px;">
         
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
</div>
</body>
</html><?php }} ?>
