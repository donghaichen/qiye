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

class Model {
    protected static $db = null;
    public function __construct() {
        $config = require(APP . '/configs/database.php');
        $use = $config[$config['default']];
        self::$db = new Mysql($use['host'], $use['username'], $use['password'], $use['database']);
    }
	
	public function query($q){
	return self::$db->search($q);
	}
	
	public function like($table,$field,$like){
		if(isset($like)){
			return self::$db->like($table,$field,$like);
		}
		else{
			return self::$db->like($this->table,$table,$field);
		}
	}
	
	public function getInsertId(){
		return self::$db->getInsertId();
	}
	
	
	public function where($whereProp, $whereValue){
		self::$db->where($whereProp,$whereValue);
	}
    public function get($whereProp = null, $whereValue = null,$arg3 = null,$arg4 = null) {
		
		if($arg3){
			self::$db->where($whereValue, $arg3,$arg4);
			return self::$db->get($whereProp);
		}
		
        if ($whereProp != null && $whereValue != null) {
            self::$db->where($whereProp, $whereValue);
        } elseif ($whereProp) {
            return self::$db->get($whereProp);
        }
        return self::$db->get($this->table);
    }
    public static function Load($array) {
        $L = Application::getInstance();
        if (is_array($array)) {
            print_r($array);
        } else {
            if (file_exists($L->getPath('path.app') . '/models/' . $array . '.php')) {
                require $L->getPath('path.app') . '/models/' . $array . '.php';
            } else echo "file not exists";
        }
    }
    //$sql="ALTER TABLE Users ADD startDate DATE";
    public function AddColumn($name, $field, $type, $size, $isnull) {
        echo $type . "\n";
        if (strcasecmp($type, 'VARCHAR') == 0) $q = "ALTER TABLE $name ADD $field $type($size) CHARACTER SET utf8 COLLATE utf8_unicode_ci $isnull";
        elseif (strcasecmp($type, 'TEXT') == 0) $q = "ALTER TABLE $name ADD $field $type CHARACTER SET utf8 COLLATE utf8_unicode_ci $isnull";
        elseif (strcasecmp($type, 'DATETIME') == 0) $q = "ALTER TABLE $name ADD $field $type $isnull";
        else $q = "ALTER TABLE $name ADD $field $type($size) $isnull";
        //echo $q;
        self::$db->alter($q);
    }
    //$sql="ALTER TABLE Users DROP data";
    public function DropColumn($name, $field) {
        $q = "ALTER TABLE $name DROP $field";
        self::$db->alter($q);
    }
    //$sql="ALTER TABLE Users CHANGE startDate startDate DATE NOT NULL";
    public function ChangeColumn($name, $field, $type, $isnull) {
        $q = "ALTER TABLE $name CHANGE $field $type $isnull ";
        self::$db->alter($q);
    }
    public function drop($table) {
        self::$db->drop($table);
    }
    public function create($table, $data = null) {
        self::$db->create($table, $data);
    }
    public function save($data) {
       // echo "insert - ".$this->table;
        //var_dump($data);
        self::$db->insert($this->table, $data);
    }
    public function insert($table, $data) {
        self::$db->insert($table, $data);
    }
    public function orderBy($orderByField, $orderbyDirection = "DESC") {
        self::$db->orderBy($orderByField, $orderbyDirection);
    }
    public function update($arg1, $arg2, $arg3 = null) {
        //echo "update - ";
        //print_r($data);
        if (isset($arg3)) {
            $table = $arg1;
            $data = $arg2;
            $primary = $arg3;
            self::$db->where('id', $primary);
            self::$db->update($table, $data); /*
            
            if(self::$db->update($table,$data))
            
            echo self::$db->count . ' records were updated';
            
            else
            
            echo 'update failed: ' . self::$db->getLastError();		*/
        } else {
            $data = $arg1;
            $primary = $arg2;
            self::$db->where('id', $primary);
            self::$db->update($this->table, $data); /*
            
            if(self::$db->update($this->table,$data))
            
            echo self::$db->count . ' records were updated';
            
            else
            
            echo 'update failed: ' . self::$db->getLastError();*/
        }
    }
    public function del($expression = null, $table = null) {
        if ($expression) self::$db->where($expression);
        self::$db->delete($table ? $table : $this->table);
    }
}
?>
