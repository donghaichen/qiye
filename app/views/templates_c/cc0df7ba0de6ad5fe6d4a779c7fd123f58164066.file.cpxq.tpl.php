<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 11:27:31
         compiled from "/home/uu169418/app/views/templates/changan/cpxq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2743148845440cc6dbc6a13-73745909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0df7ba0de6ad5fe6d4a779c7fd123f58164066' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/cpxq.tpl',
      1 => 1418094156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743148845440cc6dbc6a13-73745909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc6dcf4814_62082887',
  'variables' => 
  array (
    'base_url' => 0,
    'category' => 0,
    'cd' => 0,
    'active' => 0,
    'sub' => 0,
    'r_title' => 0,
    'article' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc6dcf4814_62082887')) {function content_5440cc6dcf4814_62082887($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
.xpxqnr {
	margin-bottom: 20px;
}
</style>
</head>

<body>



	  <?php $_smarty_tpl->tpl_vars["r_title"] = new Smarty_variable('', null, 0);?>


	  <?php  $_smarty_tpl->tpl_vars['cd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cd']->key => $_smarty_tpl->tpl_vars['cd']->value) {
$_smarty_tpl->tpl_vars['cd']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['cd']->value['dir']==$_smarty_tpl->tpl_vars['active']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['cd']->value['parentid']==$_smarty_tpl->tpl_vars['sub']->value['id']) {?> <?php $_smarty_tpl->tpl_vars["r_title"] = new Smarty_variable($_smarty_tpl->tpl_vars['cd']->value['title'], null, 0);?>
      <?php }?>
      <?php } ?>
      <?php }?>
      <?php } ?>

<div class="cont"> <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="banner1"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop"> <span><?php echo $_smarty_tpl->tpl_vars['r_title']->value;?>
</span>
    <div class="posi">您现在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">首页</a> 
    <?php  $_smarty_tpl->tpl_vars['cd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cd']->key => $_smarty_tpl->tpl_vars['cd']->value) {
$_smarty_tpl->tpl_vars['cd']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['cd']->value['dir']==$_smarty_tpl->tpl_vars['active']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['cd']->value['parentid']==$_smarty_tpl->tpl_vars['sub']->value['id']) {?> <i>></i> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['cd']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['cd']->value['title'];?>
</a> <?php $_smarty_tpl->tpl_vars["r_title"] = new Smarty_variable($_smarty_tpl->tpl_vars['cd']->value['title'], null, 0);?>
      <?php }?>
      <?php } ?>
      <?php }?>
      <?php } ?> </div>
    <div class="clear"></div>
  </div>
  <div  class="xpxq"> <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <div class="xpbt"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</div>
    <div class="xpxqnr"> <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
 </div>
    <?php } ?>
    <!--<div class="xgjs">
      <div class="xgjsbt"><span>在正发行的产品</span></div>
      <div class="xgjsnr">
        <ul>
          <li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>-->
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
</html><?php }} ?>
