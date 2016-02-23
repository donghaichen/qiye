<?php
class LuserException{
	static function error404(){
    
echo '
<html>
<head>
<style>
body {
    background-color: #daecee;
}

#error {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -303px;
    margin-left: -303px;
}
</style>

</head>
<body>
<div id="error">
      <a href="javascript:history:back();">
        <img src="http://egirlasm.qiniudn.com/404.png" alt="404 page not found" id="error404-image" />
      </a>
    </div>
</body>
</html>

';
        
    }
}
?>