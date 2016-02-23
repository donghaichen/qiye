<?php /* Smarty version Smarty-3.1.18, created on 2014-12-26 14:34:00
         compiled from "/home/uu169418/app/views/templates/changan/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17303686645440cc6d2f7388-27733510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7390b8d82cf27b79976d8897d74e868a799125d8' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/info.tpl',
      1 => 1419575632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17303686645440cc6d2f7388-27733510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc6d3e68e7_13554736',
  'variables' => 
  array (
    'base_url' => 0,
    'single' => 0,
    'active' => 0,
    'page' => 0,
    'products' => 0,
    'data' => 0,
    'category' => 0,
    'cd' => 0,
    'sub' => 0,
    'r_title' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc6d3e68e7_13554736')) {function content_5440cc6d3e68e7_13554736($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/uu169418/vendor/libs/plugins/modifier.date_format.php';
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


<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/jPages.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jPages.js"></script>

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
          <div>信息披露<span> Information</span></div>
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
      <div class="zxj"> <?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>

        <div class="zxjy"><span style="overflow: hidden;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span>
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/gscpxqy" method="post" style="margin-top: 10px;">
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
        <?php $_smarty_tpl->tpl_vars["r_title"] = new Smarty_variable('', null, 0);?>
    <div class="dyright">
      <div class="rposi"><span class="span1">信息披露</span>
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
                  <?php if ($_smarty_tpl->tpl_vars['cd']->value['parentid']==$_smarty_tpl->tpl_vars['sub']->value['id']) {?> <i>></i>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a>
                  >
                  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['cd']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['cd']->value['title'];?>
</a>
                  <?php $_smarty_tpl->tpl_vars["r_title"] = new Smarty_variable($_smarty_tpl->tpl_vars['cd']->value['title'], null, 0);?>
                  <?php }?>
              <?php } ?>
              <?php }?>
          <?php } ?>
          
          
  </div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span><?php echo $_smarty_tpl->tpl_vars['r_title']->value;?>
</span> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul id="content_table">
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
	
            <?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="holder"></div>
      </div>
    </div>
  
    <div class="clear"></div>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
<script type="text/javascript">
/*$(function(){
   $('div.holder').jPages({
       containerID:"content_table",
        first: '首页',      
        last: '尾页',     
        previous: '上页',     
        next : '下页',
        perPage : 10, //每页显示数据为多少行             
        startPage: 1, //起始页 
        startRange : 2, //开始页码为2个 
        midRange : 3, //最多显示几个页码页码,其余用..代替             e
        ndRange: 2, //结束页码为2个
        keyBrowse : true

       
        });
});*/
</script>
</html><?php }} ?>
