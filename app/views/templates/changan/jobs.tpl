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
  <div class="banner1"> <img src="{$base_url}changan/images/bannercpyc.jpg" alt="" /> </div>
  <div class="nrtop"> <span>诚聘英才</span>
    <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> > <a href="{$base_url}jobs">诚聘英才</a></div>
    <div class="clear"></div>
  </div>
  <div  class="nynr">
    <table>
      <tr class="zd d">
        <td style="padding-left:30px;" width=170><span>职位名称</span></td>
        <td width=130><span>招聘人数</span></td>
        <td width=130><span>学历</span></td>
        <td width=140><span>工作地点</span></td>
        <td width=140><span>工作年限</span></td>
        <td width=130><span>发布时间</span></td>
        <td width=100><span>更多</span></td>
      </tr>
     {foreach $article as $data}
      <tr>
        <td style="padding-left:30px;"><span>{$data.name}</span></td>
        <td><span>{$data.count}</span></td>
        <td><span>{$data.education}</span></td>
        <td><span>{$data.place}</span></td>
        <td><span>{$data.years}</span></td>
        <td><span>{$data.created_at|date_format:'%Y-%m-%d'}</span></td>
        <td><span><a href="{$base_url}jobs/{$data.id}"><img src="{$base_url}changan/images/hckxq.jpg" alt="" /></a></span></td>
      </tr>
    {/foreach}
    </table>
  </div>
  {include file="changan/new_foot.tpl" name="footer"}  </div>
</body>
</html>