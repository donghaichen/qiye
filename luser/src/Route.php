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

class Route {
    protected static $__routes = array();
    protected static $__filters = array();
    protected static $__groups = array();
    protected static $__groupName = null;
    /*
    
    
    
    functionName:get
    
    
    
    */
    static function get($uri, $arg2 = null, $arg3 = null) {
        if ($arg3) //filter存在 没有filter的都是两个参数 因为php不支持函数重载 只能这样写了
        {
            self::$__routes[] = array(
                'groupName' => self::$__groupName,
                'method' => 'GET',
                'uri' => $uri,
                'callback' => $arg3,
                'filter' => $arg2
            );
        } else {
            self::$__routes[] = array(
                'groupName' => self::$__groupName,
                'method' => 'GET',
                'uri' => $uri,
                'callback' => $arg2
            );
        }
    }
    /*
    
    
    
    functionName:post
    
    
    
    */
    static function post($uri, $arg2 = null, $arg3 = null) {
        if ($arg3) //filter存在 没有filter的都是两个参数 因为php不支持函数重载 只能这样写了
        {
            self::$__routes[] = array(
                'groupName' => self::$__groupName,
                'method' => 'POST',
                'uri' => $uri,
                'callback' => $arg3,
                'filter' => $arg2
            );
        } else {
            self::$__routes[] = array(
                'groupName' => self::$__groupName,
                'method' => 'POST',
                'uri' => $uri,
                'callback' => $arg2
            );
        }
    }
    static function filter($funcName, $callback = null) {
        self::$__filters[] = array(
            $funcName,
            $callback
        );
    }
    static function group($filter, $callback) {
        self::$__groupName = $filter;
        echo $callback();
        self::$__groupName = null;
    }
    public function getUri() {
        return self::$__routes;
    }
    public function getFilter() {
        return self::$__filters;
    }
    public function getGroup() {
        return self::$__groups;
    }
    /*
    
    functionName:RemoveSlash
    
    param:$uri
    
    content:remove latest '/' letter from uri; if not exists return original;
    
    example: removeSlash("abc/def/123/"); => abc/def/123
    
    */
    public function removeSlash($uri) {
        if (substr($uri, -1) == '/') $processed = substr($uri, 0, strlen($uri) - 1);
        else $processed = $uri;
        return $processed;
    }
    //routes 路由  $uri 实际输入的url
    public function ReplaceRouteVar($routes, $uri) {
        $inputRouteArr = explode('/', $uri); //分割
        $RoutesAr = explode('/', $routes);
        for ($i = 0; $i < count($RoutesAr); $i++) {
            if (preg_match('/\{[0-9a-zA-Z]*\}/', $RoutesAr[$i]) || !strcasecmp($RoutesAr[$i], $inputRouteArr[$i])) {
                if (preg_match('/\{[0-9a-zA-Z]*\}/', $RoutesAr[$i])) {
                    $params[] = $inputRouteArr[$i];
                    $RoutesAr[$i] = $inputRouteArr[$i];
                }
            } else return array(
                'uri' => $routes,
                'var' => null
            );
        }
        $ReplacedUri = implode('/', $RoutesAr);
        return array(
            'uri' => $ReplacedUri,
            'var' => $params
        );
    }
    public function excuteFilter($filterName) {
        //找filter函数指针
        $filters = $this->getFilter();
        foreach ($filters as $filter) {
            //echo $filter[0]."  =  ".$router[3];
            if (strcmp($filter[0], $filterName) == 0) {
                //执行filter
                echo $filter[1]();
            }
        }
    }
    public function dispath_process($router, $var) {
        if (isset($router['callback'])) {
            if (isset($router['filter'])) {
                $this->excuteFilter($router['filter']);
            }
            if (isset($router['groupName'])) {
                $this->excuteFilter($router['groupName']);
            }
            if (is_callable($router['callback'])) {
                if (isset($var)) {
                    call_user_func_array($router['callback'], $var);
                } else return call_user_func($router['callback']);
            } else {
                $action = explode('@', $router['callback']);
                $className = $action[0];
                $classFile = $action[0] . ".php";
                $methodName = $action[1];
                //echo  $this->getPath('path.app').'/controllers/'.$classFile."<br>";
                if (file_exists($this->getPath('path.app') . '/controllers/' . $classFile)) {
                    require $this->getPath('path.app') . '/controllers/' . $classFile;
                    $rc = new ReflectionClass($className);
                    if (!$rc->hasMethod($methodName)) {
                        // 404 error
						echo "Method Not Found";
                        //LuserException::error404();
                        return;
                    } else {
                        $instance = $rc->newInstance();
                        $method = $rc->getMethod($methodName);
                        $method->invokeArgs($instance, $var);
                    }
                } else echo "file not exists";
            }
        }
    }
    public function compareSegment($route, $uri) {
        return count(explode('/', $route)) == count(explode('/', $uri)) ? TRUE : FALSE;
    }
    public function compareRoute($route, $uri) {
        return !strcasecmp($route, $uri);
    }
    public function isVariableRoute($route) {
        return preg_match('/\{[0-9a-zA-Z]*\}/', $route, $result);
    }
    public function compareMethod($method) {
        return $method == $_SERVER['REQUEST_METHOD']; //如果这里不判断的话 下面多了没必要的判断
        
    }
    public function dispath($routeArr) {
        $routes = $this->getUri();
        foreach ($routes as $router) {
            if ($this->compareMethod($router['method'])) {
                $uri = $this->removeSlash($router['uri']);
                if ($this->compareSegment($routeArr, $uri)) {
                    //如果是有变量的route 则 处理成 正常url
                    $var = array();
                    if ($this->isVariableRoute($uri)) {
                        $varinfo = $this->ReplaceRouteVar($uri, $routeArr);
                        $uri = $varinfo['uri'];
                        $var = $varinfo['var'];
                    }
                    //判断是否存在当前url的route
                    if ($this->compareRoute($uri, $routeArr)) {
                        //echo $uri." =? ".$routeArr." - <br>";
                        $this->dispath_process($router, $var);
                        exit();
                    }
                }
            }
        }
        LuserException::error404();
    }
}
?>
