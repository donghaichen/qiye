<?php

class Spider {
 
    public $pagestring = '';

 
    function __construct() {
  
    }
 
    function get($url) {
        $url = trim($url);
        $content = '';
        if (extension_loaded('curl')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $content = curl_exec($ch);
            curl_close($ch);
        } else {
            $content = file_get_contents($url);
        }
        return trim($content);
    }
 
 
    function get_all_url($code) {
        preg_match_all('/<a.+?href=["|\']?([^>"\' ]+)["|\']?\s*[^>]*>([^>]+)<\/a>/is', $code, $arr);
        return array('name' => $arr[2], 'url' => $arr[1]);
    }
 
    function get_sub_content($str, $start, $end) {
        $start = trim($start);
        $end = trim($end);
        if ($start == '' || $end == '') {
            return $str;
        }
        $str = explode($start, $str);
        $str = explode($end, $str[1]);
        return $str[0];
    }
    
    function vd($var) {
        echo "<div style=\"border:1px solid #ddd;background:#F7F7F7;padding:5px 10px;\">\r\n";
        echo "<pre style=\"font-family:Arial,Vrinda;font-size:14px;\">\r\n";
        var_dump($var);
        echo "\r\n</pre>\r\n";
        echo "</div>";
    }
 
}
 
?>