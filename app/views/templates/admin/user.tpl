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
      
        <li class="current"><a href="{$base_url}admin/model/">用户管理</a></li>
     
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
        
        {foreach $user_data as $user}
        <tr>
         <td align="center" ><input class="checkbox" type="checkbox"></td>
          <td>{$user.id}</td>
          <td>{$user.user_type}</td>
          <td>{$user.username}</td>
          <td>{$user.certificate_type}</td>
          <td>{$user.certificate_number}</td>
          <td>{$user.address}</td>
          <td>{$user.email}</td>
          <td><!--<form accept-charset="UTF-8" action="{$base_url}admin/delete_show" method="post">
                  <input type="hidden" name="id" value="{$user.id}" />
                <input type="submit"  value="编辑" />
              </form>-->
              <form accept-charset="UTF-8" action="{$base_url}admin/delete_show" method="post" style="position: relative;top:10px;">
                  <input type="hidden" name="id" value="{$user.id}" />
                <input type="submit" value="删除" />
              </form>
            <!--<button class="btn btn-primary" onClick='location.href = "{$base_url}admin/delete_user"'>删除</button>-->
              <!--<form action="{$base_url}admin/delete_user" method="post">
                 <input type="submit" value="删除" class="btn btn-primary" /><input type="hidden" name="id" value="{$user.id}" />
              </form>-->
          </td>
        </tr>
        {/foreach}
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
