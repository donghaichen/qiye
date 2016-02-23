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
  {foreach $article as $data}
    <div class="dyleft"> <img src="{$base_url}changan/images/kftp.jpg" alt="" />
      <div class="zcdh">
        <h2>
          <div>{$data.title} <span> {$data.en_title}</span></div>
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
    </div>
    <div class="dyright">
    {foreach $article as $data}
      <div class="rposi"><span  class="span1">{$data.title}</span>
        <div class="posi">您现在的位置：<a href="{$base_url}">首页</a>
        {foreach $category as $cd}
              {if $cd.dir eq $active}
              {foreach $category as $sub}
                  {if $cd.parentid == $sub.id} <i>></i>
                  <a href="{$base_url}{$sub.dir}">{$sub.title}</a>
                  >
                  <a href="{$base_url}{$sub.dir}/{$cd.dir}">{$cd.title}</a>
                  {/if}
              {/foreach}
              {/if}
          {/foreach}
          
          
  </div>
        <div class="clear"></div>
      </div>
      <div class="rnr"> {$data.content} {/foreach}
      </div>
    </div>
    <div class="clear"></div>
    {/foreach}
  </div>
{include file="changan/new_foot.tpl" name="footer"}  
</div>
</body>
</html>