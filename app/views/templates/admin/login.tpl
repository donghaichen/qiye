<!DOCTYPE html>
<html>
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Luser - 简洁、直观、强悍、移动设备优先的前端开发框架，让web开发更迅速、简单。">
<meta name="keywords" content="Luser Framework Admin panel">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
<title>{$title}</title>
<link href="{$base_url}css/reset.css" media="all" rel="stylesheet" type="text/css" />
<link href="{$base_url}css/buttons.css" media="all" rel="stylesheet" type="text/css" />
<link href="{$base_url}js/iealert/style.css" media="all" rel="stylesheet" type="text/css" />
<style>
.header {
	text-shadow: 0px 1px 0px #FFF;
	border-bottom: 1px solid #E5E5E5;
	min-width: 1000px;
	box-sizing: border-box;
	text-shadow: 0px 1px 0px #FFF;
}
.header h2 {
	padding-left: 40px;
}
.header a {
	font-size: 18px;
	color: #333;
	text-decoration: none;
}
.header a:hover {
	color: #4183C4;
}
.container {
	width: 980px;
	margin-right: auto;
	margin-left: auto;
}
.auth-form {
	width: 400px;
	margin: 60px auto;
}
.auth-form-header {
	position: relative;
	padding: 10px 20px;
	margin: 0px;
	color: #FFF;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
	background-color: #829AA8;
	border: 1px solid #768995;
	border-radius: 3px 3px 0px 0px;
	box-sizing: border-box;
}
.auth-form-header h1 {
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 16px;
}
.auth-form-body {
	padding: 20px;
	font-size: 14px;
	background-color: #FFF;
	border-right: 1px solid #D8DEE2;
	border-width: 0px 1px 1px;
	border-style: none solid solid;
	border-color: -moz-use-text-color #D8DEE2 #D8DEE2;
	-moz-border-top-colors: none;
	-moz-border-right-colors: none;
	-moz-border-bottom-colors: none;
	-moz-border-left-colors: none;
	border-image: none;
	border-radius: 0px 0px 3px 3px;
	box-sizing: border-box;
}
.auth-form-body .input-block {
	margin-top: 5px;
	margin-bottom: 15px;
}
.footer {
	border-top: 1px solid #E5E5E5;
	position: relative;
	margin-top: 40px;
	padding-top: 40px;
	padding-bottom: 40px;
	font-size: 12px;
	line-height: 1.5;
	color: #777;
	border-top: 1px solid #EEE;
}
.footer ul li {
	display: inline;
	margin-right: 10px;
}
.logo_icon {
	margin-left: 110px;
}
</style>
<script type="text/javascript" src="{$base_url}js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="{$base_url}js/iealert.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$("body").iealert();
	
    /*$('.submenu li').click(function(){
		$('.submenu li').removeClass('selected');
		$(this).addClass('selected');
		});*/
});
</script>
</head>
<body>
<div class="header">
  <div class="container clearfix">
    <h2><a href="javascript:void();">Luser Admin Panel</a></h2>
  </div>
</div>
<div class="content">
  <div id="login" class="auth-form">
    <div class="auth-form-header">
      <h1>登录</h1>
    </div>
    <div class="auth-form-body">
      <form accept-charset="UTF-8" action="{$base_url}admin/login" method="post">
        <label for="login_field"> 用户名 或 邮箱 </label>
        <input type="text" name="u" class="input-block" id="user"/>
        <label for="password"  >密码</label>
        <input type="password" name="p" class="input-block" />
        <input type="submit" class="button button-rounded button-action" value="登录"/>
      </form>
    </div>
  </div>
</div>
<div class="container" >
  <div class="footer">
    <ul style="width:400px;margin:0px auto;">
      <li>© 2014 Meetsh, Inc.</li>
      <li><a href="javascript:void();">Meetsh</a></li>
      <li><a href="javascript:void();">SEO</a></li>
      <li><a href="javascript:void();">eGirlAsm</a></li>
      <li><a href="javascript:void();">APP</a></li>
    </ul>
    <!-- <a href="javascript:void()" class="logo_icon" ><img src="{$base_url}images/LOLGO.png" /></a> --> 
    
  </div>
</div>
</body>
</html>
