<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 11:26:55
         compiled from "/home/uu169418/app/views/templates/admin/side_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21128986115440cc2b49e315-42217858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486ce722f5dd07d2eab6f60f17542e86ba5666ee' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/side_content.tpl',
      1 => 1418094154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21128986115440cc2b49e315-42217858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc2b51ea98_45778265',
  'variables' => 
  array (
    'base_url' => 0,
    'category_model' => 0,
    'cm' => 0,
    'side_data' => 0,
    'side' => 0,
    'data_model' => 0,
    'dm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc2b51ea98_45778265')) {function content_5440cc2b51ea98_45778265($_smarty_tpl) {?><div id="side">
  <ul>
    <li class="sidemenu"> <a  href="javascript:;">分类管理</a></li>
    <ul class="submenu">
      <li class="selected"><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/category');">栏目列表</a></li>
          <?php  $_smarty_tpl->tpl_vars['cm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cm']->key => $_smarty_tpl->tpl_vars['cm']->value) {
$_smarty_tpl->tpl_vars['cm']->_loop = true;
?>
      <li><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/categorymodel/<?php echo $_smarty_tpl->tpl_vars['cm']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['cm']->value['name'];?>
</a></li>
      <?php } ?>
    </ul>
    <li class="sidemenu"> <a  href="javascript:;">内容管理</a></li>
    <ul class="submenu">
      <?php  $_smarty_tpl->tpl_vars['side'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['side']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['side_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['side']->key => $_smarty_tpl->tpl_vars['side']->value) {
$_smarty_tpl->tpl_vars['side']->_loop = true;
?>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/model/<?php echo $_smarty_tpl->tpl_vars['side']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['side']->value['name'];?>
</a></li>
      <?php } ?>
    </ul>
    	
       <li class="sidemenu"> <a  href="javascript:;">数据管理</a></li>
    <ul class="submenu">
    <?php  $_smarty_tpl->tpl_vars['dm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dm']->key => $_smarty_tpl->tpl_vars['dm']->value) {
$_smarty_tpl->tpl_vars['dm']->_loop = true;
?>
      <li><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/datamodel/<?php echo $_smarty_tpl->tpl_vars['dm']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['dm']->value['name'];?>
</a></li>
      <?php } ?>
    </ul> 
    <li class="sidemenu"> <a  href="javascript:;">模型管理</a></li>
    <ul class="submenu">
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/modelmanager');">内容模型管理</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/categorymanager');">分类模型管理</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/datamanager');">数据模型管理</a></li>
    </ul>
  </ul>
</div>
<?php }} ?>
