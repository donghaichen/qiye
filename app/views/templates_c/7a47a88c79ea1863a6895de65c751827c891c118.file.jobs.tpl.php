<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 12:33:32
         compiled from "/home/uu169418/app/views/templates/changan/jobs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4789249745440ccaa2256c1-91517744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a47a88c79ea1863a6895de65c751827c891c118' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/jobs.tpl',
      1 => 1418094157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4789249745440ccaa2256c1-91517744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440ccaa2fa162_21081330',
  'variables' => 
  array (
    'base_url' => 0,
    'article' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440ccaa2fa162_21081330')) {function content_5440ccaa2fa162_21081330($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/uu169418/vendor/libs/plugins/modifier.date_format.php';
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

  <div class="banner1"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/bannercpyc.jpg" alt="" /> </div>
  <div class="nrtop"> <span>诚聘英才</span>
    <div class="posi">您现在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
jobs">诚聘英才</a></div>
    <div class="clear"></div>
  </div>
  <div  class="nynr">
    <table>
      <tr class="zd d">
        <td style="padding-left:30px;" width=170><span>职位名称</span></td>
        <td width=130><span>招聘人数</span></td>
        <td width=130><span>学历</span></td>
        <td width=140><span>工作地点</span></td>
        <td width=140><span>工作年限</span></td>
        <td width=130><span>发布时间</span></td>
        <td width=100><span>更多</span></td>
      </tr>
     <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
      <tr>
        <td style="padding-left:30px;"><span><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['count'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['education'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['place'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['years'];?>
</span></td>
        <td><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span></td>
        <td><span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
jobs/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hckxq.jpg" alt="" /></a></span></td>
      </tr>
    <?php } ?>
    </table>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
  </div>
</body>
</html><?php }} ?>
