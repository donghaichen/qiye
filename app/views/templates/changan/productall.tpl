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
  <div class="banner1"> <img src="{$base_url}changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop"> <span>新品推荐</span>
    <div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="cpyx.html">公司产品</a> > <a href="xptj.html">新品推荐</a></div>
    <div class="clear"></div>
  </div>
  <div  class="gscp">
    <div class="xptj">
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
    <div class="rank3cy">
      <table>
        <tr class="zd d" height=38 style="font-size:12px">
          <td width=137><span>产品名称</span></td>
          <td width=140><span>预期收益(年化)</span></td>
          <td width=136><span>产品期限</span></td>
          <td width=100><span>投资领域</span></td>
          <td width=130><span>起始资金</span></td>
          <td width=110><span>产品状态</span></td>
          <td width=110><span>管理公司</span></td>
          <td><span>更多了解</span></td>
        </tr>
       {foreach $product as $data}
        <tr style="font-size:12px">
          <td><span>{$data.name}</span></td>
          <td><span>{$data.yuqi}%</span></td>
          <td><span>{$data.month}个月</span></td>
          <td><span>{$data.area}</span></td>
          <td><span>{$data.money}万元</span></td>
          <td><span>{$data.status}</span></td>
          <td><span>{$data.company}</span></td>
          <td><span><a href="{$base_url}product/cpxqss/{$data.id}"><img src="{$base_url}changan/images/hckxq.jpg" alt="" /></a></span></td>
        </tr>
		{/foreach}
      </table>
    </div>
    <div class="paging"><span>第1页/共34页</span> <a href="">首页</a> <a href="">上一页</a> <a href="">下一页</a> <a href="">尾页</a></div>
  </div>
  {include file="changan/new_foot.tpl" name="footer"}  
</div>
</body>
</html>