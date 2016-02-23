<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   <meta http-equiv="x-ua-compatible" content="ie=7" />
   <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
   <link rel="shortcut icon" href="{$base_url}images/favicon.ico">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>长安财富资产管理有限公司</title>
   <meta name="description" content="" />
   <meta name="keywords" content="长安财富资产管理有限公司、长安资产、长安基金子公司、长安财富" />
   <link rel="icon" href="{$base_url}images/favicon.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="{$base_url}images/" type="image/x-icon" />
   <link href="{$base_url}changan/css/base.css" rel="stylesheet" type="text/css" />
   <link href="{$base_url}changan/css/style.css" rel="stylesheet" type="text/css" />
   <link href="{$base_url}changan/css/sy.css" rel="stylesheet" type="text/css" />
   <link href="{$base_url}changan/css/iehack.css" rel="stylesheet" type="text/css" />
   <script src="{$base_url}changan/js/jquery-1.4.2.min.js"></script>
   <script src="{$base_url}changan/js/dh.js"></script>
   <script>
       function check(){
         var user = document.getElementById('user').value;
         var passwd = document.getElementById('pass').value;
         if(user==''){
             alert("请输入用户名");
        }
         if(passwd==''){
             alert('请输入密码'); 
             
        }
         
    }
    
    
 //控制鼠标放在文字上显示全部  
$('a.divmatnrdesc').live('mouseover', function(e) {
   _text=$(this).text();
   _tooltip = "<div id='tooltipdiv'><font style='font-size:12px'> "+_text+"</font></div>"; 
      $("body").append(_tooltip); 
      $("#tooltipdiv").show();
   $("#tooltipdiv")
   .css({
   "top": (e.pageY+10) + "px",
   "left":  (e.pageX +10) + "px"
  }).show("fast");   
 });
 
 $('a.divmatnrdesc').live('mouseout', function(e) {
  $("#tooltipdiv").remove();
 });
 
 
 $('a.divmatnrdesc').live('mousemove', function(e) {
  $("#tooltipdiv")
  .css({
   "top": (e.pageY+10 ) + "px",
   "left":  (e.pageX+10)  + "px"
  }).show();   
 });
 
 
        //$(".rank3 .zd").css('background-color','red');//奇数行  
        //$("tr:odd").addClass("two");//偶数行   
        
      
</script>
   <style>
       
       
       #tooltipdiv {
            position: absolute;
            border: 1px solid #333;
            background: #f7f5d1;
            padding: 3px 3px 3px 3px;
            color: #333;
            display: none;
           }

      .divmatnrdesc{
            overflow:hidden;
            white-space:nowrap;
            text-overflow:ellipsis;
            width:200px;
            font-family: 宋体;
         }
         
      
         
       
   </style>
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

<div style="margin-top:18px;margin-left:21px;height: 222px;width:948px;border:1px solid gray; padding: 3px">
     <div style="margin-top:5px;float:left;">
     <script type=text/javascript>

	var pic_width=632; //图片宽度
	
	var pic_height=210; //图片高度
	
	var button_pos=5; //按扭位置 1左 2右 3上 4下
	
	var stop_time=7000; //图片停留时间(1000为1秒钟)
	
	var show_text=0; //是否显示文字标签 1显示 0不显示
	
	var txtcolor="000000"; //文字色
	
	var bgcolor="DDDDDD"; //背景色
	
	var imag=new Array();
	
	var link=new Array();
	
	var text=new Array();
	
		imag[1]="{$base_url}changan/images/yaoqing.jpg";
	
	link[1]="http://58.246.62.13:7001/system/video.html";
	
	text[1]="";
	

	imag[2]="{$base_url}changan/images/yaoqing.jpg";
	
	link[2]="http://58.246.59.67:7001/system/video.html";
	
	text[2]="";
	
	imag[3]="{$base_url}changan/images/yaoqing.jpg";
	
	link[3]="http://58.246.59.67:7001/system/video.html";
	
	text[3]="";
	
	imag[4]="{$base_url}changan/images/yaoqing.jpg";
	
	link[4]="http://58.246.59.67:7001/system/video.html";
	
	text[4]="标";
	
	imag[5]="{$base_url}changan/images/yaoqing.jpg";
	
	link[5]="http://58.246.59.67:7001/system/video.html";
	
	text[5]="";
	
	imag[6]="{$base_url}changan/images/yaoqing.jpg";
	
	link[6]="http://58.246.59.67:7001/system/video.html";
	
	text[6]="";
	
	
	
	//可编辑内容结束
	
	var swf_height=show_text==1?pic_height+20:pic_height;
	
	var pics="", links="", texts="";
	
	for(var i=1; i<imag.length; i++){
	
		pics=pics+("|"+imag[i]);
	
		links=links+("|"+link[i]);
	
		texts=texts+("|"+text[i]);
	
	}
	
	pics=pics.substring(1);
	
	links=links.substring(1);
	
	texts=texts.substring(1);
	
	document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
	
	document.write('<param name="movie" value="{$base_url}changan/images/focus.swf">');
	
	document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
	
	document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
	
	document.write('<embed WMODE="transparent" src="{$base_url}changan/images/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
	
	document.write('</object>');
        
        
        
        

        
      

</script> 
</div>     
      
     <div id="shouyes" style="background: url({$base_url}changan/images/denglu1.png);"> 
        <img src="{$base_url}changan/images/hudl.jpg" /><a href="{$base_url}register">立即注册</a>
       <!--<img src="{$base_url}changan/images/sys.jpg" style="margin-top:-13px;margin-left:-19px;">-->
        <form action="{$base_url}inlogin" method="post" id="forms">
             {if isset($show_error)}
          <script>alert('用户名或密码错误');window.location.href="{$base_url}";</script>
        {/if}   
           用户名：<input type="text" name="username" class="one" id="user"/><br/>
           密　码：<input type="password" name="password" id="pass"/><br/>
                 <input type="image"  class="dlss"  src="{$base_url}changan/images/dlss.jpg" onclick="check()"/> 
                 
         </form>
            <a href="{$base_url}wjmm" class="wjmm">忘记密码?</a> 
       </div>
       
        
        
       <div class="clear"></div>
     </div>
     <div class="rank2">
       <div class="rk2bt"> <img src="{$base_url}changan/images/zfx.jpg" class="bt" alt="" /> <a href="{$base_url}product"><img src="{$base_url}changan/images/more.jpg" class="more" alt="" /></a> </div>
       <div id="btn_l" class="btn"><img src="{$base_url}changan/images/ppre.jpg" alt="" /></div>
       <div class="wrap">
         <div class="cc"  style="width:1800px;">
          {foreach $products as $data}
           <div class="gdnr con">{$data.pic}
             <div class="gdwz">
               <h6>{$data.name}</h6>
               <p>资管计划期限：{$data.month}个月<br>
                 投资起始金额：{$data.money}万元<br>
                 预期年化收益：{$data.yuqi}%<br>
                 投资项目领域：{$data.area}<br></p>
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

			alert("请输入关键字")	

		}

		if($("#search").val().length<2)

		{

			alert("长度不少于2个字符")	

		}	

	});
        
        
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
     <div class="rank3">
       <table cellspacing="1" width="100%" border="1" cellpadding="2">
         <tr class="zd d" style="font-size:12px" height=38>
          <td width=220><span>产品名称</span></td>
          <td width=100><span>预期收益(年化)</span></td>
          <td width=100><span>产品期限</span></td>
          <td width=100><span>投资领域</span></td>
          <td width=110><span>起始资金</span></td>
          <td width=110><span>产品状态</span></td>
          <td width=110><span>管理公司</span></td>
          <td width=105><span>详情</span></td>
         </tr>
         {foreach $products as $data}
         <tr style="font-size:12px">
          <td><span>{$data.name}</span></td>
          <td><span>{$data.yuqi}%</span></td>
          <td><span>{$data.month}个月</span></td>
          <td><span>{$data.area}</span></td>
          <td><span>{$data.money}万元</span></td>
          <td><span>{$data.status}</span></td>
          <td><span>{$data.company}</span></td>
          <form action="{$base_url}product/gscpxqy" method="post">
          <input type="hidden" class="s2" name="id" value="{$data.id}" />
          <td><input type="image"  class="submit"  src="{$base_url}changan/images/hckxq.jpg" style="margin-top:10px;" /></td>
          </form>    
          <!--<td><span><a href="{$base_url}cpxq"><img src="{$base_url}changan/images/hckxq.jpg" alt="" /></a></td>-->
         </tr>
        {/foreach}
       </table>
     </div>
     <div class="rank4">
       <div class="lb1">
		<div class="lbbt"><span>&nbsp;成立公告</span> <img src="{$base_url}changan/images/more.jpg" alt="" />
		</div>
<div class="lbhot">
	<a href="#"><img src="{$base_url}changan/images/gd1.jpg" alt="" /></a>
	<!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
	<ul>
            {foreach $article as $data}
          {if $data.category eq 555}
             
            <li><a href="{$base_url}info/clgg/{$data.id}" class="divmatnrdesc" >{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span></li>
              
	  {/if}
            {/foreach}
           </ul>
</div>
	</div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;开放及相关公告</span> <a href="{$base_url}public/info/kfjxggg"><img src="{$base_url}changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"> <a href="{$base_url}info/kfjxggg"><img src="{$base_url}changan/images/gd2.jpg" alt="" /></a>
           <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
           
           <ul>

          {foreach $article as $data}
          {if $data.category eq 556}
            <li><a href="{$base_url}info/kfjxggg/{$data.id}" class="divmatnrdesc">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}

        </ul>
           
         </div>
       </div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;分配及兑付公告</span> <a href="{$base_url}public/info/fpjdfgg"><img src="{$base_url}changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"><a href="{$base_url}info/fpjdfgg"><img src="{$base_url}changan/images/gd3.jpg" alt="" /></a>

        <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
           
        <ul class="uullss">

          {foreach $article as $data}
          {if $data.category eq 554}
            <li><a href="{$base_url}info/fpjdfgg/{$data.id}" class="divmatnrdesc">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}

        </ul>
           
         </div>
       </div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;项目运作报告</span> <a href="{$base_url}public/info/xmyzbg"><img src="{$base_url}changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"> <a href="{$base_url}info/xmyzbg"><img src="{$base_url}changan/images/gd4.jpg" alt="" /></a>

        <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->

        <ul class="uullss">

          {foreach $article as $data}
          {if $data.category eq 557}
            <li><a href="{$base_url}info/xmyzbg/{$data.id}" class="divmatnrdesc">{$data.title}</a><span>{$data.created_at|date_format:'%Y-%m-%d'}</span> </li>
			{/if}
            {/foreach}

        </ul>
           
         </div>
       </div>
       <div class="clear"></div>
     </div>
     <div class="link"> <span>友情链接</span>
         <ul>{foreach $link as $data}<li style="float:left;margin-left: 30px;font-family: 宋体;"><a href="{$data.link}" target="_blank">{$data.name}</a></li>{/foreach}</ul>
       <div class="clear"></div>
     </div>
         <!--<div id="div23" style="width:100px;height:50px;margin-left:1000px;position: absolute;">
             <span class="span66" style="font-weight:bold;font-size: 20px;cursor:pointer;"></span><span class="span55" style="display:none;font-weight:bold;font-size: 20px;">+</span>
            <a target=blank href=http://wpa.qq.com/msgrd?V=1&Uin=123691873&Site=三生有幸网客服&Menu=yes style="margin-left:5px;position: relative;top:20px;width:10px;height:20px">
            <img border="0" SRC=http://wpa.qq.com/pa?p=1:123691873:2 alt="点击这里给我发消息"></a>
         </div>-->
     <!--</div>-->
     <!--<div class="dyleft" style="width:80px;height:60px;position:relative;left:22px;top:-193px;"> <img src="{$base_url}changan/images/kftp.jpg" alt="" /></div>
   </div>-->
{include file="changan/new_foot.tpl" name="footer"} 
  
</body>
   
<script>
   $('.span66').click(function(){
       $('#div23 a').hide();
       //$('.span55').show();
       $(this).hide();
    });
    
    $(function() { 
    $(window).scroll(function(){ 
	var top = $(window).scrollTop()+700; 
	var left= $(window).scrollLeft()+450; 
	$("#div23").css({ left:left + "px",top: top + "px" }); 
    }); 
});
</script>
</html>