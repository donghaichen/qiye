<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 11:26:55
         compiled from "/home/uu169418/app/views/templates/admin/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14636365005440cc2b73a0c4-26958411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2185e3e617997e21d78a6db0ddb3c3922164c7f9' => 
    array (
      0 => '/home/uu169418/app/views/templates/admin/category.tpl',
      1 => 1418094153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14636365005440cc2b73a0c4-26958411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc2b844520_30798039',
  'variables' => 
  array (
    'base_url' => 0,
    'category' => 0,
    'data' => 0,
    'model' => 0,
    'm' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc2b844520_30798039')) {function content_5440cc2b844520_30798039($_smarty_tpl) {?><!DOCTYPE html>
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
td.order .txt {
	margin-right: 10px;
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
</style>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/category">栏目列表 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <form id="nav_set" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/category" name="nav_set">
        <table id="table_nav_list" class="content_list" width="100%"  cellspacing="0" >
          <thead>
            <tr>
              <th  width="50"></th>
              <th align="left" width="100">显示顺序</th>
              <th align="left" width="250">名称</th>
              <th align="left" width="400">目录</th>
              <th align="left">模型</th>
              <th align="left">操作</th>
            </tr>
          </thead>
          <tbody class="nav_list_body">
          
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['parentid']==0) {?>
          <tr  onmouseover="this.style.backgroundColor='yellow" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
            <input type="hidden" name="parentid[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['parentid'];?>
" />
            <input type="hidden" name="model[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['model'];?>
" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><input class="txt" size="2" name="sortid[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sortid'];?>
" type="text"></td>
            <td class="add"><div>
                <input class="txt" size="15" name="title[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" type="text">
                <a href="###" onclick="addrowdirect=1;addchild(this,<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
)" class="addchildboard">添加二级导航</a></div></td>
            <td class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['dir'];?>
" target="new"><?php echo $_smarty_tpl->tpl_vars['data']->value['dir'];?>
</a>
              <input type="hidden" name="dir[]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dir'];?>
" /></td>
            <td><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['data']->value['model']==$_smarty_tpl->tpl_vars['m']->value['id']) {?><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
<?php }?><?php } ?></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/category/del/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="act" onclick="return que_deletes()">删除</a></td>
           
          </tr>
          <?php }?>
          
          <!--  查询当前ID下有没有 子菜单 -->
          	<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
            	<?php if ($_smarty_tpl->tpl_vars['sub']->value['parentid']==$_smarty_tpl->tpl_vars['data']->value['id']) {?>
          <tr  onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" />
            <input type="hidden" name="parentid[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['parentid'];?>
" />
            <input type="hidden" name="model[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['model'];?>
" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><div class="board"><input class="txt" size="2" name="sortid[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['sortid'];?>
" type="text"></div></td>
            <td  colspan="1"><div class="board">
                <input name="title[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
" style="width:100px;" size="15" class="txt" type="text">
              </div></td>
            <td class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['dir'];?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
" target="new"><?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
</a>
              <input type="hidden" name="dir[]" value="<?php echo $_smarty_tpl->tpl_vars['sub']->value['dir'];?>
" /></td>
            <td><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sub']->value['model']==$_smarty_tpl->tpl_vars['m']->value['id']) {?><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
<?php }?><?php } ?></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/category/del/<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" class="act" onclick="return que_deletes()">删除</a></td>
             
            
          </tr>
                     
                <?php }?>
            <?php } ?>
          
          <?php } ?>
          <tbody>
            <tr>
              <td colspan="1"></td>
              <td colspan="8"><div><a href="###" onclick="addNew();" class="addtr">添加主导航</a></div></td>
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
          
                function que_deletes(){
                   var str = confirm("您确定要删除吗?");
                   if(str){
                      return true;
                   }else{
                      return false;
                   }
                    
                  }
          
          
          
		var row_count = 0;
		function addNew()
		{
			var table1 = $('#table_nav_list');
			var firstTr = table1.find('.nav_list_body');
			var row = $("<tr></tr>");
			var td1 = $('<td align="center"></td>');
			td1.append($('<input type="hidden" name="id[]" value="-1" /><input class="checkbox" value="" disabled="disabled" type="checkbox">'));
			var td2 = $('<td class="order"></td>');
			td2.append($('<input class="txt" size="2" name="sortid[]" value="1" type="text">'));
			var td3 = $('<td class="add"></td>');
			td3.append($('<input class="txt" size="15" name="title[]" value="" type="text"></div>'));	
			var td4 = $('<td class="link"></td>');
			td4.append($('<input name="dir[]" value=""  style="width:130px;" class="txt" type="text">'));
			var td5 = $('<td class="template"></td>');
			td5.append($('<select name="model[]" class="combo"><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</option><?php } ?></select>'));	
			var td6 = $('<td class="cancel"></td>');
			td6.append($('<a href="###" onclick="del(this);" class="addtr">取消</a>'));	
			
				
			row.append(td1);
			row.append(td2);
			row.append(td3);
			row.append(td4);
			row.append(td5);
			row.append(td6);
			
			table1.append(row);
			row_count++;
		
		}
		
		function addchild(obj,parentid)
		{
			var table = $(obj).parent().parent().parent();
			var row = $('<tr></tr>');
			var td1 = $('<td align="center"></td>');
			td1.append($('<input type="hidden" name="id[]" value="-1" /><input type="hidden" name="parentid[]" value="' + parentid +  '" /><input class="checkbox" value="" disabled="disabled" type="checkbox">'));
			var td2 = $('<td class="order"></td>');
			td2.append($('<div class="board"><input class="txt" size="2" name="sortid[]" value="1" type="text"></div>'));			
			var td3 = $('<td colspan="1"></td>');
			td3.append('<div class="board"><input name="title[]" value="" style="width:100px;" size="15" class="txt" type="text"></div>');
			var td4 = $('<td class="link"></td>');
			td4.append($('<input name="dir[]" value=""  style="width:130px;" class="txt" type="text">'));
			var td5 = $('<td class="template"></td>');
			td5.append($('<select name="model[]" class="combo"><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</option><?php } ?></select>'));	
			var td6 = $('<td class="cancel"></td>');
			td6.append($('<a href="###" onclick="del(this);" class="addtr">取消</a>'));	
		
			row.append(td1);
			row.append(td2);
			row.append(td3);
			row.append(td4);
			row.append(td5);
			row.append(td6);
			
			table.after(row);
		}
		
		
		function del(obj)
		{
			$(obj).parent().parent().remove();
		
		} 
	  </script> 
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
