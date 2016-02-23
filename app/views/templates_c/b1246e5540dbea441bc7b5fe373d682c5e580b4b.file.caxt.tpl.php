<?php /* Smarty version Smarty-3.1.18, created on 2014-11-05 17:08:50
         compiled from "/home/uu169418/app/views/templates/changan/caxt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16354478395440cc10c6fa44-81818619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1246e5540dbea441bc7b5fe373d682c5e580b4b' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/caxt.tpl',
      1 => 1415178517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16354478395440cc10c6fa44-81818619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc10d35185_66767776',
  'variables' => 
  array (
    'base_url' => 0,
    'lczs' => 0,
    'data' => 0,
    'alfx' => 0,
    'lcwd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc10d35185_66767776')) {function content_5440cc10d35185_66767776($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/uu169418/vendor/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="shortcut icon" href="favicon.ico">
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

<body>
<div class="cont">
  <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="dycont">
    <div class="dyleft"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>关于我们 <span> About us</span></div>
        </h2>
        <ul>
          <li class="on1"><a href="#">理财园地</a></li>
          <li class="z"><a href="">理财知识</a></li>
          <li class="z"><a href="">案例分享</a></li>
          <li class="z"><a href="">理财问答</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/hyzx">行业资讯</a></li>
          <li><a href="#">政策法规</a></li>
          <li style="border:0px;"><a href="#">反洗钱专栏</a></li>
        </ul>
      </div>
      <div class="zxj"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/slt2.jpg" class="slt2" alt="" />
        <div class="zxjy"><span>福晟·钱隆<br>
          学府四期</span><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/xaniu.jpg" alt="" /></a></div>
      </div>
    </div>
    <div class="dyright">
      <div class="rposi"><span class="span1">理财园地</span>
        <div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="caxt.tpl">长安学堂</a> > <a href="#">理财园地</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span>理财知识</span> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lczs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lczs/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
            <?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>案例分享</span> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb2" style="margin-top:20px;">
        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alfx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <div class="lb2l">
            <div class="lb2bt"><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span>
              <div class="clear"></div>
            </div>
            <div class="lb2jj"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
          </div>

   <?php } ?>
        </div>
        <div class="d1bt"><span>理财问答</span> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb2" style="margin-top:20px;">
         <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lcwd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <div class="lb2l">
            <div class="lb2bt"><a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span>
              <div class="clear"></div>
            </div>
            <div class="lb2jj"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
          </div>

<?php } ?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("changan/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
</div>
</body>
</html><?php }} ?>
