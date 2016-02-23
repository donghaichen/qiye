<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="{$base_url}css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}css/admin.css" type="text/css" media="all">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<style>

.txt {
	width: 40px;
	padding: 0px !important;
	vertical-align: middle;
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
	background: url('{$base_url}images/bg_repno.gif') no-repeat scroll -240px -550px transparent;
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
      <li class="current"><a href="{$base_url}admin/categorymanager">分类模型管理 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <form id="nav_set" method="post" action="{$base_url}admin/categorymanager/add" name="nav_set">
        <table id="table_nav_list" class="content_list" width="100%"  cellspacing="0" >
          <thead>
            <tr>
              <th  width="50"></th>
              <th align="left" width="100">显示顺序</th>
              <th align="left" width="250">名称/备注</th>
              <th align="left" width="250">表名/字段</th>
              <th align="left"  width="300">类型</th>
              <th align="center" width="100">必填字段?</th>
              <th align="center"  width="100">列表显示?</th>
              <th align="center"  width="100">是否可编辑?</th>
              <th align="center"  width="200">是否加入搜索?</th>
              <th align="left">操作</th>
            </tr>
          </thead>
          <tbody class="nav_list_body">
          
          {foreach $model as $data}
          {if $data.parent == 0}
          <tr  onmouseover="this.style.backgroundColor='#f8f8f8'" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="{$data.id}" />
            <input type="hidden" name="parent[]" value="{$data.parent}" />
            <input type="hidden" name="size[]" value="{$sub.size}" />
            <input type="hidden" name="type[]" value="{$data.type}" />
            <input type="hidden" name="field[]" value="{$data.tablename}" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><input class="txt" size="2" name="sortid[]" value="{$data.sortid}" type="text"></td>
            <td class="add"><div>
                <input class="txt" size="15" name="name[]" value="{$data.name}" type="text">
                <a href="###" onclick='addchild(this,{$data.id},"{$data.tablename}")' class="addchildboard">添加字段</a></div></td>
            <td class="link">{$data.tablename}
              <input type="hidden" name="table[]" value="{$data.tablename}" /></td>
            <td>{foreach $model_type as $type_data}{if $data.type == $type_data.id}{$type_data.name}{/if}{/foreach}</td>
            <td><input type="hidden" name="Required[]" value="{$data.required}" /></td>
            <td><input type="hidden" name="isNav[]" value="{$data.isnav}" /></td>
            <td><input type="hidden" name="isEditable[]" value="{$data.iseditable}" /></td>
            <td><input type="hidden" name="isSearchable[]" value="{$data.issearchable}" /></td>
            <td><a href="{$base_url}admin/categorymanager/del/{$data.id}" class="act">删除</a></td>
          </tr>
          {/if} 
          
          <!--  查询当前ID下有没有 子菜单 --> 
          {foreach $model as $sub}
          {if $sub.parent == $data.id}
          <tr  onmouseover="this.style.backgroundColor='#f8f8f8'" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="{$sub.id}" />
            <input type="hidden" name="parent[]" value="{$sub.parent}" />
            <input type="hidden" name="size[]" value="{$sub.size}" />
            <input type="hidden" name="type[]" value="{$sub.type}" />
            <input type="hidden" name="field[]" value="{$sub.tablename}" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><div class="board"><input class="txt" size="2" name="sortid[]" value="{$sub.sortid}" type="text"></div></td>
            <td  colspan="1"><div class="board">
                <input name="name[]" value="{$sub.name}" style="width:100px;" size="15" class="txt" type="text">
              </div></td>
            <td class="link"><div class="board">{$sub.tablename}
                <input type="hidden" name="table[]" value="{$sub.tablename}" />
              </div></td>
            <td>{foreach $model_type as $type_data}{if $sub.type == $type_data.id}{$type_data.name}{/if}{/foreach}</td>
            <td align="center"><input type="hidden" name="Required[]" value="{$sub.required}" />
              {if $sub.required > 0}<span class="support">√</span>{else}<span class="not">×</span>{/if}</td>
            <td align="center"><input type="hidden" name="isNav[]" value="{$sub.isnav}" />
              {if $sub.isnav > 0}<span class="support">√</span>{else}<span class="not">×</span>{/if}</td>
            <td align="center"><input type="hidden" name="isEditable[]" value="{$sub.iseditable}" />
              {if $sub.iseditable > 0}<span class="support">√</span>{else}<span class="not">×</span>{/if}</td>
            <td align="center"><input type="hidden" name="isSearchable[]" value="{$sub.issearchable}" />
              {if $sub.issearchable > 0}<span class="support">√</span>{else}<span class="not">×</span>{/if}</td>
            <td><a href="{$base_url}admin/categorymanager/del/{$sub.id}" class="act">删除</a></td>
          </tr>
          {/if}
          {/foreach}
          
          {/foreach}
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
      <script type="text/javascript" src="{$base_url}js/jquery-1.7.2.min.js?ver=2.1"></script> 
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
			td5.append($('<select name="type[]" class="scombo">{foreach $model_type as $type_data}<option {if $type_data.id == 0} selected{/if}  value="{$type_data.id}">{$type_data.name}</option>{/foreach}</select><input name="size[]" value="11" class="txt" type="text"/> '));	
			
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
</html>