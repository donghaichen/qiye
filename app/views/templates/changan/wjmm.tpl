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

</head>
<style>
   .ylogin .formes{
     margin-top:120px;
   } 
</style>
<body>
<div class="cont"> {include file="changan/header.tpl" name="header"}
  <div class="login">
    <div class="zlogin"><img src="{$base_url}changan/images/zlt.jpg" alt="" /></div>
    <div class="ylogin">
      
      <div class="clear"></div>
      <form  action="{$base_url}czmm" method="post" class="formes">
        <table>
          <tr>
            <td width=100><span>用户　名：</span></td>
            <td width=200><input name="username" type="text" maxlength=10 /></td>
          </tr>
          <tr>
            <td><span>注册邮箱：</span></td>
            <td><input name="email" type="text" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="image" id="dl" src="{$base_url}changan/images/dl.jpg" /></td>
            <td></td>
          </tr>
        </table>
      </form>
    </div>
<div class="clear"></div>
    
  </div>
 {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
</html>