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
.xpxqnr {
	margin-bottom: 20px;
}
</style>
</head>

<body>



	  {assign var="r_title" value=""}


	  {foreach $category as $cd}
      {if $cd.dir eq $active}
      {foreach $category as $sub}
      {if $cd.parentid == $sub.id} {assign var="r_title" value=$cd.title}
      {/if}
      {/foreach}
      {/if}
      {/foreach}

<div class="cont"> {include file="changan/header.tpl" name="header"}
  <div class="banner1"> <img src="{$base_url}changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop"> <span>{$r_title}</span>
    <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> 
    {foreach $category as $cd}
      {if $cd.dir eq $active}
      {foreach $category as $sub}
      {if $cd.parentid == $sub.id} <i>></i> <a href="{$base_url}{$sub.dir}">{$sub.title}</a> > <a href="{$base_url}{$sub.dir}/{$cd.dir}">{$cd.title}</a> {assign var="r_title" value=$cd.title}
      {/if}
      {/foreach}
      {/if}
      {/foreach} </div>
    <div class="clear"></div>
  </div>
  <div  class="xpxq"> {foreach $article as $data}
    <div class="xpbt">{$data.title}</div>
    <div class="xpxqnr"> {$data.content} </div>
    {/foreach}
    <!--<div class="xgjs">
      <div class="xgjsbt"><span>在正发行的产品</span></div>
      <div class="xgjsnr">
        <ul>
          <li><img src="{$base_url}changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="{$base_url}changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <li><img src="{$base_url}changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="{$base_url}changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <li><img src="{$base_url}changan/images/gdt.jpg" class="slt1" alt="" />
            <div class="xc">
              <h2>福晟·钱隆学府四期</h2>
              <p>资管计划期限：24个月（详
                
                见内容）<br>
                资管计划规模：不超过8亿元<br>
                投资起始金额：100万元<br>
                预期年化收益：11%-11.8%<br>
                <a href="#"><img src="{$base_url}changan/images/ckxq.jpg" alt="" /></a> </p>
            </div>
            <div class="clear"></div>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>-->
  </div>
  {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
</html>