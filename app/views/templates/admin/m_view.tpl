<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="{$base_url}css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}css/admin.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}datatable/css/jquery.dataTables.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="{$base_url}js/jquery-1.7.2.min.js?ver=2.1"></script>
<script type="text/javascript" language="javascript" src="{$base_url}datatable/js/jquery.dataTables.min.js"></script>
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
	background: url('{$base_url}images/ico.gif') repeat scroll 0% 0% transparent;
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
    <form name="formsearch" id="formsearch" action="{$base_url}admin/m/seach" method="post">
      <ul>
        {foreach $single as $s}
        <li class="current"><a href="{$base_url}admin/{$model_type}/{$s.id}">{$s.name} </a></li>
        {/foreach}
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
            {if isset($has_category)  && !empty($category)}
            <th width="80">#</th>
   
            {/if}
				
            {foreach $m_data as $m}
            {if $m.isnav} 
            <th align="left">{$m.name}</th>{/if}
            {/foreach}
            
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        {assign var="is_category" value=false}
        {foreach $model_data as $model}
        <tr>
          <td align="center" ><input class="checkbox" type="checkbox"></td>
          {if isset($has_category)}
          	{foreach $category as $ctg}
          	{if $model.category == $ctg.id}<td align="center">[<a href="{$base_url}{if $ctg.parentid > 0}{foreach $category as $sub_ctg}{if $sub_ctg.id == $ctg.parentid}{$sub_ctg.dir}/{/if}{/foreach}{/if}{$ctg.dir}" target="new">{$ctg.title}</a>]</td>{assign var="is_category" value=true}{/if}
          	{/foreach}
            {if $is_category eq false}
            <td align="center">无</td>
            {/if}
          {/if}
          
          {foreach $m_data as $m}
          {if $m.isnav}<td>{$model[$m.tablename]}</td>{/if}
          {/foreach}
          {foreach $single as $s}
          <td width="50"><a href="{$base_url}admin/{$model_type}/edit/{$s.tablename}/{$model.id}" title="编辑" class="edit"></a><a href="{$base_url}admin/{$model_type}/del/{$s.tablename}/{$model.id}"  title="删除本项" class="sdel"></a></td>
          {/foreach}
        </tr>
        {/foreach}
        <tbody>
          <tr>
            <td colspan="7"><div class="main_foot"> {foreach $single as $s}
                <button class="btn btn-primary" onClick='location.href = "{$base_url}admin/{$model_type}/add/{$s.id}"'>添加</button>
                <button class="btn btn-primary" onClick='location.href = "{$base_url}admin/{$model_type}/del/{$s.id}"'>删除</button>
                {/foreach} </div></td>
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
