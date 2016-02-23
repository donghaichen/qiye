<?php /* Smarty version Smarty-3.1.18, created on 2014-11-28 16:04:49
         compiled from "/home/uu170528/app/views/templates/admin/side.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19613297154782ca1e71652-87165837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e057a450c3115e8a4285aea967fe94fea79c45f1' => 
    array (
      0 => '/home/uu170528/app/views/templates/admin/side.tpl',
      1 => 1417160628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19613297154782ca1e71652-87165837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54782ca1eeb2d3_23466325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54782ca1eeb2d3_23466325')) {function content_54782ca1eeb2d3_23466325($_smarty_tpl) {?><div id="side">
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
