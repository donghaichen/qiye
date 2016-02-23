<?php /* Smarty version Smarty-3.1.18, created on 2014-12-10 16:57:24
         compiled from "/home/uu169418/app/views/templates/changan/cpyx.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20793665615440cc9b68ef66-59946574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e74d1ffba1a7772119a990b23fefdd3390d364' => 
    array (
      0 => '/home/uu169418/app/views/templates/changan/cpyx.tpl',
      1 => 1418094156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20793665615440cc9b68ef66-59946574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440cc9b721087_03679997',
  'variables' => 
  array (
    'base_url' => 0,
    'filter' => 0,
    'filter_data' => 0,
    'key' => 0,
    'pCount' => 0,
    'product' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440cc9b721087_03679997')) {function content_5440cc9b721087_03679997($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/iehack.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/reservation.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.4.2.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/dh.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/reservation.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/product_filter.js"></script>

<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/jPages.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jPages.js"></script>


<!--[if IE 6]>

<script type="text/javascript" src="js/png.js" ></script>

<script type="text/javascript">

DD_belatedPNG.fix('*');

</script>

<![endif]-->

</head>

<body>
<div class="cont">
 <?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>

  <div class="banner1"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop2"> <span>
    <form action="">
      <input type="text" class="s2"/>
      <input type="image" name="submit" class="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/s2.jpg" />
    </form>
    </span>
    <div class="posi">您现在的位置：<a href="index.html">首页</a> > <a href="cpyx.html">公司产品</a> > <a href="cpyx.html">产品优选</a></div>
    <div class="clear"></div>
  </div>
  <div class="xxk">
    <div class="xxkbt"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/cpyx.png" alt="" /></div>
  </div>
  <script>
    var filter_data=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
;
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
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_data']->value['area']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
          <span><a href="javascript:void(0)" data-key="area" data-value='{ "value":"<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
"}'><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></span>
        <?php } ?>
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
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_data']->value['status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
          <span><a href="javascript:void(0)" data-key="status" data-value='{ "value":"<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
"}'><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></span>
        <?php } ?>
      </li>
      <li class="zh">
        <span class="b">管理公司：</span>
        <span><a href="javascript:void(0)" data-key="company" data-value='{}'>全部</a></span>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_data']->value['company']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
          <span><a href="javascript:void(0)" data-key="company" data-value='{ "value":"<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
"}'><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></span>
        <?php } ?>

      </li>
    </ul>
  </div>
  <div class="ssjg">
    <p>共有<span><?php echo $_smarty_tpl->tpl_vars['pCount']->value;?>
</span>支符合条件的产品</p>
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
      <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
      <tr>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['yuqi'];?>
%</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['month'];?>
个月</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['area'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['money'];?>
万元</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['status'];?>
</span></td>
        <td><span><?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
</span></td>
        <td><span><img class="reservation-button" data-name="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/zxyy.jpg" alt="" /></span></td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
    <div class="holder"></div>
  <div id="reservation">
    <div>
      <a class="close" href="javascript:void(0)">关闭</a>
      <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/reservation" method="post">
        <input type="hidden" id="reservation_name" name="reservation_name" value="" />
        <table>
          <tr><td class="caption">用户名：</td><td><input type="text" id="reservation_username" name="reservation_username" /></td></tr>
          <tr><td class="caption">预约金额：</td><td><input type="text" id="reservation_price" name="reservation_price" /></td></tr>
          <tr><td class="caption">电话：</td><td><input type="text" id="reservation_telephone" name="reservation_telephone" /></td></tr>
          <tr><td class="caption">邮箱：</td><td><input type="text" id="reservation_mail" name="reservation_mail" /></td></tr>
        </table>
        <input type="image" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/reservationbutton.png" style="margin-top:10px;margin-left:15px;margin-right:15px;"/>
      </form>
    </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("changan/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
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
</html><?php }} ?>
