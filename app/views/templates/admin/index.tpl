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
<!--[if lt IE 9]><script src="{$base_url}/js/html5.js"></script><![endif]-->

</head>
<body>
<header class="header">
  <div class="navbar">
    <h1 class="logo"><a href="{$base_url}admin" title="大前端---关注前端开发和wordpress主题的博客">Luser</a></h1>
    <ul class="nav">
      <li id="" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item"><a href="{$base_url}admin">后台首页</a></li>
      <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children "><a href="javascript:LSAC('admin/side_content','admin/category');">内容管理</a> </li>

      <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="javascript:void();">模块管理</a></li>
<li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category "><a href="{$base_url}admin/yewu">业务管理</a></li>
    </ul>
    <div class="screen-mini">
      <button data-type="screen-nav" class="btn btn-inverse screen-nav"><i class="icon-tasks icon-white"></i></button>
    </div>
    <div class="menu pull-right"> </div>
  </div>
  <div class="speedbar">
    <div class="pull-right"> 欢迎您 {$admin_username} <i class="icon-user icon12"></i> <a href="javascript:LSAC(1,'{$base_url}admin/content');">修改密码</a> <i class="icon-user icon12"></i> <a href="{$base_url}admin/logout">退出</a> </div>
    <div class="toptip"><strong class="text-success"></strong><a rel="external nofollow" href=""></a>  <a rel="external nofollow" href=""></a>  <a rel="external nofollow" href=""></a> <a rel="external nofollow" href=""></a><a rel="external nofollow" href=""></a><strong class="text-info"></strong></div>
  </div>
</header>
<div id="Scroll"><div id="leftMain"></div></div>
<iframe name="right" id="rightMain" frameborder="false" src="{$base_url}admin/home" scrolling="auto" style="border:none; margin-bottom:30px" width="100%" allowtransparency="true"></iframe>
<script type="text/javascript" src="{$base_url}js/jquery-1.7.2.min.js?ver=2.1"></script> 
<script type="text/javascript">

window.onload = function (){
	$("#leftMain").load("{$base_url}admin/side");
	$('#rightMain').height(800);
}
/*
$(document).ready(function() {
    $('.submenu li').click(function(){
		$('.submenu li').removeClass('selected');
		$(this).addClass('selected');
		});
});*/

function LSAC(menuUrl,targetUrl) { /* load sidemenu and  content */
	$("#leftMain").load("{$base_url}" + menuUrl);
	$('.nav li').removeClass('current-menu-item');	
	$("#rightMain").attr('src', "{$base_url}"+ targetUrl);

	//$('#rightMain').height(800);
	
}

function CC(obj,targetUrl) { /* change content */

	$('.submenu li').removeClass('selected');
	$(obj).parent('li').addClass('selected');

	
	$('.nav li').removeClass('current-menu-item');	
	$("#rightMain").attr('src', targetUrl);
	 
	//$("#middle_main").contents().find("#main").height()
	//$('#rightMain').height(1200);
	//alert($('#rightMain').contents().find('#article').height());

}


</script>
</body>
</html>
