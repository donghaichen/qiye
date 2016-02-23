<?php /* Smarty version Smarty-3.1.18, created on 2014-12-09 09:17:33
         compiled from "/home/uu170528/app/views/templates/changan/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198697578354782b7eef4715-92627333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5220a41e3e1c14014e317604796457cf0ff9d254' => 
    array (
      0 => '/home/uu170528/app/views/templates/changan/index.tpl',
      1 => 1418087852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198697578354782b7eef4715-92627333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54782b7f114f26_45622859',
  'variables' => 
  array (
    'base_url' => 0,
    'show_error' => 0,
    'products' => 0,
    'data' => 0,
    'article' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54782b7f114f26_45622859')) {function content_54782b7f114f26_45622859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/uu170528/vendor/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   <meta http-equiv="x-ua-compatible" content="ie=7" />
   <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
   <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/favicon.ico">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>长安财富资产管理有限公司</title>
   <meta name="description" content="" />
   <meta name="keywords" content="长安财富资产管理有限公司、长安资产、长安基金子公司、长安财富" />
   <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/favicon.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/" type="image/x-icon" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/base.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/style.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/sy.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/css/iehack.css" rel="stylesheet" type="text/css" />
   <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.4.2.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/dh.js"></script>
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

<?php echo $_smarty_tpl->getSubTemplate ("changan/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"header"), 0);?>


<div style="margin-top:18px;margin-left:21px;height: 222px;width:948px;border:1px solid gray; padding: 3px">
 
     <div style="margin-top:5px;float:left;">
     <script type=text/javascript>

	var pic_width=632; //图片宽度
	
	var pic_height=210; //图片高度
	
	var button_pos=4; //按扭位置 1左 2右 3上 4下
	
	var stop_time=7000; //图片停留时间(1000为1秒钟)
	
	var show_text=0; //是否显示文字标签 1显示 0不显示
	
	var txtcolor="000000"; //文字色
	
	var bgcolor="DDDDDD"; //背景色
	
	var imag=new Array();
	
	var link=new Array();
	
	var text=new Array();
	
	imag[1]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/1.jpg";
	
	link[1]="#";
	
	text[1]="";
	
	imag[2]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/2.jpg";
	
	link[2]="#";
	
	text[2]="";
	
	imag[3]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/3.jpg";
	
	link[3]="#";
	
	text[3]="标";
	
	imag[4]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/4.jpg";
	
	link[4]="#";
	
	text[4]="";
	
	
	
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
	
	document.write('<param name="movie" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/focus.swf">');
	
	document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
	
	document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
	
	document.write('<embed WMODE="transparent" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
	
	document.write('</object>');
        
        
        
        

        
      

</script> 
</div>     
      
     <div id="shouyes" style="background: url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/denglu1.png);"> 
        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hudl.jpg" /><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">立即注册</a>
       <!--<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/sys.jpg" style="margin-top:-13px;margin-left:-19px;">-->
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inlogin" method="post" id="forms">
             <?php if (isset($_smarty_tpl->tpl_vars['show_error']->value)) {?>
          <script>alert('用户名或密码错误');window.location.href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";</script>
        <?php }?>   
           用户名：<input type="text" name="username" class="one" id="user"/><br/>
           密　码：<input type="password" name="password" id="pass"/><br/>
                 <input type="image"  class="dlss"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/dlss.jpg" onclick="check()"/> 
                 
         </form>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
wjmm" class="wjmm">忘记密码?</a> 
       </div>
       
        
        
       <div class="clear"></div>
     </div>
     <div class="rank2">
       <div class="rk2bt"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/zfx.jpg" class="bt" alt="" /> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" class="more" alt="" /></a> </div>
       <div id="btn_l" class="btn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ppre.jpg" alt="" /></div>
       <div class="wrap">
         <div class="cc"  style="width:1800px;">
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
           <div class="gdnr con"><?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>

             <div class="gdwz">
               <h6><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h6>
               <p>资管计划期限：<?php echo $_smarty_tpl->tpl_vars['data']->value['month'];?>
个月<br>
                 投资起始金额：<?php echo $_smarty_tpl->tpl_vars['data']->value['money'];?>
万元<br>
                 预期年化收益：<?php echo $_smarty_tpl->tpl_vars['data']->value['yuqi'];?>
%<br>
                 投资项目领域：<?php echo $_smarty_tpl->tpl_vars['data']->value['area'];?>
<br></p>
                 <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/gscpxqy" method="post">
                     <input type="hidden" class="s2" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                     
                     <input type="image"  class="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" />
                 </form>  
                 
             </div>
           </div>
           <?php } ?>
           
         </div>
       </div>
       <div id="btn_r" class="btn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/pnext.jpg" alt="" /></div>
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
         <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/search" method="post">
           <input type="text" name="keywords" id="search" style="color:#b3b3b3" value="输入关键词" onfocus="if(this.value=='输入关键词'){ this.value='' };this.style.color='black';" onblur="if(this.value==''||this.value=='输入关键词'){ this.value='输入关键词';this.style.color='#b3b3b3'; }"/>
           <input type="image" name="submit" id="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/searchbot.jpg" />
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
         <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
         <tr style="font-size:12px">
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
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/gscpxqy" method="post">
          <input type="hidden" class="s2" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
          <td><input type="image"  class="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hckxq.jpg" style="margin-top:10px;" /></td>
          </form>    
          <!--<td><span><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cpxq"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hckxq.jpg" alt="" /></a></td>-->
         </tr>
        <?php } ?>
       </table>
     </div>
     <div class="rank4">
       <div class="lb1">
		<div class="lbbt"><span>&nbsp;成立公告</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" />
		</div>
<div class="lbhot">
	<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gd1.jpg" alt="" /></a>
	<!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
	<ul>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==555) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/clgg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="divmatnrdesc" ><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span></li>
	  <?php }?>
            <?php } ?>
           </ul>
</div>
	</div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;开放及相关公告</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/info/kfjxggg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/kfjxggg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gd2.jpg" alt="" /></a>
           <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
           
           <ul>

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==556) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/kfjxggg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="divmatnrdesc"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>

        </ul>
           
         </div>
       </div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;分配及兑付公告</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/info/fpjdfgg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/fpjdfgg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gd3.jpg" alt="" /></a>

        <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->
           
        <ul class="uullss">

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==554) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/fpjdfgg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="divmatnrdesc"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>

        </ul>
           
         </div>
       </div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;项目运作报告</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/info/xmyzbg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /></a> </div>
         <div class="lbhot"> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/xmyzbg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gd4.jpg" alt="" /></a>

        <!--<div class="hotnr">
		<h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
		<p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
	</div>-->

        <ul class="uullss">

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==557) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/xmyzbg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="divmatnrdesc"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>

        </ul>
           
         </div>
       </div>
       <div class="clear"></div>
     </div>
     <div class="link"> <span>友情链接</span>
         <ul><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><li style="float:left;margin-left: 30px;font-family: 宋体;"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a></li><?php } ?></ul>
       <div class="clear"></div>
     </div>
         <div id="div23" style="width:100px;height:50px;margin-left:1000px;position: absolute;">
             <span class="span66" style="font-weight:bold;font-size: 20px;cursor:pointer;"></span><span class="span55" style="display:none;font-weight:bold;font-size: 20px;">+</span>
            <a target=blank href=http://wpa.qq.com/msgrd?V=1&Uin=123691873&Site=三生有幸网客服&Menu=yes style="margin-left:5px;position: relative;top:20px;width:10px;height:20px">
            <img border="0" SRC=http://wpa.qq.com/pa?p=1:123691873:2 alt="点击这里给我发消息"></a>
         </div>
     <!--</div>-->
     <!--<div class="dyleft" style="width:80px;height:60px;position:relative;left:22px;top:-193px;"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/kftp.jpg" alt="" /></div>
   </div>-->
<?php echo $_smarty_tpl->getSubTemplate ("changan/new_foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
  
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
</html><?php }} ?>
