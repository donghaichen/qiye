<?php /* Smarty version Smarty-3.1.18, created on 2014-12-27 17:07:52
         compiled from "/home/uu169418/app/views/templates/admin/model.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175498338654462ed9b71934-36523545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2c81c2178de397d8394d3dc70237ba51c15e0dc' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/model.tpl',
      1 => 1418094153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175498338654462ed9b71934-36523545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54462eda0cdc59_34094590',
  'variables' => 
  array (
    'base_url' => 0,
    'model' => 0,
    'data' => 0,
    'sub' => 0,
    'model_type' => 0,
    'type_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54462eda0cdc59_34094590')) {function content_54462eda0cdc59_34094590($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/admin.css" type="text/css" media="all">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<style>
.txt {
	width: 40px;
	padding: 0px !important;
	vertical-align: middle;
}
.field-txt {
	width: 140px;
	padding: 0px !important;
	vertical-align: middle;
	text-align:center;
}
td.order .txt {
	margin-right: 10px;
	text-align: center;
}
td.add .txt {
	width: 100px;
	margin-right: 10px;
}
.content_list td {
	padding: 5px 0px;
	border-bottom: 1px solid #dedede;
}
.content_list th {
	border-bottom: 1px solid #dedede;
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
.combo {
	padding: 0px;
	margin: 0px;
}
.board {
	padding-left: 55px;
	background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/bg_repno.gif') no-repeat scroll -240px -550px transparent;
}
.scombo {
	padding: 0px;
	margin: 0px;
	height: 22px;
	width: 150px;
}
.pcombo {
	padding: 0px;
	margin: 0px;
	height: 22px;
	width: 60px;
}
.support {
	color: #390;
	font-size: 16px;
}
.not {
	color: #F60;
	font-size: 16px;
}
</style>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/modelmanager">内容模型管理 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <form id="nav_set" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/modelmanager/add" name="nav_set">
        <table id="table_nav_list" class="content_list" width="100%"  cellspacing="0" >
          <thead>
            <tr>
              <th  width="50"></th>
              <th align="left" width="100">显示顺序</th>
              <th align="left" width="250">名称/备注</th>
              <th align="left" width="250">表名/字段</th>
              <th align="left"  width="300">类型/数据</th>
              <th align="center" width="100">必填字段?</th>
              <th align="center"  width="100">列表显示?</th>
              <th align="center"  width="100">是否可编辑?</th>
              <th align="center"  width="200">是否加入搜索?</th>
              <th align="left">操作</th>
            </tr>
          </thead>
          <tbody class="nav_list_body">
          
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['parent']==0) {?>
          <tr>
            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
            <input type="hidden" name="parent[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['parent'];?>
" />
            <input type="hidden" name="size[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['size'];?>
" />
            <input type="hidden" name="type[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
" />
            <input type="hidden" name="field[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tablename'];?>
" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><input class="txt" size="2" name="sortid[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sortid'];?>
" type="text"></td>
            <td class="add"><div>
                <input class="txt" size="15" name="name[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" type="text">
                <a href="###" onclick='addchild(this,<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
,"<?php echo $_smarty_tpl->tpl_vars['data']->value['tablename'];?>
")' class="addchildboard">添加字段</a></div></td>
            <td class="link"><?php echo $_smarty_tpl->tpl_vars['data']->value['tablename'];?>

              <input type="hidden" name="table[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tablename'];?>
" /></td>
            <td><?php  $_smarty_tpl->tpl_vars['type_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_data']->key => $_smarty_tpl->tpl_vars['type_data']->value) {
$_smarty_tpl->tpl_vars['type_data']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['data']->value['type']==$_smarty_tpl->tpl_vars['type_data']->value['id']) {?><?php echo $_smarty_tpl->tpl_vars['type_data']->value['name'];?>
<?php }?><?php } ?></td>
            <td><input type="hidden" name="Required[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['required'];?>
" /></td>
            <td><input type="hidden" name="isNav[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['isnav'];?>
" /></td>
            <td><input type="hidden" name="isEditable[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['iseditable'];?>
" /></td>
            <td><input type="hidden" name="isSearchable[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['issearchable'];?>
" /></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/modelmanager/del/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="act">删除</a></td>
          </tr>
          <?php }?> 
          
          <!--  查询当前ID下有没有 子菜单 --> 
          <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['sub']->value['parent']==$_smarty_tpl->tpl_vars['data']->value['id']) {?>
          <tr>
            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" />
            <input type="hidden" name="parent[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['parent'];?>
" />
            <input type="hidden" name="size[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['size'];?>
" />
            <input type="hidden" name="type[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['type'];?>
" />
            <input type="hidden" name="field[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['tablename'];?>
" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><div class="board">
                <input class="txt" size="2" name="sortid[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['sortid'];?>
" type="text">
              </div></td>
            <td  colspan="1"><div class="board">
                <input name="name[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
" style="width:100px;" size="15" class="txt" type="text">
              </div></td>
            <td class="link"><div class="board"><?php echo $_smarty_tpl->tpl_vars['sub']->value['tablename'];?>

                <input type="hidden" name="table[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['tablename'];?>
" />
              </div></td>
            <td><?php  $_smarty_tpl->tpl_vars['type_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_data']->key => $_smarty_tpl->tpl_vars['type_data']->value) {
$_smarty_tpl->tpl_vars['type_data']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sub']->value['type']==$_smarty_tpl->tpl_vars['type_data']->value['id']) {?><?php echo $_smarty_tpl->tpl_vars['type_data']->value['name'];?>
<?php }?><?php } ?><?php if (isset($_smarty_tpl->tpl_vars['sub']->value['datasource'])) {?> -> <?php echo $_smarty_tpl->tpl_vars['sub']->value['datasource'];?>
<?php }?></td>
            <td align="center"><input type="hidden" name="Required[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['required'];?>
" />
              <?php if ($_smarty_tpl->tpl_vars['sub']->value['required']>0) {?><span class="support">√</span><?php } else { ?><span class="not">×</span><?php }?></td>
            <td align="center"><input type="hidden" name="isNav[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['isnav'];?>
" />
              <?php if ($_smarty_tpl->tpl_vars['sub']->value['isnav']>0) {?><span class="support">√</span><?php } else { ?><span class="not">×</span><?php }?></td>
            <td align="center"><input type="hidden" name="isEditable[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['iseditable'];?>
" />
              <?php if ($_smarty_tpl->tpl_vars['sub']->value['iseditable']>0) {?><span class="support">√</span><?php } else { ?><span class="not">×</span><?php }?></td>
            <td align="center"><input type="hidden" name="isSearchable[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['issearchable'];?>
" />
              <?php if ($_smarty_tpl->tpl_vars['sub']->value['issearchable']>0) {?><span class="support">√</span><?php } else { ?><span class="not">×</span><?php }?></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/modelmanager/del/<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" class="act">删除</a></td>
          </tr>
          <?php }?>
          <?php } ?>
          
          <?php } ?>
          <tbody>
            <tr>
              <td colspan="1"></td>
              <td colspan="9"><div><a href="###" onclick="addNew();" class="addtr">添加内容模型</a></div></td>
            </tr>
            <tr>
              <td class="td25" align="center"><input name="chkall" id="chkallKImM" class="checkbox" onclick="checkAll('prefix', this.form, 'delete')" type="checkbox">
                <label for="chkallKImM">删?</label></td>
              <td colspan="15"><div class="fixsel">
                  <input class="btn btn-primary" id="submit_submit" name="submit" title="按 Enter 键可随时提交您的修改" value="提交" type="submit">
                </div></td>
            </tr>
          </tbody>
        </table>
      </form>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-1.7.2.min.js?ver=2.1"></script> 
      <script type="text/javascript">
		var row_count = 0;
		function addNew()
		{
			var table1 = $('#table_nav_list');
			var firstTr = table1.find('.nav_list_body');
			var row = $("<tr></tr>");
			var td1 = $('<td align="center"></td>');
			td1.append($('<input type="hidden" name="id[]" value="-1" /><input type="hidden" name="field[]" value="" /><input type="hidden" name="type[]" value="" /><input type="hidden" name="parent[]" value="0" /><input class="checkbox" value="" disabled="disabled" type="checkbox">'));
			var td2 = $('<td class="order"></td>');
			td2.append($('<input class="txt" size="2" name="sortid[]" value="1" type="text">'));
			var td3 = $('<td class="add"></td>');
			td3.append($('<input class="txt" size="15" name="name[]" value="" type="text"></div>'));	
			var td4 = $('<td class="link"></td>');
			td4.append($('<input name="table[]" value=""  style="width:130px;" class="txt" type="text">'));
			var td6 = $('<td colspan="9" class="cancel"></td>');
			td6.append($('<a href="###" onclick="del(this);" class="addtr">取消</a>'));	
			
				
			row.append(td1);
			row.append(td2);
			row.append(td3);
			row.append(td4);
	
			row.append(td6);
			
			table1.append(row);
			row_count++;
		}
		
		function addchild(obj,parentid,field)
		{
			var table = $(obj).parent().parent().parent();
			var row = $('<tr></tr>');
			var td1 = $('<td align="center"></td>');
			td1.append($('<input type="hidden" name="id[]" value="-1" /><input type="hidden" name="table[]" value="' + field + '"/> <input type="hidden" name="parent[]" value="' + parentid +  '" /><input class="checkbox" value="" disabled="disabled" type="checkbox">'));
			var td2 = $('<td class="order"></td>');
			td2.append($('<div class="board"><input class="txt" size="2" name="sortid[]" value="1" type="text"></div>'));			
			var td3 = $('<td colspan="1"></td>');
			td3.append('<div class="board"><input name="name[]" value="" style="width:100px;" size="15" class="txt" type="text"></div>');
			var td4 = $('<td class="link"></td>');
			td4.append('<div class="board"><input name="field[]" value="" style="width:100px;" size="15" class="txt" type="text"></div>');
			var td5 = $('<td></td>');
			td5.append($('<select name="type[]" class="scombo"><?php  $_smarty_tpl->tpl_vars['type_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_data']->key => $_smarty_tpl->tpl_vars['type_data']->value) {
$_smarty_tpl->tpl_vars['type_data']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['type_data']->value['id']==0) {?> selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['type_data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type_data']->value['name'];?>
</option><?php } ?></select><input name="size[]" value="255" class="field-txt" type="text"/> '));	
			
			var td6 = $('<td align="center"></td>');
			td6.append($('<select name="Required[]" class="pcombo"><option selected value="0">否</option><option value="1">是</option></select>'));	
			
			var td7 = $('<td align="center"></td>');
			td7.append($('<select name="isNav[]" class="pcombo"><option selected value="1">是</option><option value="0">否</option></select>'));	
			
			var td8 = $('<td align="center"></td>');
			td8.append($('<select name="isEditable[]" class="pcombo"><option selected value="1">是</option><option value="0">否</option></select>'));	
			
			var td9 = $('<td align="center"></td>');
			td9.append($('<select name="isSearchable[]" class="pcombo"><option selected value="0">否</option><option value="1">是</option></select>'));	
			
			var td10 = $('<td></td>');
			td10.append($('<a href="###" onclick="del(this);" class="addtr">取消</a>'));	
		
			row.append(td1);
			row.append(td2);
			row.append(td3);
			row.append(td4);
			row.append(td5);
			row.append(td6);
			row.append(td7);
			row.append(td8);
			row.append(td9);
			row.append(td10);
			
			table.after(row);
			
			table.bind("click", $(".txt").attr("focus")); 
		}
		
		
		function del(obj)
		{
			$(obj).parent().parent().remove();
		
		} 
		
		/*$(document).ready(function() {
     		$('.scombo').live('change', function() { 
			
				switch($(this).find("option:selected").val()){
					case "1":
						alert('asdf');
						break;
					case "2":
						alert('sss2');
						break;
					default:
					alert($(this).find("option:selected").val());
				}
			});
        });*/
		
	  </script> 
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
