<?php
class Redirect extends url{

		    // baseUrl



	

	static function to($uri){

		$uri = trim($uri,'/');

		header("location: ".self::baseUrl($uri));

	}



}

?>