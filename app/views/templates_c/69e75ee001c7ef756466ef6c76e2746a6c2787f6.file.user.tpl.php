<?php /* Smarty version Smarty-3.1.18, created on 2014-12-27 17:03:22
         compiled from "/home/uu169418/app/views/templates/admin/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203091152754462f08c2f0c4-57187963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e75ee001c7ef756466ef6c76e2746a6c2787f6' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/user.tpl',
      1 => 1418094155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203091152754462f08c2f0c4-57187963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54462f08cd4f11_11617258',
  'variables' => 
  array (
    'base_url' => 0,
    'user_data' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54462f08cd4f11_11617258')) {function content_54462f08cd4f11_11617258($_smarty_tpl) {?><!DOCTYPE html>
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
      
        <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/model/">用户管理</a></li>
     
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
      <table id="content_table" class="content_list" width="100%" style="text-align:center">
        <thead>
          <tr>
            <th><input class="checkbox" value=""  type="checkbox"></th>
            <th>#</th>
            <th>用户类别</th>
            <th>姓名/机构名</th>
            <th>证件类型</th>
            <th>证件号码</th>
            <th>所在城市</th>
            <th>电子邮箱</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
         <td align="center" ><input class="checkbox" type="checkbox"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_type'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['certificate_type'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['certificate_number'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
          <td><!--<form accept-charset="UTF-8" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/delete_show" method="post">
                  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
                <input type="submit"  value="编辑" />
              </form>-->
              <form accept-charset="UTF-8" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/delete_show" method="post" style="position: relative;top:10px;">
                  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
                <input type="submit" value="删除" />
              </form>
            <!--<button class="btn btn-primary" onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/delete_user"'>删除</button>-->
              <!--<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/delete_user" method="post">
                 <input type="submit" value="删除" class="btn btn-primary" /><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
              </form>-->
          </td>
        </tr>
        <?php } ?>
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
        }
		 
        
    } 
	
	
	);
} );
</script>
</body>
</html>
<?php }} ?>
