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
<link href="{$base_url}changan/css/reservation.css" rel="stylesheet" type="text/css" />
<script src="{$base_url}changan/js/jquery-1.4.2.min.js"></script>
<script src="{$base_url}changan/js/dh.js"></script>
<script src="{$base_url}changan/js/reservation.js"></script>
<script src="{$base_url}changan/js/product_filter.js"></script>


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
  <div class="banner1"> <img src="{$base_url}changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop2"> <span>
    
    </span>
    <!--<div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="cpyx.html">公司产品</a> > <a href="cpyx.html">产品优选</a></div>-->
    
    <div class="nrtop">
        <span>产品详情</span> <div style="text-align: right;color: #b2b2b2;margin-bottom: -5px;">您现在的位置：<a href="{$base_url}" style="text-align: right;color: #b2b2b2;">首页</a> > <a href="{$base_url}product" style="text-align: right;color: #b2b2b2;">公司产品</a> > <a href="{$base_url}product/cpyx" style="text-align: right;color: #b2b2b2;">产品优选</a></div>  
        
	<div class="clear"></div>
</div>
    
    <div class="clear"></div>
  </div>
  
  <script>
    var filter_data={$filter};
  </script>    
  
    <div  class="xpxq">
{foreach $products as $data}
<div class="xpbt">{$data.name}</div>
{/foreach}

<script type="text/javascript">  
$(document).ready(function(){
	$('td:nth-child(even)').addClass('alt')
});
</script>
 {foreach $products as $data}
<table>
	<tr>
		<td width=103><span>产品名称</span></td>
		<td width=319><span>{$data.name}</span></td>
		<td width=76><span>管理公司</span></td>
		<td width=103><span>{$data.company}</span></td>
		<td width=108><span>产品期限</span></td>
		<td width=240><span>{$data.month}个月</span></td>
	</tr>

		<tr>
		<td width=103><span>投资领域</span></td>
		<td width=319><span>{$data.area}</span></td>
		<td width=76><span>起始资金</span></td>
		<td width=103><span>{$data.money}万元</span></td>
		<td width=108><span>产品状态</span></td>
		<td width=240><span>{$data.status}</span></td>
	</tr>
<tr height=88>
	<td height=88><span>预期年化收益率</span></td>
	<td colspan=5><span>{$data.yuqi}%</span></td>
</tr>

</table>
{/foreach}
{foreach $products as $data}
<div class="xpxqnr">
	<div class="xpxbt">详细内容</div>
{$data.content}
</div>
{/foreach}


<!--<div class="xgjs">
	<div class="xgjsbt"><span>在正发行的产品</span></div>
		<div class="xgjsnr">
			
<ul>
{foreach $product as $data}
<li><img src="{$base_url}changan/images/gdt.jpg" class="slt1" alt="" />
<div class="xc">
<h2>{$data.name}</h2>
<p>资管计划期限：{$data.month}（详
见内容）<br>
资管领域：{$data.area}<br>
投资起始金额：{$data.money}万元<br>
预期年化收益：{$data.yuqi}%<br>
<form action="{$base_url}product/gscpxqy" method="post">
    <input type="hidden" class="s2" name="id" value="{$data.id}" />
    <input type="image"  class="submit"  src="{$base_url}changan/images/ckxq.jpg" />
</form>  
</p>
</div>
<div class="clear"></div>
</li>
{/foreach}					
<div class="clear"></div>
</ul>

			
		</div>

</div>-->
</div>







</div>



      
{include file="changan/new_foot.tpl" name="footer"} 
</div>
  </body>