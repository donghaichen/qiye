<?php /* Smarty version Smarty-3.1.18, created on 2014-12-01 14:35:30
         compiled from "/home/uu170528/app/views/templates/admin/m_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777319392547c0c32b7e667-90764159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c643bb81427f556797534936c9b4c29ba1a7fc7' => 
    array (
      0 => '/home/uu170528/app/views/templates/admin/m_edit.tpl',
      1 => 1417160628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777319392547c0c32b7e667-90764159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'single' => 0,
    'model_type' => 0,
    'content' => 0,
    's' => 0,
    'has_category' => 0,
    'category' => 0,
    'data' => 0,
    'm_data' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547c0c32d470f7_62202186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c0c32d470f7_62202186')) {function content_547c0c32d470f7_62202186($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/admin.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/datejs/WdatePicker.js"></script>
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<style>
.input-text {
	height: 10px;
	padding: 0px !important;
	width: 600px;
}
.stype {
	padding: 0px;
	height: 22px;
	width: 100px;
	margin: 0px;
}
.scategory {
	padding: 0px;
	height: 22px;
	width: 110px;
}
.tab_menu form {
	margin: 0px;
}
.tab_menu .btn {
	cursor: pointer;
	background: none repeat scroll 0% 0% #1D83DB;
	color: #FFF;
	border: 1px solid #1C6A9E;
	padding: 0px 8px;
	overflow: hidden;
	height: 24px;
	margin: 0px 5px 0px 0px;
	line-height: 20px;
}
.tab_menu .btn:hover {
	border-color: #3599DB;
}
.txt {
	width: 40px;
	padding: 0px !important;
	vertical-align: middle;
	text-align: center;
}
td.order .txt {
	margin-right: 10px;
}
td.add .txt {
	width: 100px;
	margin-right: 10px;
}
.add, .edit, .sdel, .grant, .down, .audit {
	float: left;
	width: 16px;
	height: 16px;
	background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/ico.gif') repeat scroll 0% 0% transparent;
	margin-left: 5px;
}
.edit {
	background-position: 0px -64px;
}
.sdel {
	background-position: 0px -48px;
}
.main_foot {
	margin-top: 10px;
}
.btn {
	cursor: pointer;
	background: none repeat scroll 0% 0% #1D83DB;
	color: #FFF;
	border: 1px solid #1C6A9E;
	padding: 0px 8px;
	overflow: hidden;
	height: 24px;
	margin: 0px 5px 0px 0px;
	line-height: 20px;
}
.content_list td {
	padding: 5px 0px;
	border-bottom: 1px solid #dedede;
}
.content_list th {
	border-bottom: 1px solid #dedede;
}
input {
	margin: 0px !important;
}
.number {
	width: 90px;
}
</style>
</head>
<body>
<div id="article">
  <div class="tab_menu">
  <form name="formsearch" id="formsearch" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/admin/m/seach" method="post">
    <ul>
      <li class="current"><a href="javascript:;">编辑</a></li>
    </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab_content_wrap">
    <div class="tab_content">
  </form>
  <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['single']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
  <form name="formview" id="formview" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" method="post"   enctype="multipart/form-data">
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['single']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
    <input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" />
    <?php } ?>
    <table class="content_list" width="100%">
      <tbody><?php if (isset($_smarty_tpl->tpl_vars['has_category']->value)&&!empty($_smarty_tpl->tpl_vars['category']->value)) {?>
        <tr>
          <td width="100">选择栏目</td>
          <td colspan="4"> <select name="category" id="category" class="stype" validtip="required">
              
             
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['data']->value['parentid']==0) {?>
              
              <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</option>
              
              <?php }?>
     
              <?php if ($_smarty_tpl->tpl_vars['data']->value['parentid']>0) {?>
              
              <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">&nbsp;&nbsp;-<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</option>
              
              <?php }?>
        
          <?php } ?>
            
            
            </select></td>
        </tr><?php }?>
      <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['m']->value['required']) {?><font color="red">*</font><?php }?></td>
        <?php if ($_smarty_tpl->tpl_vars['m']->value['type']==1) {?>
        <td colspan="4"><input name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" id="title"  size="30" class="input-text number" validtip="required" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
" type="text"></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==2) {?>
        <td colspan="4"><input name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" id="title"  size="60" style="color:" class="validate input-text" validtip="required" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
" type="text"></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==3) {?>
         <td colspan="4"><textarea id="text" name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" style="width:600px;height:130px;"><?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
</textarea></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==4) {?>
        <td colspan="4"><textarea class="editor" name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" style="width:700px;height:300px;" ><?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
</textarea></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==5) {?>
        <td colspan="4"><input class="Wdate" type="text" name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
" onClick="WdatePicker({ skin:'whyGreen',doubleCalendar:true,dateFmt:'yyyy-MM-dd HH:mm:ss' })"></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==6) {?>
        <td colspan="4"><div><img src="" alt="请上传" /></div><input type="file" name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
" ></td>
        
        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['type']==7) {?>
        <td colspan="4"><div><select name="<?php echo $_smarty_tpl->tpl_vars['m']->value['tablename'];?>
"><option value="组合框">组合框</option></select></td>
        <?php }?> </tr>
      <?php } ?>
      <tr>
        <td></td>
        <td colspan="4"><input type="submit" class="btn btn-primary" value="提交"  /></td>
      </tr>
    </table>
  </form>
</div>
</div>
</div>
<script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
kindeditor-4.1.10/kindeditor.js"></script> 
<script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
kindeditor-4.1.10/lang/zh_CN.js"></script> 
<script>
// ASP
KindEditor.ready(function(K) {
        K.create('.editor', {
                uploadJson : '../../../../kindeditor-4.1.10/php/upload_json.php',
                fileManagerJson : '../../../../kindeditor-4.1.10/php/file_manager_json.php',
                allowFileManager : true,
				width : "100%", //编辑器的宽度为70%
				height : "700px", //编辑器的高度为100px
				filterMode : false, //不会过滤HTML代码
				resizeMode : 1 //编辑器只能调整高度
        });
});
</script>
</body>
</html><?php }} ?>
