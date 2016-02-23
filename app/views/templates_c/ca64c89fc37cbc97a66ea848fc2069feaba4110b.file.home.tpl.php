<?php /* Smarty version Smarty-3.1.18, created on 2014-11-28 16:04:35
         compiled from "/home/uu170528/app/views/templates/admin/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92576663554782c9316d647-47439080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca64c89fc37cbc97a66ea848fc2069feaba4110b' => 
    array (
      0 => '/home/uu170528/app/views/templates/admin/home.tpl',
      1 => 1417160627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92576663554782c9316d647-47439080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
    'servertime' => 0,
    'ServerSoftwares' => 0,
    'PhpVersion' => 0,
    'MysqlVersion' => 0,
    'HttpVersion' => 0,
    'DocumentRoot' => 0,
    'MaxExecutionTime' => 0,
    'ServerFileUpload' => 0,
    'RegisterGlobals' => 0,
    'SafeMode' => 0,
    'GdVersion' => 0,
    'MemoryUsage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54782c931fd5f2_80080629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54782c931fd5f2_80080629')) {function content_54782c931fd5f2_80080629($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/admin.css" type="text/css" media="all">
<style>
#server_info {
	border: 1px solid #dedede;
}
#server_info th,#server_info td {
	text-align: left;
	border-bottom:1px solid #dedede;
	border-right:1px solid #dedede;
	padding:10px 20px;
}
.tab_content {
	padding: 30px;
}
</style>
<meta name="keywords" content="后台, 后台管理, meetsh后台管理系统">
<meta name="description" content="meetsh是一家专注网站开发,微信公众平台开发的公司.">
<meta name="author" content="eGirlAsm <egirlasm@qq.com>">
</head>
<body>
<div id="article">
  <div class="tab_menu">
    <ul>
      <li class="current"><a href="javascript:void();">基本信息 </a></li>
    </ul>
  </div>
  <div class="tab_content_wrap">
    <div class="tab_content">
      <h2>服务器信息</h2>
      <table id="server_info">
        <tr>
          <th>服务器时间</th>
          <td><?php echo $_smarty_tpl->tpl_vars['servertime']->value;?>
</td>
        </tr>
        <tr>
          <th>服务器解译引擎</th>
          <td><?php echo $_smarty_tpl->tpl_vars['ServerSoftwares']->value;?>
</td>
        </tr>
        <tr>
          <th>PHP版本</th>
          <td><?php echo $_smarty_tpl->tpl_vars['PhpVersion']->value;?>
</td>
        </tr>
        <tr>
          <th>MYSQL版本</th>
          <td><?php echo $_smarty_tpl->tpl_vars['MysqlVersion']->value;?>
</td>
        </tr>
        <tr>
          <th>HTTP版本</th>
          <td><?php echo $_smarty_tpl->tpl_vars['HttpVersion']->value;?>
</td>
        </tr>
        <tr>
          <th>网站根目录</th>
          <td><?php echo $_smarty_tpl->tpl_vars['DocumentRoot']->value;?>
</td>
        </tr>
        <tr>
          <th>最大执行时间</th>
          <td><?php echo $_smarty_tpl->tpl_vars['MaxExecutionTime']->value;?>
</td>
        </tr>
        <tr>
          <th>文件上传</th>
          <td><?php echo $_smarty_tpl->tpl_vars['ServerFileUpload']->value;?>
</td>
        </tr>
        <tr>
          <th>全局变量 register_globals</th>
          <td><?php echo $_smarty_tpl->tpl_vars['RegisterGlobals']->value;?>
</td>
        </tr>
        <tr>
          <th>安全模式 safe_mode</th>
          <td><?php echo $_smarty_tpl->tpl_vars['SafeMode']->value;?>
</td>
        </tr>
        <tr>
          <th>图形处理 GD Library</th>
          <td><?php echo $_smarty_tpl->tpl_vars['GdVersion']->value;?>
</td>
        </tr>
        <tr>
          <th>内存占用</th>
          <td><?php echo $_smarty_tpl->tpl_vars['MemoryUsage']->value;?>
</td>
        </tr>
          </tr>
        
      </table>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
