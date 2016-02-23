<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>{$title}</title>
<link rel="stylesheet" id="style-css" href="{$base_url}css/daqianduan.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="{$base_url}css/admin.css" type="text/css" media="all">
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
          <td>{$servertime}</td>
        </tr>
        <tr>
          <th>服务器解译引擎</th>
          <td>{$ServerSoftwares}</td>
        </tr>
        <tr>
          <th>PHP版本</th>
          <td>{$PhpVersion}</td>
        </tr>
        <tr>
          <th>MYSQL版本</th>
          <td>{$MysqlVersion}</td>
        </tr>
        <tr>
          <th>HTTP版本</th>
          <td>{$HttpVersion}</td>
        </tr>
        <tr>
          <th>网站根目录</th>
          <td>{$DocumentRoot}</td>
        </tr>
        <tr>
          <th>最大执行时间</th>
          <td>{$MaxExecutionTime}</td>
        </tr>
        <tr>
          <th>文件上传</th>
          <td>{$ServerFileUpload}</td>
        </tr>
        <tr>
          <th>全局变量 register_globals</th>
          <td>{$RegisterGlobals}</td>
        </tr>
        <tr>
          <th>安全模式 safe_mode</th>
          <td>{$SafeMode}</td>
        </tr>
        <tr>
          <th>图形处理 GD Library</th>
          <td>{$GdVersion}</td>
        </tr>
        <tr>
          <th>内存占用</th>
          <td>{$MemoryUsage}</td>
        </tr>
          </tr>
        
      </table>
    </div>
  </div>
</div>
</body>
</html>