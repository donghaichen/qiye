<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 15:33:57
         compiled from "/home/uu169418/app/views/templates/changan/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13383112645440cbb2e73009-18922998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06688b01b7cefdee6937822e9e498aba7b7e4ad0' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/header.tpl',
      1 => 1418110435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13383112645440cbb2e73009-18922998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cbb305cb15_63694318',
  'variables' => 
  array (
    'auth' => 0,
    'base_url' => 0,
    'category' => 0,
    'c' => 0,
    'sub' => 0,
    'submenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cbb305cb15_63694318')) {function content_5440cbb305cb15_63694318($_smarty_tpl) {?>     
          <div class="head">
       <div class="top1"> <?php if (isset($_smarty_tpl->tpl_vars['auth']->value)) {?>欢迎您！　<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin"><?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
logout">退出</a>  <?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login">登录</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">注册</a> | <a href="http://58.246.62.13:7001/">网上自助</a>  <?php }?></div>
       <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/logo.png" alt="" /></div>
       <div class="clear"></div>
     </div>
     
     <div class="nav">
      <ul>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">网站首页</a></li>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['c']->value['parentid']==0) {?>

      <li class="fcd"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
      
      
      <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['c']->value['id']==$_smarty_tpl->tpl_vars['sub']->value['parentid']) {?>
            
<ul id="xlzcd">
<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value) {
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['c']->value['id']==$_smarty_tpl->tpl_vars['submenu']->value['parentid']) {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value['dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['submenu']->value['dir'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>
</a></li>
          <?php }?>
<?php } ?>
 </ul>
        <?php break 1?>
      <?php }?>
     
      <?php } ?></li>
 
        
        <?php }?>
        <?php } ?>
        </ul>
     </div><?php }} ?>
