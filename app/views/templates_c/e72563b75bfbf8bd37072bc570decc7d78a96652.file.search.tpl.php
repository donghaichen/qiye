<?php /* Smarty version Smarty-3.1.18, created on 2014-12-04 17:04:06
         compiled from "/home/uu170528/app/views/templates/changan/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1281166776547c29c46343f3-26670910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72563b75bfbf8bd37072bc570decc7d78a96652' => 
    array (
      0 => '/home/uu170528/app/views/templates/changan/search.tpl',
      1 => 1417577788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1281166776547c29c46343f3-26670910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547c29c46fc0a0_46221861',
  'variables' => 
  array (
    'base_url' => 0,
    'filter' => 0,
    'products' => 0,
    'data' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c29c46fc0a0_46221861')) {function content_547c29c46fc0a0_46221861($_smarty_tpl) {?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/reservation.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.4.2.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/dh.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/reservation.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/product_filter.js"></script>


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

  <div class="banner1"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop2"> <span>
    
    </span>
    <!--<div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="cpyx.html">公司产品</a> > <a href="cpyx.html">产品优选</a></div>-->
    
    <div class="nrtop">
        <span>产品详情</span> <div style="text-align: right;color: #b2b2b2;margin-bottom: -5px;">您现在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" style="text-align: right;color: #b2b2b2;">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product" style="text-align: right;color: #b2b2b2;">公司产品</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/cpyx" style="text-align: right;color: #b2b2b2;">产品优选</a></div>  
        
	<div class="clear"></div>
</div>
    
    <div class="clear"></div>
  </div>
  
  <script>
    var filter_data=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
;
  </script>    
  
    <div  class="xpxq">
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<div class="xpbt"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
<?php } ?>

<script type="text/javascript">  
$(document).ready(function(){
	$('td:nth-child(even)').addClass('alt')
});
</script>
 <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<table>
	<tr>
		<td width=103><span>产品名称</span></td>
		<td width=319><span><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span></td>
		<td width=76><span>管理公司</span></td>
		<td width=103><span><?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
</span></td>
		<td width=108><span>产品期限</span></td>
		<td width=240><span><?php echo $_smarty_tpl->tpl_vars['data']->value['month'];?>
个月</span></td>
	</tr>

		<tr>
		<td width=103><span>投资领域</span></td>
		<td width=319><span><?php echo $_smarty_tpl->tpl_vars['data']->value['area'];?>
</span></td>
		<td width=76><span>起始资金</span></td>
		<td width=103><span><?php echo $_smarty_tpl->tpl_vars['data']->value['money'];?>
万元</span></td>
		<td width=108><span>产品状态</span></td>
		<td width=240><span><?php echo $_smarty_tpl->tpl_vars['data']->value['status'];?>
</span></td>
	</tr>
<tr height=88>
	<td height=88><span>预期年化收益率</span></td>
	<td colspan=5><span><?php echo $_smarty_tpl->tpl_vars['data']->value['yuqi'];?>
%</span></td>
</tr>

</table>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<div class="xpxqnr">
	<div class="xpxbt">详细内容</div>
<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

</div>
<?php } ?>


<!--<div class="xgjs">
	<div class="xgjsbt"><span>在正发行的产品</span></div>
		<div class="xgjsnr">
			
<ul>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" class="slt1" alt="" />
<div class="xc">
<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h2>
<p>资管计划期限：<?php echo $_smarty_tpl->tpl_vars['data']->value['month'];?>
（详
见内容）<br>
资管领域：<?php echo $_smarty_tpl->tpl_vars['data']->value['area'];?>
<br>
投资起始金额：<?php echo $_smarty_tpl->tpl_vars['data']->value['money'];?>
万元<br>
预期年化收益：<?php echo $_smarty_tpl->tpl_vars['data']->value['yuqi'];?>
%<br>
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/gscpxqy" method="post">
    <input type="hidden" class="s2" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
    <input type="image"  class="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" />
</form>  
</p>
</div>
<div class="clear"></div>
</li>
<?php } ?>					
<div class="clear"></div>
</ul>

			
		</div>

</div>-->
</div>







</div>



      
<?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
</div>
  </body><?php }} ?>
