<?php

class DB extends Mysql{
	
	public static function sort($orderByField, $orderbyDirection = "DESC") {
		$db = self::getInstance();
		if(empty($db)){
			$db = new Mysql('udb26.dnsvdb.com', 'web438442', 'lXa3UMM0wT', 'db_web438442');
		}
        return $db->orderBy($orderByField, $orderbyDirection);
    }
	
    public static function read($table,$whereProp = null, $whereValue = null,$expression = null) {
		$db = self::getInstance();

        if ($whereProp != null && $whereValue != null) {
            $db->where($whereProp, $whereValue,$expression);
        }     
		return $db->get($table);
    }
}