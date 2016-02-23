<?php

class url{



    static function baseUrl($uri=''){

            $baseUrl = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';

           	$baseUrl .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');

           	$baseUrl .= isset($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : dirname(getenv('SCRIPT_NAME'));

			$baseUrl = rtrim($baseUrl, '/') . '/';

            return $baseUrl.$uri;

    }



	static function to($uri){

		if(substr($uri,0,1) != '/')

			$uri = '/'.$uri;

		return self::baseUrl($uri);

	}



}

?>