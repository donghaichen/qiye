<?php /* Smarty version Smarty-3.1.18, created on 2014-10-17 14:00:40
         compiled from "D:\WWW\changan\app\views\templates\changan\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186565440b08807e351-13037962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc5f281d68ae832ec30e0f40c6416bbe8fd892d' => 
    array (
      0 => 'D:\\WWW\\changan\\app\\views\\templates\\changan\\index.tpl',
      1 => 1411587313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186565440b08807e351-13037962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'article' => 0,
    'data' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5440b0883081c3_70295666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440b0883081c3_70295666')) {function content_5440b0883081c3_70295666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\WWW\\changan\\vendor\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
   <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/jquery-1.4.2.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/js/dh.js"></script>
 
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


 <div class="rank1">
    <div class="banner"> 
<script type=text/javascript>

	var pic_width=366; //图片宽度
	
	var pic_height=192; //图片高度
	
	var button_pos=4; //按扭位置 1左 2右 3上 4下
	
	var stop_time=2000; //图片停留时间(1000为1秒钟)
	
	var show_text=0; //是否显示文字标签 1显示 0不显示
	
	var txtcolor="000000"; //文字色
	
	var bgcolor="DDDDDD"; //背景色
	
	var imag=new Array();
	
	var link=new Array();
	
	var text=new Array();
	
	imag[1]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/1.jpg";
	
	link[1]="#";
	
	text[1]="标题 1";
	
	imag[2]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/2.jpg";
	
	link[2]="#";
	
	text[2]="标题 2";
	
	imag[3]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/1.jpg";
	
	link[3]="#";
	
	text[3]="标题 3";
	
	imag[4]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/2.jpg";
	
	link[4]="#";
	
	text[4]="标题 4";
	
	imag[5]="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/2.jpg";
	
	link[5]="#";
	
	text[5]="标题 4";
	
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
       <div class="index_gsjj">
         <div class="rk1bt"> 公司简介 </div>
         <p>中信资产管理有限公司（CITIC Asset Management Corporation Ltd。）（简称“中信资产”），是中国中信集团有限公司旗下，从事资产管理、典当短期融资、融资租赁、商业保理及私募股权投资等类金融业务的专业公司。 </p>
         <p>中国中信集团有限公司是中国改革开放的总设计师邓小平同志亲自倡导和批准，由原国家副主席荣毅仁先生于1979年10月创办。目前，中信集团有限公司已成为综合优势明显、若干领域领先、具有核心竞争力的国际一流大型企业集团。</p>
       </div>
       <div class="clear"></div>
     </div>
     <div class="rank2">
       <div class="rk2bt"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/zfx.jpg" class="bt" alt="" /> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" class="more" alt="" /></a> </div>
       <div id="btn_l" class="btn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ppre.jpg" alt="" /></div>
       <div class="wrap">
         <div class="cc"  style="width:1800px;">
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
           <div class="gdnr con"> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/gdt.jpg" alt="" />
             <div class="gdwz">
               <h2>福晟·钱隆学府四期</h2>
               <p>资管计划期限：24个月（详
                 
                 见内容）<br>
                 资管计划规模：不超过8亿元<br>
                 投资起始金额：100万元<br>
                 预期年化收益：11%-11.8%<br>
                 <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/ckxq.jpg" alt="" /></a> </p>
             </div>
           </div>
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

	})

</script>
       <div class="search" id="tj">
         <form action="">
           <input type="text" name="search" id="search" style="color:#b3b3b3" value="输入关键词" onfocus="if(this.value=='输入关键词'){ this.value='' };this.style.color='black';" onblur="if(this.value==''||this.value=='输入关键词'){ this.value='输入关键词';this.style.color='#b3b3b3'; }"/>
           <input type="image" name="submit" id="submit"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/searchbot.jpg" />
         </form>
       </div>
       <div class="clear"></div>
     </div>
     <div class="rank3">
       <table>
         <tr class="zd d" height=38>
           <td width=47><span>序号</span></td>
           <td width=45><span>状态</span></td>
           <td width=315><span>产品名称</span></td>
           <td width=135><span>期限(月)</span></td>
           <td width=94><span>总规模(元)</span></td>
           <td width=133><span>预期年化收益率(%)</span></td>
           <td width=80><span>分配方式</span></td>
           <td><span>更多了解</span></td>
         </tr>
         <tr>
           <td><span>1</span></td>
           <td><span>在售</span></td>
           <td><span>海安城建安置房特定多个客户专项资产管理计划开放期</span></td>
           <td><span>24个月（详见内容）</span></td>
           <td><span>不超过8亿元</span></td>
           <td><span>11%-11.8%</span></td>
           <td ><span>按年分配</span></td>
           <td><span><a href="cpxq.html"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/hckxq.jpg" alt="" /></a></span></td>
         </tr>
       </table>
     </div>
     <div class="rank4">
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;成立公告</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /> </div>
         <div class="lbhot"> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/slt.jpg" alt="" /></a>
           <div class="hotnr">
             <h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
             <p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
           </div>
           <ul>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==555) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/clgg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>
           </ul>
         </div>
       </div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;开放及相关公告</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /> </div>
         <div class="lbhot"> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/slt.jpg" alt="" /></a>
           <div class="hotnr">
             <h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>
             <p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>
           </div>
           
           <ul>

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==556) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/kfjxggg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>

        </ul>
           
         </div>
       </div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;分配及兑付公告</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /> </div>
         <div class="lbhot"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/slt.jpg" alt="" /></a>

        <div class="hotnr">

          <h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>

          <p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>

        </div>
           
           <ul>

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==554) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/fpjdfgg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['created_at'],'%Y-%m-%d');?>
</span> </li>
			<?php }?>
            <?php } ?>

        </ul>
           
         </div>
       </div>
       <div class="zj"></div>
       <div class="lb1">
         <div class="lbbt"><span>&nbsp;项目运作报告</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/more.jpg" alt="" /> </div>
         <div class="lbhot"> <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
changan/images/slt.jpg" alt="" /></a>

        <div class="hotnr">

          <h2><a href="#">作攻安城建安置房特定多个客户专有点工</a></h2>

          <p>海安城建安置房特定多个客户专项资产管理计划成立公告海安城建安置房特定多个客户专项资产管理计划成立公告</p>

        </div>

        <ul>

          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['category']==557) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
info/xmyzbg/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</a></li><?php } ?></ul>
       <div class="clear"></div>
     </div>
<?php echo $_smarty_tpl->getSubTemplate ("changan/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"footer"), 0);?>
 
   </div>
</body>
</html><?php }} ?>
