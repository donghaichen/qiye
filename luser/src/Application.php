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
// | Authors: Original Author <egirlasm@gmail.com>                        |
// |          Your Name <egirlasm@gmail.com>                                 |
// +----------------------------------------------------------------------+
//
// $Id:$
class Application extends Route {
    protected $base_url;
    protected $path = array();
    public static $__instance;
    public function __construct() {
        self::$__instance = $this;
    }
    public static function getInstance() {
        return self::$__instance;
    }
    public function instance($pathName, $realpath) {
        //echo $pathName." - ".$realpath."<br>";
        $this->path[] = array(
            $pathName,
            $realpath
        );
    }
    public function getPath($pathName) {
        foreach ($this->path as $p) {
            //echo $p[0];
            if ($p[0] == $pathName) return $p[1];
        }
	}
    public function bindInstallPaths(array $paths) {
        $this->instance('path', realpath($paths['app']));
        foreach ($paths as $key => $value) {
            $this->instance("path.{$key}", realpath($value));
        }
    }
    public function run() {

        $_DocumentPath = $_SERVER['DOCUMENT_ROOT'];
        $_FilePath = __FILE__;
        $_RequestUri = $_SERVER['REQUEST_URI'];
        $_AppPath = str_replace($_DocumentPath, '', $_FilePath);
        //echo $_AppPath."<br>";
        $_UrlPath = $_RequestUri;
        //echo $_UrlPath."<br>";
        $_AppPathArr = explode(DIRECTORY_SEPARATOR, $_AppPath);
        //var_dump( $_AppPathArr);
        for ($i = 0; $i < count($_AppPathArr); $i++) {
            $p = $_AppPathArr[$i];
            if ($p) {
                $_UrlPath = preg_replace('/^\/' . $p . '\//', '/', $_UrlPath, 1);
            }
        }
        $_UrlPath = preg_replace('/^\//', '', $_UrlPath, 1);
        $_UrlPath = str_replace('public/', '', $_UrlPath);
        $this->dispath($_UrlPath);
    }
}
?>

