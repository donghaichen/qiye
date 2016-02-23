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
<div class="cont"> {include file="changan/header.tpl" name="header"}
  <div class="dycont">
    <div class="dyleft"> <img src="{$base_url}changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>长安学堂 <span> Study</span></div>
        </h2>
        <ul>
         {section name=menu loop=$single}
          {if $single[menu].dir eq $active}
          <li class="on1"><a href="{$base_url}{$page}/{$single[menu].dir}">{$single[menu].title}</a></li>
        
          {else}
          <li><a href="{$base_url}{$page}/{$single[menu].dir}">{$single[menu].title}</a></li>
           
          {/if}
          {/section}
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
    <style>	

	.lb3{
		margin-bottom: 15px;
		}

		</style>
    <div class="dyright">
      <div class="rposi"><span class="span1">长安学堂</span>
        <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> > <a href="{$base_url}study">长安学堂</a></div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span>理财园地</span> <a href="{$base_url}study/lcyd"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
          {foreach $article as $data}
          {if $data.category eq 580}
            <li><a href="{$base_url}study/lcyd/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>行业资讯</span> <a href="{$base_url}study/hyzx"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       {foreach $article as $data}
          {if $data.category eq 583}
            <li><a href="{$base_url}study/hyzx/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>政策法规</span> <a href="{$base_url}study/zcfg"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       {foreach $article as $data}
          {if $data.category eq 582}
            <li><a href="{$base_url}study/zcfg/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}
          </ul>
        </div>
        <div class="clear"></div>
        <div class="d1bt"><span>反洗钱专栏</span> <a href="{$base_url}study/fxqzl"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul>
       {foreach $article as $data}
          {if $data.category eq 581}
            <li><a href="{$base_url}study/fxqzl/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}
          </ul>
        </div>
        
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
 {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
</html>