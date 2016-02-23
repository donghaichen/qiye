<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 5                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2004 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          Your Name <you@example.com>                                 |
// +----------------------------------------------------------------------+
//
// $Id:$

require_once (BASE_PATH . '/../vendor/libs/Smarty.class.php');
class View {
	protected static $smarty;
	
    protected static $__title;
	
	protected static $var = array();
	
    static function make($template, $array = null) {

       if (self::$smarty == NULL)
	   {
            self::$smarty = new Smarty();
	   }

        self::$smarty = new Smarty();
		//print_r(self::$smarty);
        self:: $smarty->setTemplateDir(APP . '/views/templates/');
        self::$smarty->setCompileDir(APP . '/views/templates_c/');
        self::$smarty->setConfigDir(APP . '/configs/');
        self:: $smarty->setCacheDir(APP . '/cache/');
       	//self::$smarty->debugging = true;
        //$smarty->caching = TRUE;//开启缓存 0、FALSE代表关闭|非0数字、TRUE代表开启
        //$smarty->cache_lifetime = 3600;
        //$smarty->debugging = true;
        //print_r($array);
		
	
		
        if (is_array($array[0])) {
            for ($i = 0; $i < count($array); $i++) {
                self::$smarty->assign($array[$i][0], $array[$i][1]);
            }
        } else self::$smarty->assign($array[0], $array[1]);
		
		//echo count(self::$var);
		//print_r(self::$var);
		

		for($j = 0;$j < count(self::$var);$j++){
			self::$smarty->assign(self::$var[$j][0], self::$var[$j][1]);
		}
		
		
        if (isset(self::$__title)) self::$smarty->assign('title', self::$__title);
        $username = Session::get('username');
        if (isset($username)) self::$smarty->assign('admin_username', Session::get('username'));
		$auth = Session::get('auth');
		if(isset($auth)) self::$smarty->assign('auth',$auth);
		
        self::$smarty->assign('base_url', url::baseUrl() );
        //$smarty->assign($array);
		
        self::$smarty->display($template);
    }
    static function setTitle($title) {
        self::$__title = $title;
    }
	
	static function bindParam($field,$value){
		self::$var[] = array($field,$value);
	}
	
}
?>
