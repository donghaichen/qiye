<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 11:26:40
         compiled from "/home/uu169418/app/views/templates/admin/side.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16331068605440cc23ae5c66-99383628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507763a3a2ca7746f395a8aeec44d465fa7f381e' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/side.tpl',
      1 => 1418094154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16331068605440cc23ae5c66-99383628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc23b4b0c5_14438501',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc23b4b0c5_14438501')) {function content_5440cc23b4b0c5_14438501($_smarty_tpl) {?><div id="side">
  <ul>
    <li class="sidemenu"> <a  href="javascript:;">后台首页</a></li>
    <ul class="submenu">
      <li class="selected"><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/home');">后台首页</a></li>
    </ul>
    <li class="sidemenu"> <a    href="javascript:;" >系统设置</a></li>
    <ul class="submenu">
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/site_set');">站点设置</a></li>
      <li ><a    href="javascript:;" onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/admin_set');">后台设置</a></li>
      <li ><a    href="javascript:;" onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/update_pass');">修改密码</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/update_cache');">更新缓存</a></li>
    </ul>
    <li class="sidemenu"> <a   href="javascript:;" >权限管理</a></li>
    <ul class="submenu">
      <li ><a    href="javascript:;" onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/user_group');">用户组管理</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/user');">用户管理</a></li>
    </ul>
    <li class="sidemenu"> <a   href="javascript:;">数据库管理</a></li>
    <ul class="submenu">
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/sql_bak');">数据库备份</a></li>
      <li ><a    href="javascript:;" onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/sql_reback');">数据库还原</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/sql_optimize');">数据库优化</a></li>
    </ul>
  </ul>
</div>
<?php }} ?>
