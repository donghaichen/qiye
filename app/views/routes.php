<?php


Route::get('captcha/{time}',function($time){
	
		$captcha = new ValidateCode;
		$captcha->doimg();  
		Session::set('authnum_session',$captcha->getCode());//验证码保存到SESSION中
	
	});

Route::post('admin/login','AdminController@loginCheck');
Route::post('login','HomeController@loginCheck');

Route::get('admin/login','AdminController@login');
Route::get('logout','HomeController@logout');

Route::get('admin/yewu','isadmin','BusinessController@index');
Route::get('admin/yewu/my','isadmin','BusinessController@yewu_my');
Route::get('admin/yewu/list','isadmin','BusinessController@yewu_list');
Route::get('admin/yewu/new','isadmin','BusinessController@yewu_new');
Route::post('admin/yewu/new','isadmin','BusinessController@post_new');


Route::group('auth',function(){

	Route::post('admin/dbback',function(){

		$connectid = mysql_connect('localhost','root','enlong881107');   

		$backupDir = 'data';   

		$DbBak = new DbBak($connectid,$backupDir);  

		

		$DbBak->backupDb(Input::get('dbselect')); 

		

		});

	


	Route::get('admin/site_set','AdminController@site_set');
	

	Route::post('admin/model/add','ModelController@PostModelAdd');

	Route::post('admin/model/edit/{id}','ModelController@PostModelEdit');

	Route::get('admin/model/add/{id}','ModelController@ModelAdd');

	Route::get('admin/model/{id}','ModelController@ModelView');

	Route::get('admin/model/del/{table}/{id}','ModelController@ModelDel');

	Route::get('admin/model/edit/{table}/{id}','ModelController@ModelEdit');
/*	data model */
	Route::post('admin/datamodel/add','ModelController@PostdataModelAdd');

	Route::post('admin/datamodel/edit/{id}','ModelController@PostdataModelEdit');

	Route::get('admin/datamodel/add/{id}','ModelController@dataModelAdd');

	Route::get('admin/datamodel/{id}','ModelController@dataModelView');

	Route::get('admin/datamodel/del/{table}/{id}','ModelController@dataModelDel');

	Route::get('admin/datamodel/edit/{table}/{id}','ModelController@dataModelEdit');	

/*category model*/
	Route::post('admin/categorymodel/add','ModelController@PostcategoryModelAdd');

	Route::post('admin/categorymodel/edit/{id}','ModelController@PostcategoryModelEdit');

	Route::get('admin/categorymodel/add/{id}','ModelController@categoryModelAdd');

	Route::get('admin/categorymodel/{id}','ModelController@categoryModelView');

	Route::get('admin/categorymodel/del/{table}/{id}','ModelController@categoryModelDel');

	Route::get('admin/categorymodel/edit/{table}/{id}','ModelController@categoryModelEdit');
	
/**/	

	Route::get('admin/side_content','AdminController@showSide');

	

	Route::get('admin/category','AdminController@showCategory');

	Route::post('admin/category','AdminController@CategoryAddAndUpdate');

	Route::get('admin/category/del/{id}','AdminController@CategoryDel');

	

	Route::get('admin/modelmanager','AdminController@showModelManager');

	Route::post('admin/modelmanager/add','AdminController@ModelManagerAdd');

	Route::get('admin/modelmanager/del/{id}','AdminController@ModelManagerDel');

	Route::get('admin/datamanager','AdminController@showdataManager');

	Route::post('admin/datamanager/add','AdminController@dataManagerAdd');

	Route::get('admin/datamanager/del/{id}','AdminController@dataManagerDel');

	Route::get('admin/categorymanager','AdminController@showcategoryManager');

	Route::post('admin/categorymanager/add','AdminController@categoryManagerAdd');

	Route::get('admin/categorymanager/del/{id}','AdminController@categoryManagerDel');
	

	Route::get('admin','AdminController@index');

	Route::get('admin/index','AdminController@index');

	Route::get('admin/logout','AdminController@logout');

	
	Route::get('admin/user','AdminController@showuser');
	
	Route::get('admin/home','AdminController@home');


	Route::get('admin/{page}',function($page){

			view::make('admin/'.$page.'.tpl');

		});

	Route::get('admin/m/{page}',function($page){

			view::make('admin/models/'.$page.'.tpl');

		});

	
	Route::post('admin/configs','AdminController@configs');
	

	//Route::post('admin/nav_set','AdminController@navUpdate');

		

});






Route::filter('isadmin',function(){
	if(!Auth::isAdmin())
		Redirect::to('admin/login');
});

Route::filter('auth',function(){

	if(!Auth::check())

		Redirect::to('admin/login');

	});







/*  weiyin - group */





Route::get('/','HomeController@index');
Route::get('login','HomeController@showLogin');
Route::get('register','HomeController@showRegister');
Route::post('register','HomeController@Register');
Route::post('login','HomeController@logincheck');
Route::get('logout','HomeController@logout');

Route::get('jobs','HomeController@hr');
Route::get('jobs/{id}','HomeController@hr_detail');

Route::get('about',function(){
		
		Redirect::to('about/gsjj');
	});

//产品详情
Route::get('cpxq','HomeController@cpxq');


//服务中心
Route::get('service-center',function(){
		Redirect::to('service-center/servicess');
	});
	Route::get('service-center/servicess','HomeController@servicess');       
//我们的服务	
Route::get('service-center',function(){
		Redirect::to('service-center/ourservice');
	});
	Route::get('service-center/ourservice','HomeController@ourservice');



//网上自助
Route::get('service-center',function(){
		Redirect::to('service-center/wszz');
	});
Route::get('service-center/wszz','HomeController@wszz');   
//在线客服
Route::get('service-center',function(){
		Redirect::to('service-center/kefu');
	});
Route::get('service-center/kefu','HomeController@kefu');    
//注册服务
Route::get('service-center',function(){
		Redirect::to('service-center/zcfw');
	});
Route::get('service-center/zcfw','HomeController@zcfw');
//客户俱乐部  
Route::get('service-center',function(){
		Redirect::to('service-center/club');
	});
Route::get('service-center/club','HomeController@club');  



//长安学堂
Route::get('study',function(){
		Redirect::to('study/lcyd');
	});
	
Route::get('study/lcyd','HomeController@lcyd');               

Route::get('study',function(){
        Redirect::to('study/hyzx');
});
Route::get('study/hyzx','HomeController@hyzx');

Route::get('study',function(){
        Redirect::to('study/zcfg');
});
Route::get('study/zcfg','HomeController@zcfg');                 


Route::get('study',function(){
		Redirect::to('study/fxqzl');
	});
	
Route::get('study/fxqzl','HomeController@fxqzl');

//产品详情
Route::get('service-center',function(){
		Redirect::to('service-center/our-service');
	});
Route::get('service-center/wszz','HomeController@wszz');



Route::get('info','HomeController@info');
Route::get('info/{page}','HomeController@infoPage');
Route::get('info/{page}/{id}','HomeController@infoDetails');

Route::get('product',function(){
	Redirect::to('product/xptj');
	});

Route::get('product/xptj','HomeController@xptj');

//产品详情页
Route::get('product',function(){
	Redirect::to('product/cpxqss');
	});
Route::get('product/cpxqss','HomeController@cpxqss');

Route::get('product/cpyx','HomeController@cpyx');
Route::get('product/cpyx/{filterString}','HomeController@cpyx_filter');
Route::post('product/reservation','HomeController@reservation');
	

Route::get('{page}','HomeController@page');

Route::get('{page}/{page}','HomeController@doublePage');


Route::filter('check',function(){

	if(!Session::get('auth')){
		Redirect::to('login');
	}
	});

?>