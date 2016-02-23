<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="shortcut icon" href="{$base_url}images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>长安资产</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href="{$base_url}changan/css/base.css" rel="stylesheet" type="text/css" />
<link href="{$base_url}changan/css/style.css" rel="stylesheet" type="text/css" />
<link href="{$base_url}changan/css/iehack.css" rel="stylesheet" type="text/css" />
<script src="{$base_url}changan/js/jquery-1.4.2.min.js"></script>
<script src="{$base_url}changan/js/dh.js"></script>
<!--[if IE 6]>

<script type="text/javascript" src="js/png.js" ></script>

<script type="text/javascript">

DD_belatedPNG.fix('*');

</script>

<![endif]-->
<style>
.logged {
	text-align: center;
	margin-top: 40px;
}
</style>
</head>

<body>
<div class="cont"> {include file="changan/header.tpl" name="header"}
  <div class="login">
    <div class="zlogin"><img src="{$base_url}changan/images/zlt.jpg" alt="" /></div>
    <div class="ylogin">
      <div class="zcts">如果你没有账号，即可在此<a href="{$base_url}register">注册</a></div>
      <div class="clear"></div>
      {if isset($auth)}
      <p class="logged">您已经登陆过,无需再次登录! <a href="{$base_url}">点此</a> 返回首页</p>
      {else}
      <form  action="{$base_url}login" method="post">
        <table>
        {if isset($show_error)}
          <p class="show_error">{if $show_error eq 1}密码错误{elseif $show_error eq 2}不存在的用户{elseif $show_error eq 3}验证码错误{/if}</p>
        {/if}
          <tr>
            <td width=100><span>用户　名：</span></td>
            <td width=200><input name="username" type="text" maxlength=10 /></td>
            <td width=114></td>
          </tr>
          <tr>
            <td><span>确认密码：</span></td>
            <td><input name="password" type="password" /></td>
            <td><a href="#">忘记密码</a></td>
          </tr>
          <tr>
            <td><span>验证　码：</span></td>
            <td class="yzm"><input name="vcode" type="text" />
              <img src="{$base_url}captcha/1" alt="" /></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td class="mrx"><input type="checkbox" name="cache" value='1'/>
              <span>7天内记住我的用户名和密码</span></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="image" id="dl" src="{$base_url}changan/images/dl.jpg" /></td>
            <td></td>
          </tr>
        </table>
      </form>
      
      {/if} 
     <span style="color:red;position: relative;top:20px;">对不起,您需要登录后才能查看我司产品及相关信息!请点击注册按钮免费注册成为特定客户。</span>
    </div>
      
    <div class="clear"></div>
    
  </div>
  {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
</html>