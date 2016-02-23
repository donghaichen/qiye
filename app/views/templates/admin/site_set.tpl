<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>{$title}</title>
<link rel="stylesheet" id="style-css" href="{$base_url}css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}css/admin.css" type="text/css" media="all">
<meta name="keywords" content="后台, 后台管理, meetsh后台管理系统">
<meta name="description" content="meetsh是一家专注网站开发,微信公众平台开发的公司.">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<style>
.tab_content_wrap {
	padding: 25px;
}
.tab_menu ul li {
	cursor: pointer;
}
#main_setting td {
	padding: 10px;
}
</style>
<script type="text/javascript" src="{$base_url}js/jquery-1.7.2.min.js?ver=2.1"></script>
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a onClick="setTab(this,0);">基本设置 </a></li>
      <li><a  onClick="setTab(this,1);">系统变量 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <h2>基本设置</h2>
      <form action="{$base_url}admin/configs" method="post">
      <table id="main_setting">
      {foreach $site_set as $data}
        <tr>
          <td>新浪微博链接:</td>
          <td><input type="text"  value="{$data.sinaweibo}" name="sina" style="width:300px"/></td>
        </tr>
        <tr><td></td><td ><input type="submit" value="提交" /></td></tr>
        {/foreach}
      </table>
      </form>
    </div>
    <div class="tab_content" style="display:none">
      <h2>系统变量</h2>
    </div>
  </div>
</div>
</body>
<script>
 function setTab(p,i){
	 $('.tab_content').css('display','none');
	 $('.tab_content').eq(i).css('display','');
	 $('.tab_menu ul li').removeClass('current');
	 $(p).parent('li').addClass('current');
 }
</script>
</html>