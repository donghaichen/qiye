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

class HomeController extends Controller {
	
	private $category;
	
	public function __construct(){
		$category_data = subMenu::getCategory();
		
		view::bindParam('category',$category_data);
		view::bindParam('luser_start',microtime(true) - LUSER_START);
		$this->category = new Category;
	}
	
    public function index() {
		
		
		$article = new Article;
		$article_data = $article->query("select * from article order by created_at desc");
               
		
		$link = new Link;
		$link_data = $link->get();

		$product = new Product;
                
		$products= $product->query("select * from product order by id desc limit 6");
                
                $session = $_SESSION['auth'];
                
                
		
		view::make('changan/index.tpl',array(array('products',$products),array('link',$link_data),array('article',$article_data)));
                
                
		
    }
    
    
    
    
    



    //长安学堂产品详情页
	/*public function cpxqss() {
		
		
		$article = new Article;
		$article_data = $article->get();
		
		
		$link = new Link;
		$link_data = $link->get();

		$product = new Product;
		$products= $product->query("select * from product");
		$productes= $product->query("select * from product where id={$products[]}");
		
		view::make('changan/cpxqss.tpl',array(array('products',$products),array('link',$link_data),array('article',$article_data)));
		
    }*/

	
	public function logout() {
        Session::destroy();
        Redirect::to('/');
    }
	
	public function Register(){
		$users = new User;
        $data = array(
            'type' => 0,
			'group'=> 0,
			'user_type' => Input::get('user_type'),
            'username' => Input::get('username') ,
            'password' => Input::get('password') ,
            'company' => "N/A" ,
            'realname' =>Input::get('username') ,
            'certificate_type' =>Input::get('certificate_type') ,
            'certificate_number' =>Input::get('certificate_number') ,
            //'tel' => Input::get('phone') ,
            'email' => Input::get('mail') ,
            'address' => Input::get('city'),
			'created_at'=>date('y-m-d h:m:i')
        );
        if($data['username']==''){
            echo "<script>alert('请输入用户名');window.history.back(-1);</script>";
            exit;
        }
        if($data['password']==''){
            echo "<script>alert('请输密码');window.history.back(-1);</script>";
            exit;
        }
        if($data['certificate_number']==''){
            echo "<script>alert('请输入证件号码');window.history.back(-1);</script>";
            exit;
        }
        if($data['email']==''){
            echo "<script>alert('请输入邮箱');window.history.back(-1);</script>";
            exit;
        }
        if($data['address']==''){
            echo "<script>alert('请输入您的地址');window.history.back(-1);</script>";
            exit;
        }
        $users->save($data);
       	echo '<script>alert("新用户注册成功，请用您注册时填写的“姓名/机构名”和“密码”进行登陆");document.location.href="/login";</script>';
	}
		
	public function logincheck(){

  		$users = new User;
                //print_r($users);
        if (Session::get('authnum_session') == Input::get('vcode')) {
            $username = Input::get('username');
            $user_array = $users->get('username', $username);
            if (is_array(($user_array))) { //user exists
                foreach ($user_array as $us_ar);
                if ($us_ar['password'] == Input::get('password')) {
                    Session::set('auth', $username);
                    Redirect::to('/');
                    
                } else view::make('changan/login.tpl', array(
                    "show_error",
                    "1"
                ));
            } else view::make('changan/login.tpl', array(
                "show_error",
                "2"
            ));
        } else view::make('changan/login.tpl', array(
            "show_error",
            "3"
        ));
	}	
	
	
	public function showLogin(){
		view::make('changan/login.tpl');
	}
	public function showRegister(){
		view::make('changan/register.tpl');
	}
        
        //首页登录
        public function indexLogin(){
		view::make('changan/index.tpl');
	}
        
        public function indexcheck(){

  		$users = new User;
                //print_r($users);
        if (Session::get('authnum_session') == Input::get('vcode')) {
            $username = Input::get('username');
            $user_array = $users->get('username', $username);
            if (is_array(($user_array))) { //user exists
                foreach ($user_array as $us_ar);
                if ($us_ar['password'] == Input::get('password')) {
                    Session::set('auth', $username);
                    Redirect::to('/');
                    
                } else view::make('changan/index.tpl', array(
                    "show_error",
                    "1"
                ));
            } else view::make('changan/index.tpl', array(
                "show_error",
                "2"
            ));
        } else view::make('changan/index.tpl', array(
            "show_error",
            "3"
        ));
	}	
        
        //阅读协议
        function read_file(){
            view::make('changan/read_file.tpl');
        }
        
        
        
        //忘记密码模块
        function wjmm(){
            view::make('changan/wjmm.tpl');
        }
        
        
        function czmm(){
            $username = $_POST['username'];
            $email = $_POST['email'];
            
            
            $users = new User;
            $user_data = $users->query("select username,email from users where username='$username'");
            
            
            if($user_data){
                if($email==$user_data[0]['email']){
                    require_once("smtp.class.php");
                    
                    $passwd = rand();
                    
                    $smtpserver = "smtp.qq.com";//SMTP服务器 
                    $smtpserverport =25;//SMTP服务器端口 
                    $smtpusermail = "1055257345@qq.com";//SMTP服务器的用户邮箱 
                    $smtpemailto = "$email";//发送给谁 
                    $smtpuser = "1055257345@qq.com";//SMTP服务器的用户帐号 
                    $smtppass = "199232WSad";//SMTP服务器的用户密码 
                    $mailsubject = "重置密码";//邮件主题 
                    $mailbody = "您的新密码是:".$passwd;//邮件内容 
                    $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件 

                    $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
                    $smtp->debug = false;//是否显示发送的调试信息 
                    $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
                    
                    echo '<script>alert("您的新密码已经发到您邮箱里!请注意查收!");window.location.href="{$base_url}";</script>';
                    
                    $users->query("update users set password='$passwd' where username='$username'");
                    
                }else{
                    echo '<script>alert("请输入您注册时的邮箱");window.location.href="{$base_url}";</script>';
                }
                
                
            }else{
                echo '<script>alert("请输入您注册时的用户名");</script>';
            }
            
        }
        
        
        
        
        
        
        
        
	//产品详情
    public function cpxq(){
	    view::make('changan/cpxqs.tpl');
	}

        
        public function infoes(){
		$article = new Article;
		$article_data = $article->query("select * from article order by created_at desc limit 12");
                
               
            
                
                $session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>document.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }

	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
		
		view::make('changan/index.tpl',array(array('page','info'),array('single',$single_data),array('article',$article_data)));
	}
        
        public function infoPages($page){
            
            
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
                
		$article_data = $article->get();
		
		$session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>document.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/index.tpl',array(array('active',$page),array('page','info'),array('single',$single_data),array('article',$article_data)));
	}
        
        
        

	public function info(){
		$article = new Article;
		$article_data = $article->query("select * from article order by created_at desc limit 12");
                
                //取出左下角的查看详情
            $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
                
                $session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>document.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }

	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
		
		view::make('changan/infoall.tpl',array(array('page','info'),array('products',$products),array('single',$single_data),array('article',$article_data)));
	}
	
   
	
	public function infoPage($page){
            
            //取出左下角的查看详情
            $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
                $article->orderBy('created_at','desc');
		$article_data = $article->get();
                //$article = new Article;
		//$article_data = $article->query("select * from article order by created_at desc");
		
		$session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>document.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/info.tpl',array(array('active',$page),array('page','info'),array('products',$products),array('single',$single_data),array('article',$article_data)));
	}
	
	public function infoDetails($page,$id){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
                //print_r($category);
                
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
		$article_data = $article->get('id',$id);
		
		
		$session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>document.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/cpxq.tpl',array(array('active',$page),array('page','info'),array('single',$single_data),array('article',$article_data)));	
	}

	//长安学堂
	public function study(){
		$article = new Article;
		$article_data = $article->get();

		//取出左下角的查看详情
            $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('study','parentid');
		
		
		view::make('changan/studyall.tpl',array(array('page','study'),array('products',$products),array('single',$single_data),array('article',$article_data)));
	}
	
   
	
	public function studyPage($page){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('study','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
        
        
        
                //取出左下角的查看详情
            $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
		$article_data = $article->get();
		
		
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/study.tpl',array(array('active',$page),array('page','study'),array('products',$products),array('single',$single_data),array('article',$article_data)));
	}
	
	public function studyDetails($page,$id){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('study','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
		$article_data = $article->get('id',$id);
		
		
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/cpxq.tpl',array(array('active',$page),array('page','study'),array('single',$single_data),array('article',$article_data)));	
	}
	


    //公司产品
	/*public function product(){
		$article = new Article;
		$article_data = $article->get();

		
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('product','parentid');
		
		
		view::make('changan/productall.tpl',array(array('page','product'),array('single',$single_data),array('article',$article_data)));
	}
	
   
	
	public function productPage($page){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('product','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
		$article_data = $article->get();
		
		
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/product.tpl',array(array('active',$page),array('page','product'),array('single',$single_data),array('article',$article_data)));
	}
	
	public function productDetails($page,$id){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('product','parentid');
		
   		//获取当前页面 菜单id
		$category = new Category;
		$category_data = $category->get('dir', $page);
        foreach ($category_data as $s);
		
		//获取菜单相关内容数据
		$article = new Article;
		$article->where('category',$s['id']);
		$article_data = $article->get('id',$id);
		
		
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/cpxq.tpl',array(array('active',$page),array('page','product'),array('single',$single_data),array('article',$article_data)));	
	}*/
	
	



	public function xptj(){
		
		$product = new Product;
		
		$product->orderBy('id','desc');
		$product_data = $product->get();
                //print_r($product_data);
               
                $session = $_SESSION['auth'];
                
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>window.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }
                
                
		
                
                
                
		view::make('changan/xptj.tpl',array('product',$product_data),array('productss',$productss));
                //view::make('changan/xptj.tpl',array('productss',$productss));
                
                //view::make('changan/xptj.tpl',array(array('product',$product_data),array('products','$products')));
	}
        
        
        
       


	//公司产品详情页
    /*public function cpxqss(){

		$product = new Product;
		$products= $product->query("select * from product");
		
		$product_data = $product->get();
		//print_r($product_data);
		
		
		view::make('changan/cpxqss.tpl',array('product',$product_data));
	}*/
	
	
	public function cpyx(){
                $session = $_SESSION['auth'];
                
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>window.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                    exit;
                    
                }
		Redirect::to("/product/cpyx/ ");
                
                
	}

	public function cpyx_filter($filterString){
		$filterString=urldecode($filterString);
		$default='{"status":{},"yuqi":{},"money":{},"month":{},"company":{},"area":{}}';
		$filterString=empty($filterString)?$default:$filterString;
		$filter=json_decode($filterString,true);
                //print_r($filter);
		$product = new Product;
		$product_data = $product->get();
		$properties=array(
			"area"=>array(),
			"status"=>array(),
			"company"=>array()
		);
		
		for($i=0,$l=count($product_data);$i<$l;$i++){
			$product_data[$i]["selected"]=true;
			$item=$product_data[$i];
			//pick properties
			foreach ($properties as $key => $value) {
				if(!isset($properties[$key][$item[$key]]))
					$properties[$key][$item[$key]]=true;
			}
			//filter items
			foreach($filter as $key=>$value){
				preg_match_all('/(\d+\.?)+/',$item[$key],$vals);
				$vals=$vals[0];
				if(count($vals)==0)
					$vals[]=$item[$key];
				for($k=0,$c=count($vals);$k<$c;$k++){
					$val=$vals[$k];
					if(isset($value["value"]) && $value["value"]!=md5($val)){
						$product_data[$i]["selected"]=false;
						break;
					}
					if(isset($value["min"]) && $value["min"] > $val){
						$product_data[$i]["selected"]=false;
						break;
					}
					if(isset($value["max"]) && $value["max"]<=$val){
						$product_data[$i]["selected"]=false;
						break;
					}
				}
				
			}
		}
		$products=array();
		for($i=0,$l=count($product_data);$i<$l;$i++){
			if($product_data[$i]["selected"])
				$products[]=$product_data[$i];
		}
		view::make('changan/cpyx.tpl',array(array('pCount',count($products)),array('product',$products),array('filter',$filterString),array('filter_data',$properties)));
	}
        
        //搜索
        function search(){
            
            
            $session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>window.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                }
            
            $keywords = $_POST['keywords'];
            
            /*$article = new Article;
		$article_data = $article->get();
		*/
		
		//$link = new Link;
		//$link_data = $link->get();
                
               
            
		$product = new Product;
		$products= $product->query("select * from product where name like '%$keywords%'");
		 //print_r($products);
		
                $product_data = $product->query("select * from product order by id desc limit 3");
                
                /*$products->save(array(
			"name"=>Input::get("name")
			
		));
		header("location:".$_SERVER["HTTP_REFERER"]);*/
                
               
                
		view::make('changan/search_list.tpl',array(array('sCount',count($products)),array('product',$product_data),array('products',$products)));
           
        }
        
        
       
        
        
        //公司产品详情页
        function gscpxqy(){
            
            $id = $_POST['id'];
            
            
            $session = $_SESSION['auth'];
                //如果没登录，则跳转到登录页面  
                if(!$session){
                    //echo '<script>var a="<ul style=color:red;>\<li>1</li>\<li>2</li>\</ul>";document.write(a);</script>';
                    echo '<script>window.location.href="http://changanassets.com/public/login";</script>';
                    //header('location:{$base_url}login');
                    //echo "<span style='color:blue;'>您还没登录,请先登录</span>,<a href='{$base_url}login'>点击</a>跳转到登录页面";
                }
            
            /*$article = new Article;
		$article_data = $article->get();
		*/
		
		//$link = new Link;
		//$link_data = $link->get();

		$product = new Product;
                $products= $product->query("select * from product where id='$id'");
                //$products= $product->query("select * from product");
		 //print_r($products);
		
                /*$products->save(array(
			"name"=>Input::get("name")
			
		));
		header("location:".$_SERVER["HTTP_REFERER"]);*/
                
		view::make('changan/cpxqss.tpl',array(array('sCount',count($products)),array('products',$products)));
           
        }
        
        
        //分页功能
        function fenye(){
            
           /*$product = new Product;
            
           /*$pageCount = 5;//每页显示的条数
           $rowCount = $product->query("select count(*) from product");//总记录数
           $pageResult = intval($rowCount/$pageCount); //总页数
           $page=''; //当前页
           $offset = ($page-1)*$pageCount; //偏移量
           */
           //$products = $product->query("select * from product limit 0,5");
           //print_r($products);
           
           //view::make('changan/xptj.tpl',array(array('sCount',count($products)),array('products',$products)));*/
           
           
           
           
           $product = new Product;
		
		$products = $product->query("select * from product limit 0,5");
                //print_r($product_data);
		//$products = $product->query("select * from product limit 0,5");
		
		
		view::make('changan/index.tpl',array('products',$products));
        }
        
        
        
        
     
        
        
        

	function unicode2utf8($str){
        if(!$str) return $str;
        $decode = json_decode($str);
        if($decode) return $decode;
        $str = '["' . $str . '"]';
        $decode = json_decode($str);
        if(count($decode) == 1){
                return $decode[0];
        }
        return $str;
	}

	public function reservation(){
		$reservation = new Reservation;
		$reservation->save(array(
			"reservation_product"=>Input::get("reservation_name"),
			"reservation_username"=>Input::get("reservation_username"),
			"reservation_price"=>Input::get("reservation_price"),
			"reservation_telephone"=>Input::get("reservation_telephone"),
			"reservation_mail"=>Input::get("reservation_mail")
		));
		header("location:".$_SERVER["HTTP_REFERER"]);
	}
	


    //服务中心
	public function servicess(){
		//取出我们的服务内容
                $pages = new Pages;
                $data = $pages->query("select * from page where category=577");
                
                
                //取出左下角的查看详情
            $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/service.tpl',array(array('products',$products),array('pages',$data)));
	}

	public function ourservice(){
	        //取出我们的服务内容
                $pages = new Pages;
                $data = $pages->query("select * from page where category=577");
                
                
                //取出左下角的查看详情
                $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/our-service.tpl',array(array('products',$products),array('pages',$data)));
	}
	
   //网上自助
	public function wszz(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		//取出左下角的查看详情
                $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/wszz.tpl',array('products',$products));
	}

	//在线客服
    public function kefu(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		//取出左下角的查看详情
                $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/kefu.tpl',array('products',$products));
	}

	//注册服务  
     public function zcfw(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		//取出左下角的查看详情
                $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/zcfw.tpl',array('products',$products));
	}

	//客户俱乐部  
    public function club(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		//取出左下角的查看详情
                $product = new Product;
		
		$product->orderBy('id','desc');
		//$product_data = $product->get();
                //print_r($product_data);
                //$products = array();
                
		$products = $product->query("select * from product limit 1");
		
		view::make('changan/club.tpl',array('products',$products));
	}

    


	
	public function lcyd(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/caxt.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}


    //长安学堂
	public function hyzx(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/hyzx.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}


   public function zcfg(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/zcfg.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}

	public function fxqzl(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/fxqzl.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}
        
        public function alfy(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/alfy.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}
	
	public function hr(){
		$single_data = subMenu::getSubmenu('jobs','parentid');
		$job = new Jobs;
		$job->orderBy('id','desc');
		$job_data = $job->get();

		view::make('changan/jobs.tpl',   array(array('active','jobs'),array('single',$single_data),array('page','jobs'),array('article',$job_data)));
	}
	
	
	public function hr_detail($id){
		$single_data = subMenu::getSubmenu('jobs','parentid');
		$job = new Jobs;
		
		$job->where('id',$id);
		$job_data = $job->get();
		//foreach($news_data as $data);
		view::make('changan/jobs_details.tpl',   array(array('active','jobs'),array('single',$single_data),array('page','jobs'),array('article',$job_data)));
	}
        
        
       
	
	
	public function page($page) {
		$category_data = subMenu::getCategory();
        //获取子类菜单
		$single_data = subMenu::getSubmenu($page,'parentid');

        //获取相关文章
        //判断是哪个模型的
        $category_dir = $this->category->get('dir', $page);
        foreach ($category_dir as $data);
		$article = subMenu::GetTableData($data['model']);
        //print_r($article);
        foreach ($article as $viewdata) {
            if ($viewdata['category'] == $data['id']) {
                view::make('changan/' . $page . '.tpl', array(
                    array(
                        'active',
                        $page
                    ) ,
                    array(
                        'article',
                        array(
                            $viewdata
                        )
                    ) ,
                    array(
                        'page',
                        $page
                    ) ,
                    array(
                        'single',
                        $single_data
                    ) 
                ));
            }
        }
        //view::make('haoxin/'.$page.'.tpl',array(array('active',$page),array('page',$page),
        //array('single',$single_data),array('category',$category_data),array("luser_start", microtime(true) - LUSER_START)));
        
    }
    public function doublePage($page1, $page2) {

        //获取子类菜单
		$single_data = subMenu::getSubmenu($page1,'parentid');


		
        $category_dir = $this->category->get('dir', $page2);
        foreach ($category_dir as $data);
		
		$article = subMenu::GetTableData($data['model']);
        foreach ($article as $viewdata) {
            if ($viewdata['category'] == $data['id']) {
                view::make('changan/' . $page1 . '.tpl', array(
                    array(
                        'active',
                        $page2
                    ) ,
                    array(
                        'article',
                        array(
                            $viewdata
                        )
                    ) ,
                    array(
                        'page',
                        $page1
                    ) ,
                    array(
                        'single',
                        $single_data
                    ) 
                ));
            }
        }
    }
	
}
?>
