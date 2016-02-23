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
		$article_data = $article->get();
		
		
		$link = new Link;
		$link_data = $link->get();

		$product = new Product;
		$products= $product->query("select * from product order by id desc limit 5");
		
		view::make('changan/index.tpl',array(array('products',$products),array('link',$link_data),array('article',$article_data)));
		
    }
	
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
        $users->save($data);
       	echo '<script>alert("新用户注册成功，请用您注册时填写的“姓名/机构名”和“密码”进行登陆");document.location.href="/login";</script>';
	}
		
	public function logincheck(){

  		$users = new User;
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
	//产品详情
    public function cpxq(){
	    view::make('changan/cpxqs.tpl');
	}


	public function info(){
		$article = new Article;
		$article_data = $article->get();

		print_r($article_data);
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
		
		view::make('changan/infoall.tpl',array(array('page','info'),array('single',$single_data),array('article',$article_data)));
	}
	
   
	
	public function infoPage($page){
	
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
		
		
		
		//echo $s['id'];
		//print_r($category_data);
		//print_r($article_data);
		
		
		view::make('changan/info.tpl',array(array('active',$page),array('page','info'),array('single',$single_data),array('article',$article_data)));
	}
	
	public function infoDetails($page,$id){
	
        //获取子类菜单
		$single_data = subMenu::getSubmenu('info','parentid');
		
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
		
		
		view::make('changan/cpxq.tpl',array(array('active',$page),array('page','info'),array('single',$single_data),array('article',$article_data)));	
	}
	
	
	
	public function xptj(){
		
		$product = new Product;
		$product->orderBy('id','desc');
		$product_data = $product->get();
		
		
		view::make('changan/xptj.tpl',array('product',$product_data));
	}
	
	public function cpyx(){
		Redirect::to("/product/cpyx/ ");
	}

	public function cpyx_filter($filterString){
		$filterString=urldecode($filterString);
		$default='{"status":{},"yuqi":{},"money":{},"month":{},"company":{},"area":{}}';
		$filterString=empty($filterString)?$default:$filterString;
		$filter=json_decode($filterString,true);
		$product = new Product;
		$product_data = $product->get();
		$properties=array(
			"area"=>array(),
			"status"=>array(),
			"company"=>array()
		);
		for($i=0,$l=count($product_data);$i<$l;$i++){
			$item=$product_data[$i];
			//pick properties
			foreach ($properties as $key => $value) {
				if(!isset($properties[$key][$item[$key]]))
					$properties[$key][$item[$key]]=true;
			}
			//filter items
			foreach($filter as $key=>$value){
				$val=$item[$key];
				if(isset($value["value"]) && $value["value"]!=md5($val))
					$product_data[$i]["selected"]=false;
				if(isset($value["min"]) && $value["min"] <=$val)
					$product_data[$i]["selected"]=false;
				if(isset($value["max"]) && $value["max"]>$val)
					$product_data[$i]["selected"]=false;
			}
		}
		$products=array();
		for($i=0,$l=count($product_data);$i<$l;$i++){
			if(!isset($product_data[$i]["selected"]))
				$products[]=$product_data[$i];
		}
		view::make('changan/cpyx.tpl',array(array('pCount',count($products)),array('product',$products),array('filter',$filterString),array('filter_data',$properties)));
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
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		view::make('changan/service.tpl');
	}

	public function ourservice(){
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		view::make('changan/our-service.tpl');
	}
	
   //网上自助
	public function wszz(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/wszz.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}

	//在线客服
    public function kefu(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/kefu.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}

	//注册服务  
     public function zcfw(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/zcfw.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
	}

	//客户俱乐部  
    public function club(){
		
		$lczs = new Licaizhishi;
		$lczs_data = $lczs->get();
		
		$alfx = new Anlifenxiang;
		$alfx_data = $alfx->get();
		
		$lcwd = new Licaiwenda;
		$lcwd_data = $lcwd->get();
		
		
		
		view::make('changan/club.tpl',array(array('lczs',$lczs_data),array('alfx',$alfx_data),array('lcwd',$lcwd_data)));
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


    //尝试修改
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
