<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="shortcut icon" href="favicon.ico">
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
<div class="cont">
 {include file="changan/header.tpl" name="header"}
  <div class="banner1"> <img src="{$base_url}changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop2"> <span>
    <form action="">
      <input type="text" class="s2"/>
      <input type="image" name="submit" class="submit"  src="{$base_url}changan/images/s2.jpg" />
    </form>
    </span>
    <div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="cpyx.html">公司产品</a> > <a href="cpyx.html">产品优选</a></div>
    <div class="clear"></div>
  </div>
  <div class="xxk">
    <div class="xxkbt"><img src="{$base_url}changan/images/cpyx.png" alt="" /></div>
  </div>
  <script>
    var filter_data={$filter};
  </script>
  <div class="xxknr">
    <ul>
      <li>
        <span class="b">预期收益：</span>
        <span><a href="javascript:void(0)" data-key="yuqi" data-value='{}'>全部</a></span>
        <span><a href="javascript:void(0)" data-key="yuqi" data-value='{ "max":8}'>8%以下</a></span>
        <span><a href="javascript:void(0)" data-key="yuqi" data-value='{ "min":8, "max":10}'>8（含）～10%（不含）</a></span>
        <span><a href="javascript:void(0)" data-key="yuqi" data-value='{ "min":10, "max":12}'>10（含）～12%（不含）</a></span>
        <span><a href="javascript:void(0)" data-key="yuqi" data-value='{ "min":12}'>12%（含）以上</a></span>
      </li>
      <li>
        <span class="b">产品期限：</span>
        <span><a href="javascript:void(0)" data-key="month" data-value='{}'>全部</a></span>
        <span><a href="javascript:void(0)" data-key="month" data-value='{ "max":12}'>12个月以内</a></span>
        <span><a href="javascript:void(0)" data-key="month" data-value='{ "min":12, "max":24}'>12个月（含）～24个月（不含）</a></span>
        <span><a href="javascript:void(0)" data-key="month" data-value='{ "min":24}'>24个月（含）以上</a></span>
      </li>
      <li>
        <span class="b">投资领域：</span>
        <span><a href="javascript:void(0)" data-key="area" data-value='{}'>全部</a></span>
        {foreach from=$filter_data.area key=key item=item}
          <span><a href="javascript:void(0)" data-key="area" data-value='{ "value":"{$key|@md5}"}'>{$key}</a></span>
        {/foreach}
      </li>
      <li>
        <span class="b">起始资金：</span>
        <span><a href="javascript:void(0)" data-key="money" data-value='{}'>全部</a></span>
        <span><a href="javascript:void(0)" data-key="money" data-value='{ "max":100}'>100万以下</a></span>
        <span><a href="javascript:void(0)" data-key="money" data-value='{ "min":100, "max":300}'>100万（含）～300万（不含）</a></span>
        <span><a href="javascript:void(0)" data-key="money" data-value='{ "min":300}'>300万（含）以上</a></span>
      </li>
      <li>
        <span class="b">产品状态：</span>
        <span><a href="javascript:void(0)" data-key="status" data-value='{}'>全部</a></span>
        {foreach from=$filter_data.status key=key item=item}
          <span><a href="javascript:void(0)" data-key="status" data-value='{ "value":"{$key|@md5}"}'>{$key}</a></span>
        {/foreach}
      </li>
      <li class="zh">
        <span class="b">管理公司：</span>
        <span><a href="javascript:void(0)" data-key="company" data-value='{}'>全部</a></span>
        {foreach from=$filter_data.company key=key item=item}
          <span><a href="javascript:void(0)" data-key="company" data-value='{ "value":"{$key|@md5}"}'>{$key}</a></span>
        {/foreach}

      </li>
    </ul>
  </div>
  <div class="ssjg">
    <p>共有<span>{$pCount}</span>支符合条件的产品</p>
  </div>
  <div class="rank3cy" style="margin-left:20px;">
    <table  cellspacing="1" width="95%" border="1" cellpadding="2">
      <tr class="zd d" height=38 style="font-size:12px">
        <td width=220><span>产品名称</span></td>
        <td width=100><span>预期收益(年化)</span></td>
        <td width=100><span>产品期限</span></td>
        <td width=100><span>投资领域</span></td>
        <td width=110><span>起始资金</span></td>
        <td width=110><span>产品状态</span></td>
        <td width=110><span>管理公司</span></td>
        <td width=105><span>预约</span></td>
      </tr>
      <tbody id="content_table">
      {foreach $product as $data}
      <tr>
        <td><span>{$data.name}</span></td>
        <td><span>{$data.yuqi}%</span></td>
        <td><span>{$data.month}个月</span></td>
        <td><span>{$data.area}</span></td>
        <td><span>{$data.money}万元</span></td>
        <td><span>{$data.status}</span></td>
        <td><span>{$data.company}</span></td>
        <td><span><img class="reservation-button" data-name="{$data.name}" src="{$base_url}changan/images/zxyy.jpg" alt="" /></span></td>
      </tr>
      {/foreach}
      </tbody>
    </table>
  </div>
    <div class="holder"></div>
  <div id="reservation">
    <div>
      <a class="close" href="javascript:void(0)">关闭</a>
      <form action="{$base_url}product/reservation" method="post">
        <input type="hidden" id="reservation_name" name="reservation_name" value="" />
        <table>
          <tr><td class="caption">用户名：</td><td><input type="text" id="reservation_username" name="reservation_username" /></td></tr>
          <tr><td class="caption">预约金额：</td><td><input type="text" id="reservation_price" name="reservation_price" /></td></tr>
          <tr><td class="caption">电话：</td><td><input type="text" id="reservation_telephone" name="reservation_telephone" /></td></tr>
          <tr><td class="caption">邮箱：</td><td><input type="text" id="reservation_mail" name="reservation_mail" /></td></tr>
        </table>
        <input type="image" src="{$base_url}changan/images/reservationbutton.png" style="margin-top:10px;margin-left:15px;margin-right:15px;"/>
      </form>
    </div>
  </div>
{include file="changan/footer.tpl" name="footer"} 
</div>
</body>
<script type="text/javascript">
$(function(){
   $('div.holder').jPages({
       containerID:"content_table",
        first: '首页',      
        last: '尾页',     
        previous: '上页',     
        next : '下页',
        perPage : 2, //每页显示数据为多少行             
        startPage: 1, //起始页 
        startRange : 2, //开始页码为2个 
        midRange : 3, //最多显示几个页码页码,其余用..代替             e
        ndRange: 2, //结束页码为2个
        keyBrowse : true

       
        });
});
</script>
</html>