<?php
class Input{



	static function get($field){


	if(isset($_POST[$field]))

		return $_POST[$field];
	else
		return $_FILES[$field];

	}

	

	static function getAll($array){

		$data = array();

		if(is_array($array)){

			for($i = 0;$i < count($array); $i++){

				 $data[$array[$i]] = isset($_POST[$array[$i]]) ? $_POST[$array[$i]] : 0;

			}

		}

		

		//print_r($data);

		return $data;

	}



}

?>