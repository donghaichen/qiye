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
</style>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a href="{$base_url}admin/category">栏目列表 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <form id="nav_set" method="post" action="{$base_url}admin/category" name="nav_set">
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
          
          {foreach $category as $data}
			{if $data.parentid == 0}
          <tr  onmouseover="this.style.backgroundColor='yellow" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="{$data.id}" />
            <input type="hidden" name="parentid[]" value="{$data.parentid}" />
            <input type="hidden" name="model[]" value="{$data.model}" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><input class="txt" size="2" name="sortid[]" value="{$data.sortid}" type="text"></td>
            <td class="add"><div>
                <input class="txt" size="15" name="title[]" value="{$data.title}" type="text">
                <a href="###" onclick="addrowdirect=1;addchild(this,{$data.id})" class="addchildboard">添加二级导航</a></div></td>
            <td class="link"><a href="{$base_url}{$data.dir}" target="new">{$data.dir}</a>
              <input type="hidden" name="dir[]" value="{$data.dir}" /></td>
            <td>{foreach $model as $m}{if $data.model == $m.id}{$m.name}{/if}{/foreach}</td>
            <td><a href="{$base_url}admin/category/del/{$data.id}" class="act" onclick="return que_deletes()">删除</a></td>
           
          </tr>
          {/if}
          
          <!--  查询当前ID下有没有 子菜单 -->
          	{foreach $category as $sub}
            	{if $sub.parentid == $data.id}
          <tr  onmouseover="this.style.backgroundColor='yellow'" onmouseout="this.style.backgroundColor=''">
            <input type="hidden" name="id[]" value="{$sub.id}" />
            <input type="hidden" name="parentid[]" value="{$sub.parentid}" />
            <input type="hidden" name="model[]" value="{$sub.model}" />
            <td align="center" ><input class="checkbox" value="" disabled="disabled" type="checkbox"></td>
            <td class="order"><div class="board"><input class="txt" size="2" name="sortid[]" value="{$sub.sortid}" type="text"></div></td>
            <td  colspan="1"><div class="board">
                <input name="title[]" value="{$sub.title}" style="width:100px;" size="15" class="txt" type="text">
              </div></td>
            <td class="link"><a href="{$base_url}{$data.dir}/{$sub.dir}" target="new">{$sub.dir}</a>
              <input type="hidden" name="dir[]" value="{$sub.dir}" /></td>
            <td>{foreach $model as $m}{if $sub.model == $m.id}{$m.name}{/if}{/foreach}</td>
            <td><a href="{$base_url}admin/category/del/{$sub.id}" class="act" onclick="return que_deletes()">删除</a></td>
             
            
          </tr>
                     
                {/if}
            {/foreach}
          
          {/foreach}
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
      <script type="text/javascript" src="{$base_url}js/jquery-1.7.2.min.js?ver=2.1"></script> 
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
			td5.append($('<select name="model[]" class="combo">{foreach $model as $m}<option value="{$m.id}">{$m.name}</option>{/foreach}</select>'));	
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
			td5.append($('<select name="model[]" class="combo">{foreach $model as $m}<option value="{$m.id}">{$m.name}</option>{/foreach}</select>'));	
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
</html>