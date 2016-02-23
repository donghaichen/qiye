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

<body>
<div class="cont">
  {include file="changan/header.tpl" name="header"}
  <div class="dycont">
    <div class="dyleft"> <img src="{$base_url}changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>关于我们 <span> About us</span></div>
        </h2>
        <ul>
          <li class="on1"><a href="#">理财园地</a></li>
          <li class="z"><a href="">理财知识</a></li>
          <li class="z"><a href="">案例分享</a></li>
          <li class="z"><a href="">理财问答</a></li>
          <li><a href="{$base_url}study/hyzx">行业资讯</a></li>
          <li><a href="#">政策法规</a></li>
          <li style="border:0px;"><a href="#">反洗钱专栏</a></li>
        </ul>
      </div>
      <div class="zxj"> <img src="{$base_url}changan/images/slt2.jpg" class="slt2" alt="" />
        <div class="zxjy"><span>福晟·钱隆<br>
          学府四期</span><a href="#"><img src="{$base_url}changan/images/xaniu.jpg" alt="" /></a></div>
      </div>
    </div>
    <div class="dyright">
      <div class="rposi"><span class="span1">理财园地</span>
        <div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="caxt.tpl">长安学堂</a> > <a href="#">理财园地</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span>理财知识</span> <a href="#"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
          {foreach $lczs as $data}
            <li><a href="{$base_url}lczs/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
            {/foreach}
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>案例分享</span> <a href="#"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb2" style="margin-top:20px;">
        {foreach $alfx as $data}
          <div class="lb2l">
            <div class="lb2bt"><a href="#">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span>
              <div class="clear"></div>
            </div>
            <div class="lb2jj">{$data.content}</div>
          </div>

   {/foreach}
        </div>
        <div class="d1bt"><span>理财问答</span> <a href="#"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb2" style="margin-top:20px;">
         {foreach $lcwd as $data}
          <div class="lb2l">
            <div class="lb2bt"><a href="#">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span>
              <div class="clear"></div>
            </div>
            <div class="lb2jj">{$data.content}</div>
          </div>

{/foreach}
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
{include file="changan/new_foot.tpl" name="footer"}  
</div>
</body>
</html>