<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" id="style-css" href="{$base_url}css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}css/admin.css" type="text/css" media="all">
<script language="javascript" type="text/javascript" src="{$base_url}js/datejs/WdatePicker.js"></script>
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
  <form name="formsearch" id="formsearch" action="{$base_url}/admin/m/seach" method="post">
    <ul>
      {foreach $single as $s}
      <li class="current"><a href="{$base_url}admin/{$model_type}/add/{$s.id}">添加</a></li>
      {/foreach}
    </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab_content_wrap">
    <div class="tab_content">
  </form>
  <form name="formview" id="formview" action="{$base_url}admin/{$model_type}/add" method="post"   enctype="multipart/form-data">
    {foreach $single as $s}
    <input type="hidden" name="model" value="{$s.id}" />
    {/foreach}
    <table class="content_list" width="100%">
      <tbody>
      {if isset($has_category) && !empty($category)}
      <tr>
        <td width="100">选择栏目</td>
        <td colspan="4"><select name="category" id="category" class="stype" validtip="required">
            
              
          {foreach $category as $data}
              {if $data.parentid eq 0}
              
            <option value="{$data.id}">{$data.title}</option>
            
              {/if}
     
              {if $data.parentid > 0}
              
            <option value="{$data.id}">&nbsp;&nbsp;-{$data.title}</option>
            
              {/if}
        
          {/foreach}
          
            
            
          </select></td>
      </tr>
      {/if}
      {foreach $m_data as $m}
      <tr>
        <td>{$m.name}{if $m.required }<font color="red">*</font>{/if}</td>
        {if $m.type eq 1}
        <td colspan="4"><input name="{$m.tablename}" id="title"  size="30" class="number input-text" validtip="required" value="" type="text"></td>
        {elseif $m.type eq 2}
        <td colspan="4"><input name="{$m.tablename}" id="title"  size="60"  class="validate input-text" validtip="required" value="" type="text"></td>
        {elseif $m.type eq 3}
        <td colspan="4"><textarea id="text" name="{$m.tablename}" style="width:600px;height:130px;"></textarea></td>
        {elseif $m.type eq 4}
        <td colspan="4"><textarea class="editor" name="{$m.tablename}" style="width:700px;height:300px;"></textarea></td>
        {elseif $m.type eq 5}
        <td colspan="4"><input class="Wdate" type="text" name="{$m.tablename}" onClick="WdatePicker({ skin:'whyGreen',doubleCalendar:true,dateFmt:'yyyy-MM-dd HH:mm:ss' })"></td>
        {elseif $m.type eq 6}
        <td colspan="4"><div><img src="" alt="请上传" /></div><input type="file" name="{$m.tablename}" value="{$content[$m.tablename]}" ></td>
        {elseif $m.type eq 7}
        <td colspan="4"><div><select name="{$m.tablename}"><option value="组合框">组合框</option></select></td>
        {/if} </tr>
      {/foreach}
      <tr>
        <td></td>
        <td colspan="4"><input type="submit" class="btn btn-primary" value="提交"  /></td>
      </tr>
    </table>
  </form>
</div>
</div>
</div>
<script charset="utf-8" src="{$base_url}kindeditor-4.1.10/kindeditor.js"></script> 
<script charset="utf-8" src="{$base_url}kindeditor-4.1.10/lang/zh_CN.js"></script> 
<script>
// ASP
KindEditor.ready(function(K) {
        K.create('.editor', {
                uploadJson : '../../../kindeditor-4.1.10/php/upload_json.php',
                fileManagerJson : '../../../kindeditor-4.1.10/php/file_manager_json.php',
                allowFileManager : true,
				width : "100%", //编辑器的宽度为70%
				height : "700px", //编辑器的高度为100px
				filterMode : false, //不会过滤HTML代码
				resizeMode : 1 //编辑器只能调整高度

        });
});
</script>
</body>
</html>