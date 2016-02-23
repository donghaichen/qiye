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
<script>
   $(function(){
      $('#uu li').click(function(){
          $(this).addClass('on1');
      })
   })
</script>


<!--[if IE 6]>

<script type="text/javascript" src="js/png.js" ></script>

<script type="text/javascript">

DD_belatedPNG.fix('*');

</script>

<![endif]-->

</head>

<body>
<div class="cont">
  {include file="changan/header.tpl" name="header"}
  <div class="dycont">
    <div class="dyleft"> <img src="{$base_url}changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>服务中心 <span> About us</span></div>
        </h2>
        <ul id="uu">
          <li><a href="{$base_url}service-center/ourservice">我们的服务</a></li>
          
          
          <li><a href="{$base_url}service-center/kefu">在线客服</a></li>
          <li style="border:0px;"><a href="{$base_url}service-center/zcfw">注册服务</a></li>
	  
        </ul>
      </div>
      {foreach $products as $data}
      <div class="zxj"> <img src="{$base_url}changan/images/gdt.jpg" class="slt2" alt="" style="width:70px;height:95px;"/>
        <div class="zxjy"><span>{$data.name}<br>
          </span>
          <form action="{$base_url}product/gscpxqy" method="post" style="margin-top: 20px;">
          <input type="hidden" class="s2" name="id" value="{$data.id}" />
          <input type="image"  class="submit"  src="{$base_url}changan/images/xaniu.jpg" />
          </form>    
        </div>
      </div>
      {/foreach}
    </div>
    <div class="dyright">
      <div class="rposi"><span class="span1">我们的服务</span>
        <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> > <a href="{$base_url}service-center/ourservice">服务中心</a> > <a href="{$base_url}service-center/ourservice">我们的服务</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
	  {foreach $pages as $data}
            <p><h4>{$data.title}</h4></p>
            <span>{$data.content}</span>
          {/foreach}
        <div class="lb2" style="margin-top:20px;">
         
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
{include file="changan/new_foot.tpl" name="footer"} 
</div>
</body>
</html>