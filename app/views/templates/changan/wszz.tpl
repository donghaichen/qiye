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
<script src="{$base_url}changan/js/jquery-1.4.2.min.js"></script>
<script src="{$base_url}changan/js/dh.js"></script>

<script>
   
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
          <div>服务中心 <span> Service</span></div>
        </h2>
	
        <ul class="on1">
          <li><a href="{$base_url}service-center/ourservice">我们的服务</a></li>
          
         <li><a href="http://58.246.62.13:7001/">网上自助</a></li>
          <li><a href="http://wpa.qq.com/msgrd?V=1&Uin=123691873&Site=三生有幸网客服&Menu=yes">在线客服</a></li>
          <li style="border:0px;"><a href="{$base_url}service-center/register">注册服务</a></li>
	  
        </ul>
	
      </div>
      {foreach $products as $data}
      <div class="zxj"> <img src="{$base_url}changan/images/slt2.jpg" class="slt2" alt="" />
        <div class="zxjy"><span>{$data.name}<br>
          预期收益：{$data.yuqi}%</span>
          <form action="{$base_url}product/gscpxqy" method="post" style="margin-top: 20px;">
          <input type="hidden" class="s2" name="id" value="{$data.id}" />
          <input type="image"  class="submit"  src="{$base_url}changan/images/xaniu.jpg" />
          </form>    
        </div>
      </div>
      {/foreach}
    </div>
    <div class="dyright">
      <div class="rposi"><span class="span1">网上自助</span>
        <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> > <a href="{$base_url}service-center/ourservice">服务中心</a> > <a href="{$base_url}service-center/wszz">网上自助</a></div>
        <div class="clear"></div>
      </div>
      <!--<div class="rnr">
        <p><span style="color:#e77918;">上海财通资产管理有限公司</span>（下称“财通资产”）是中国证监会批准的专门从 事特定客户资产管理业务及中国证监会许可的其他业务的专业化资产管理公司，于2013年6月3日正式成立。财通资产是财通基金管理有限公司（下称“财通基 金”）的控子公司，位于上海陆家嘴金融区。财通基金是中国证监会依法批复设立的基金管理</p>

<p>海财通资产管理有限公司（下称“财通资产”）是中国证监会批准的专门从事特定客户资产管理业务及中国证监会许可的其他业务的专业化资产管理公司， 于2013年6月3日正式成立。财通资产是财通基金管理有限公司（下称“财通基金”）的公司，位于上海陆家嘴金融区。财通基金是中国证监会依法批复设立的 基金管理公</p>

<p>上海财通资产管理有限公司（下称“财通资产”）是中国证监会批准的专门从事特定客户资产管理业务及中国证监会许可的其他业务的专业化资产管理公 司，于2013年6月3日正式成立。财通资产是财通基金管理有限公司（下称“财通基金”）的控股子公司，位于上海陆家嘴金融区。财通基金是中国证监会依法 批复设立的基金管理公司。</p>

<p>海财通资产管理有限公司（下称“财通资产”）是中国证监会批准的专门从事特定客户资产管理业务及中国证监会许可的其他业务的专业化资产管理公司， 于2013年6月3日正式成立。财通资产是财通基金管理有限公司（下称“财通基金”）的控股子公司，位于上海陆家嘴金融区。财通基金是中国证监会依法批复 设立的基金管理公司。</p>
        
       
        
        
       
        <div class="lb2" style="margin-top:20px;">
         
        </div>
      </div>-->
    </div>
    <div class="clear"></div>
  </div>
{include file="changan/footer.tpl" name="footer"} 
</div>
</body>
</html>