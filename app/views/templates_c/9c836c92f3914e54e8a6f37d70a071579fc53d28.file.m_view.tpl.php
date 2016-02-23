<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 11:26:57
         compiled from "/home/uu169418/app/views/templates/admin/m_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1988387018545190d5515002-23408330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c836c92f3914e54e8a6f37d70a071579fc53d28' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/m_view.tpl',
      1 => 1418094154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1988387018545190d5515002-23408330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_545190d57983e3_78222770',
  'variables' => 
  array (
    'base_url' => 0,
    'single' => 0,
    'model_type' => 0,
    's' => 0,
    'has_category' => 0,
    'category' => 0,
    'm_data' => 0,
    'm' => 0,
    'model_data' => 0,
    'model' => 0,
    'ctg' => 0,
    'sub_ctg' => 0,
    'is_category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545190d57983e3_78222770')) {function content_545190d57983e3_78222770($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/admin.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
datatable/css/jquery.dataTables.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-1.7.2.min.js?ver=2.1"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
datatable/js/jquery.dataTables.min.js"></script>
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<style>
.input-text {
	height: 10px;
	padding: 0px !important;
	width: 150px;
}
.stype {
	padding: 0px;
	height: 22px;
	width: 80px;
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
.lu_button {
	cursor: pointer;
	background: none repeat scroll 0% 0% #1D83DB;
	color: #FFF;
	border: 1px solid #1C6A9E;
	padding: 3px 8px;
	overflow: hidden;
	height: 24px;
	margin: 0px 5px 0px 0px;
	line-height: 20px;
}
.lu_button:hover {
	color: #fff;
}
</style>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <form name="formsearch" id="formsearch" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/m/seach" method="post">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['single']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
        <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
 </a></li>
        <?php } ?>
        <li>
          <input name="keyword" value="" class="input-text" type="text">
        </li>
        <li>
          <select name="searchtype" class="stype">
            <option value="title">标题</option>
            <option value="id">ID</option>
          </select>
        </li>
        <li>
          <select name="category" class="scategory">
            <option value="0">选择栏目</option>
            <option value="1">新闻中心</option>
          </select>
        </li>
        <li>
          <input class="btn" value="搜索" type="submit" />
        </li>
      </ul>
    </form>
  </div>
  <div class="clearfix"></div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <table id="content_table" class="content_list" width="100%">
        <thead>
          <tr>
            <th width="50"><input class="checkbox" value=""  type="checkbox"></th>
            <?php if (isset($_smarty_tpl->tpl_vars['has_category']->value)&&!empty($_smarty_tpl->tpl_vars['category']->value)) {?>
            <th width="80">#</th>
   
            <?php }?>
				
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['m']->value['isnav']) {?> 
            <th align="left"><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</th><?php }?>
            <?php } ?>
            
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        <?php $_smarty_tpl->tpl_vars["is_category"] = new Smarty_variable(false, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
        <tr>
          <td align="center" ><input class="checkbox" type="checkbox"></td>
          <?php if (isset($_smarty_tpl->tpl_vars['has_category']->value)) {?>
          	<?php  $_smarty_tpl->tpl_vars['ctg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ctg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ctg']->key => $_smarty_tpl->tpl_vars['ctg']->value) {
$_smarty_tpl->tpl_vars['ctg']->_loop = true;
?>
          	<?php if ($_smarty_tpl->tpl_vars['model']->value['category']==$_smarty_tpl->tpl_vars['ctg']->value['id']) {?><td align="center">[<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['ctg']->value['parentid']>0) {?><?php  $_smarty_tpl->tpl_vars['sub_ctg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_ctg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_ctg']->key => $_smarty_tpl->tpl_vars['sub_ctg']->value) {
$_smarty_tpl->tpl_vars['sub_ctg']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sub_ctg']->value['id']==$_smarty_tpl->tpl_vars['ctg']->value['parentid']) {?><?php echo $_smarty_tpl->tpl_vars['sub_ctg']->value['dir'];?>
/<?php }?><?php } ?><?php }?><?php echo $_smarty_tpl->tpl_vars['ctg']->value['dir'];?>
" target="new"><?php echo $_smarty_tpl->tpl_vars['ctg']->value['title'];?>
</a>]</td><?php $_smarty_tpl->tpl_vars["is_category"] = new Smarty_variable(true, null, 0);?><?php }?>
          	<?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['is_category']->value==false) {?>
            <td align="center">无</td>
            <?php }?>
          <?php }?>
          
          <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['m']->value['isnav']) {?><td><?php echo $_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['m']->value['tablename']];?>
</td><?php }?>
          <?php } ?>
          <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['single']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
          <td width="50"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['s']->value['tablename'];?>
/<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
" title="编辑" class="edit"></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/del/<?php echo $_smarty_tpl->tpl_vars['s']->value['tablename'];?>
/<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
"  title="删除本项" class="sdel"></a></td>
          <?php } ?>
        </tr>
        <?php } ?>
        <tbody>
          <tr>
            <td colspan="7"><div class="main_foot"> <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['single']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                <button class="btn btn-primary" onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/add/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"'>添加</button>
                <button class="btn btn-primary" onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/<?php echo $_smarty_tpl->tpl_vars['model_type']->value;?>
/del/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"'>删除</button>
                <?php } ?> </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#content_table').dataTable( {
        "paging":   true,
        "ordering": true,
		"info":     false,
		"searching":false,
		"lengthMenu": [15],
		"bLengthChange": false, 
                
		"language": {
            "lengthMenu": "显示 _MENU_ 行",
            "zeroRecords": "什么都没找到 - sorry",
            "info": "显示 页面 _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
					    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上一页",
                        "sNext": "下一页",
                        "sLast": "末页"
                    }
        },

        
    } 
	
	
	);
} );
</script>
</body>
</html>
<?php }} ?>
