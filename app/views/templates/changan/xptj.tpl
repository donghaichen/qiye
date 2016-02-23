<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8" />
<link rel="shortcut icon" href="{$base_url}images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>长安财富资产管理有限公司</title>
<meta name="description" content="" />
<meta name="keywords" content="长安财富资产管理有限公司、长安资产、长安基金子公司、长安财富" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href="{$base_url}changan/css/base.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{$base_url}changan/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{$base_url}changan/css/iehack.css" rel="stylesheet" type="text/css" media="all"/>
<script src="{$base_url}changan/js/jquery-1.4.2.min.js"></script>
<script src="{$base_url}changan/js/dh.js"></script>

<link rel="stylesheet" id="style-css" href="{$base_url}changan/css/jPages.css" type="text/css" media="all">
<script type="text/javascript" language="javascript" src="{$base_url}changan/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" language="javascript" src="{$base_url}changan/js/jPages.js"></script>




<script>
    //新品推荐点击轮换
    $(document).ready(function(){
            var leftsize = -600;
            $("#btn_l").click(function(){
            if(leftsize > -298){
            leftsize = leftsize - 298;
            $(".cc").animate({ "left":leftsize });
            }
            else if(leftsize = -298) {
            leftsize = leftsize - 298;
            $(".cc").animate({ "left":leftsize });
            }
            else { $(".cc").css('left','0px'); }
            });
            $("#btn_r").click(function(){
            if(leftsize < -298){
            leftsize = leftsize + 298;
            $(".cc").animate({ "left":leftsize });
            }
            else if(leftsize = -298) {
            leftsize = leftsize + 298;
            $(".cc").animate({ "left":leftsize });
            }
            else{ $(".cc").css('left','-494px'); }
            });
}); 
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
  <div class="banner1"> <img src="{$base_url}changan/images/banner2.jpg" alt="" /> </div>
  <div class="nrtop"> <span>新品推荐</span>
    <div class="posi">您现在的位置：<a href="{$base_url}">首页</a> > <a href="{$base_url}product">公司产品</a> > <a href="{$base_url}product/xptj">新品推荐</a></div>
    <div class="clear"></div>
  </div>
  <div  class="gscp">
    <div class="wrap">
         <div class="rank2">
       <div class="rk2bt"> <img src="{$base_url}changan/images/zfx.jpg" class="bt" alt="" /> <a href="#"><img src="{$base_url}changan/images/more.jpg" class="more" alt="" /></a> </div>
       <div id="btn_l" class="btn"><img src="{$base_url}changan/images/ppre.jpg" alt="" /></div>
       <div class="wrap">
         <div class="cc"  style="width:1800px;">
          {foreach $product as $data}
           <div class="gdnr con">{$data.pic}
             <div class="gdwz">
               <h6>{$data.name}</h6>
               <p>资管计划期限：{$data.month}个月<br>
                 投资起始金额：{$data.money}万元<br>
                 预期年化收益：{$data.yuqi}%<br>
                 </p>
                 <form action="{$base_url}product/gscpxqy" method="post">
                     <input type="hidden" class="s2" name="id" value="{$data.id}" />
                     
                     <input type="image"  class="submit"  src="{$base_url}changan/images/ckxq.jpg" />
                 </form>  
                 
             </div>
           </div>
           {/foreach}
           
         </div>
       </div>
       <div id="btn_r" class="btn"><img src="{$base_url}changan/images/pnext.jpg" alt="" /></div>
       <script>

	$(function(){

		if($("#search").val()=="")

		{

			alert("请输入关键字");	

		}

		if($("#search").val().length<2)

		{

			alert("长度不少于2个字符");	

		}	

	})

</script>
       <div class="search" id="tj">
         <form action="{$base_url}product/search" method="post">
           <input type="text" name="keywords" id="search" style="color:#b3b3b3" value="输入关键词" onfocus="if(this.value=='输入关键词'){ this.value='' };this.style.color='black';" onblur="if(this.value==''||this.value=='输入关键词'){ this.value='输入关键词';this.style.color='#b3b3b3'; }"/>
           <input type="image" name="submit" id="submit"  src="{$base_url}changan/images/searchbot.jpg" />
         </form>
         
      <!--<input type="submit" value="搜索" />-->
    </form>
       </div>
       <div class="clear"></div>
     </div>
       </div>

    <div class="rank3cy">
      <table cellspacing="1" width="100%" border="1" cellpadding="2">
          <thead>
        <tr class="zd d" height=38 style="font-size:12px;font-family: 宋体;">
          <td width=220><span>产品名称</span></td>
          <td width=100><span>预期收益(年化)</span></td>
          <td width=100><span>产品期限</span></td>
          <td width=100><span>投资领域</span></td>
          <td width=110><span>起始资金</span></td>
          <td width=110><span>产品状态</span></td>
          <td width=110><span>管理公司</span></td>
          <td><span width="105">更多了解</span></td>
        </tr>
          </thead>
          <tbody id="content_table">
       {foreach $product as $data}
        <tr style="font-size:12px;font-family: 宋体;">
          <td><span>{$data.name}</span></td>
          <td><span>{$data.yuqi}%</span></td>
          <td><span>{$data.month}个月</span></td>
          <td><span>{$data.area}</span></td>
          <td><span>{$data.money}万元</span></td>
          <td><span>{$data.status}</span></td>
          <td><span>{$data.company}</span></td>
          <form action="{$base_url}product/gscpxqy" method="post">
          <input type="hidden" class="s2" name="id" value="{$data.id}" />
          <td><input type="image"  class="submit"  src="{$base_url}changan/images/hckxq.jpg" style="margin-top:10px;margin-left:15px;margin-right:15px;"/></td>
          </form>    
          <!--<td><span><a href="{$base_url}product/gscpxqy"><img src="{$base_url}changan/images/hckxq.jpg" alt="" /></a></span></td>-->
        </tr>
		{/foreach}
         </tbody>
      </table>
    </div>
    
      <div class="holder"></div>

      
      <!--<div class="paging"><span>第1页/共34页</span> <a href="">首页</a> <a href="">上一页</a> <a href="">下一页</a> <a href="">尾页</a></div>-->
    
   
  </div>
  {include file="changan/new_foot.tpl" name="footer"} 
</div>
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
</body>
</html>