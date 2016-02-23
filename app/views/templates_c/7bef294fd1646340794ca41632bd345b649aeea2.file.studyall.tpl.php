<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 14:54:24
         compiled from "/home/uu169418/app/views/templates/changan/studyall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98371416545b2f57db6ca8-70114807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bef294fd1646340794ca41632bd345b649aeea2' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/studyall.tpl',
      1 => 1418094159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98371416545b2f57db6ca8-70114807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545b2f5803f2d8_72430197',
  'variables' => 
  array (
    'base_url' => 0,
    'single' => 0,
    'active' => 0,
    'page' => 0,
    'products' => 0,
    'data' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b2f5803f2d8_72430197')) {function content_545b2f5803f2d8_72430197($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/uu169418/vendor/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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

<body>
<div class="cont"> <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="dycont">
    <div class="dyleft"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>长安学堂 <span> Study</span></div>
        </h2>
        <ul>
         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['name'] = 'menu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['single']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total']);
?>
          <?php if ($_smarty_tpl->tpl_vars['single']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['dir']==$_smarty_tpl->tpl_vars['active']->value) {?>
          <li class="on1"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['single']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['single']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
</a></li>
        
          <?php } else { ?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['single']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['single']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
</a></li>
           
          <?php }?>
          <?php endfor; endif; ?>
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
    <style>	

	.lb3{
		margin-bottom: 15px;
		}

		</style>
    <div class="dyright">
      <div class="rposi"><span class="span1">长安学堂</span>
        <div class="posi">您现在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study">长安学堂</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span>理财园地</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/lcyd"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==580) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/lcyd/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>行业资讯</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/hyzx"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==583) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/hyzx/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>政策法规</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/zcfg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==582) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/zcfg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>反洗钱专栏</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/fxqzl"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==581) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
study/fxqzl/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>
          </ul>
        </div>
        
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
 <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
</html><?php }} ?>
