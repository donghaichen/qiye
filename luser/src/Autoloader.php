<?php
class autoloader {

    public static $loader;
	
	private static $framework;
	private static $app;

    public static function init()
    {
		self::$framework = realpath(BASE_PATH.'/../luser/src/');
		self::$app 		 = realpath(BASE_PATH.'/../app/');
		
        if (self::$loader == NULL)
            self::$loader = new self();

        return self::$loader;
    }

    public function __construct()
    {
		spl_autoload_register(array($this,'core'));
        spl_autoload_register(array($this,'model'));
		spl_autoload_register(array($this,'helper'));
        /*spl_autoload_register(array($this,'helper'));
        spl_autoload_register(array($this,'controller'));
        spl_autoload_register(array($this,'library'));*/
    }
	
	public function core($file)
    {
		//echo "<font size='2' color='#F75000'>try load ->".self::$framework . DIRECTORY_SEPARATOR . $file . '.php'."</font><br>";
		//echo self::$base_path.'/luser/src/'.$file .'.php';
         if (file_exists( self::$framework . DIRECTORY_SEPARATOR . $file . '.php')) {
                 require  self::$framework . DIRECTORY_SEPARATOR . $file . '.php';
				 //echo "success load ->".self::$framework . DIRECTORY_SEPARATOR . $file . '.php'."<br>";
          } 
    }

   /* public function library($class)
    {
         if (file_exists( $file . '.php')) {
                require  $file . '.php';
          } else echo "file not exists";
    }

    public function controller($class)
    {
         if (file_exists( $file . '.php')) {
                require  $file . '.php';
          } else echo "file not exists";
    }*/

    public function model($file)
    {
		
		//echo "<font size='2' color='#F75000'>try load model->".self::$app . DIRECTORY_SEPARATOR .$file . '.php'."</font><br>";
		//echo self::$base_path.'/luser/src/'.$file .'.php';
         if (file_exists(self::$app . DIRECTORY_SEPARATOR .'models/'.$file . '.php')) {
                require  self::$app . DIRECTORY_SEPARATOR .'models/'.$file . '.php';
				//echo "success load model->".self::$app . DIRECTORY_SEPARATOR . $file . '.php'."<br>";
          } 
    }

    public function helper($file)
    {
         if (file_exists(self::$app . DIRECTORY_SEPARATOR .'helpers/'.$file . '.php')) {
                require  self::$app . DIRECTORY_SEPARATOR .'helpers/'.$file . '.php';
				//echo "success load model->".self::$app . DIRECTORY_SEPARATOR . $file . '.php'."<br>";
          } 
    }

}

//call
autoloader::init();
?>