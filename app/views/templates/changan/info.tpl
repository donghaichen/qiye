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


<link rel="stylesheet" id="style-css" href="{$base_url}changan/css/jPages.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="{$base_url}changan/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" language="javascript" src="{$base_url}changan/js/jPages.js"></script>

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
          <div>信息披露<span> Information</span></div>
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
      <div class="zxj"> {$data.pic}
        <div class="zxjy"><span style="overflow: hidden;font-size: 12px;">{$data.name}</span>
          <form action="{$base_url}product/gscpxqy" method="post" style="margin-top: 10px;">
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
        {assign var="r_title" value=""}
    <div class="dyright">
      <div class="rposi"><span class="span1">信息披露</span>
        <div class="posi">您现在的位置：<a href="{$base_url}">首页</a>
        {foreach $category as $cd}
              {if $cd.dir eq $active}
              {foreach $category as $sub}
                  {if $cd.parentid == $sub.id} <i>></i>
                  <a href="{$base_url}{$sub.dir}">{$sub.title}</a>
                  >
                  <a href="{$base_url}{$sub.dir}/{$cd.dir}">{$cd.title}</a>
                  {assign var="r_title" value=$cd.title}
                  {/if}
              {/foreach}
              {/if}
          {/foreach}
          
          
  </div>
        <div class="clear"></div>
      </div>
      <div class="rnr">
        <div class="d1bt"><span>{$r_title}</span> <a href="#"><img src="{$base_url}changan/images/more.png" alt="" /></a>
          <div class="clear"></div>
        </div>
        <div class="lb3">
          <ul id="content_table">
          {foreach $article as $data}

            <li><a href="{$base_url}{$page}/{$active}/{$data.id}">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
	
            {/foreach}
          </ul>
        </div>
        <div class="clear"></div>
        <div class="holder"></div>
      </div>
    </div>
  
    <div class="clear"></div>
  </div>
  {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
<script type="text/javascript">
/*$(function(){
   $('div.holder').jPages({
       containerID:"content_table",
        first: '首页',      
        last: '尾页',     
        previous: '上页',     
        next : '下页',
        perPage : 10, //每页显示数据为多少行             
        startPage: 1, //起始页 
        startRange : 2, //开始页码为2个 
        midRange : 3, //最多显示几个页码页码,其余用..代替             e
        ndRange: 2, //结束页码为2个
        keyBrowse : true

       
        });
});*/
</script>
</html>