<?php

class BusinessController extends Controller{



	public function index(){
		
		$business = new Business;
		$business_data = $business->get();
		//print_r($business_data);
		
		view::make('haoxin/yewu/index.tpl',array(array('data',$business_data),array('tpl','haoxin/yewu/list.tpl'),array('menu','list'),array("luser_start", microtime(true) - LUSER_START)));	

	}
	
	public function yewu_list(){
			$business = new Business;
		$business_data = $business->get();
		view::make('haoxin/yewu/index.tpl',array(array('data',$business_data),array('tpl','haoxin/yewu/list.tpl'),array('menu','list'),array("luser_start", microtime(true) - LUSER_START)));
		
	}
	
	public function yewu_my(){
		$business = new Business;
		$business_data = $business->get('manager',Session::get('username'));
		view::make('haoxin/yewu/index.tpl',array(array('data',$business_data),array('tpl','haoxin/yewu/my.tpl'),array('menu','my'),array("luser_start", microtime(true) - LUSER_START)));
		
	}
	
	public function yewu_new(){
		view::make('haoxin/yewu/index.tpl',array(array('tpl','haoxin/yewu/new.tpl'),array('menu','new'),array("luser_start", microtime(true) - LUSER_START)));
		
	}
	
	public function post_new(){
		
		$data = array('company'=>Input::get('company'),
					  'name'=>Input::get('name'),
					  'content'=>Input::get('content'),
					  'area'=>Input::get('area'),
					  'contact'=>Input::get('contact'),
					  'tel'=>Input::get('tel'),
					  'address'=>Input::get('address'),
					  'manager'=>Session::get('username'),
					  'created_at'=>date('Y-m-d H:i:s')
		);
		
		$business = new Business;
		
		$business->save($data);
		
		Redirect::to('admin/yewu');
	}
	
}

?>