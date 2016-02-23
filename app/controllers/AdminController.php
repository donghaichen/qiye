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

class AdminController extends Controller {
    public function __construct() {
    }
    public function index() {
        view::setTitle('Meetsh后台管理系统');
        view::make('admin/index.tpl');
        //echo "this is index";
        
    }
    public function site_set() {
        $configs = new Configs;
        $config_data = $configs->get();
        view::make('admin/site_set.tpl', array(
            'site_set',
            $config_data
        ));
    }
    
    //修改密码
    public function update_pass(){
        
        view::make('admin/update_pass.tpl');
    }
    
    public function update_pass_check(){
        
        $username = $_SESSION['auth'];
        
        $users = new User;
        $data = $users->query("select * from users where username='$username'");
        
        $userdata = array(
            'passwd' => Input::get('p') ,
            'passwded' => Input::get('p1') 
        );
        //print_r($data);
        $password = $userdata['passwd'];
        
        
        if($userdata['passwd']==$userdata['passwded']){
             
            $users->query("update users set password='$password' where username='$username'");
            echo "<script>alert('修改成功');</script>";
        }

    }
    
    
    public function configs() {
        $data = array(
            'sinaweibo' => Input::get('sina')
        );
        $configs = new Configs;
        $configs->save($data);
        $config_data = $configs->get();
        view::make('admin/site_set.tpl', array(
            'site_set',
            $config_data
        ));
    }
    public function home() {
        $ServerInfo = new ServerInfo();
        view::bindParam('servertime', $ServerInfo->GetServerTime());
        view::bindParam('ServerSoftwares', $ServerInfo->GetServerSoftwares());
        view::bindParam('PhpVersion', $ServerInfo->GetPhpVersion());
        view::bindParam('MysqlVersion', $ServerInfo->GetMysqlVersion());
        view::bindParam('HttpVersion', $ServerInfo->GetHttpVersion());
        view::bindParam('DocumentRoot', $ServerInfo->GetDocumentRoot());
        view::bindParam('MaxExecutionTime', $ServerInfo->GetMaxExecutionTime());
        view::bindParam('ServerFileUpload', $ServerInfo->GetServerFileUpload());
        view::bindParam('RegisterGlobals', $ServerInfo->GetRegisterGlobals());
        view::bindParam('SafeMode', $ServerInfo->GetSafeMode());
        view::bindParam('GdVersion', $ServerInfo->GetGdVersion());
        view::bindParam('MemoryUsage', $ServerInfo->GetMemoryUsage());
        //print_r($data);
        view::make('admin/home.tpl');
    }
    
    //除了管理员外都只能看到自己
    public function showuser() {
        $users = new User;
        
        $username = $_SESSION['auth'];
        
        if($username!='admin'){
            $user_data = $users->query("select * from users where username='$username'");
        }else{
            $user_data = $users->query("select * from users");
        }
        
        view::make('admin/user.tpl', array(
            'user_data',
            $user_data
        ));
    }
    
    //删除用户操作
    public function delete_show(){
        view::make('admin/user.tpl');  
    }
    public function delete_user(){
        
        $users = new User;
        
        $userdata = array(
            'id' => Input::get('id')
        );
        $id = $userdata['id'];
        $user_data = $users->query("delete from users where id=$id");
        
        if(!$user_data){
            echo "<script>alert('删除成功');</script>";
        }else{
            echo "<script>alert('删除失败');</script>";
        }
    }
    
    //编辑用户操作
    public function edit_user(){
        
    }
    
  
    
    
    public function login() {
        view::setTitle('Admin Panel Login');
        
        view::make('admin/login.tpl');
    }
    public function logout() {
        Session::destroy();
        Redirect::to('admin');
    }
    public function loginCheck() {
        //view::setTitle('这是一个标题');
        //view::make('admin/login.tpl');
        $userdata = array(
            'username' => Input::get('u') ,
            'password' => Input::get('p') ,
        );
        $username = Input::get('u');
        
        
        if($username!="admin"){
            echo "<script>alert('对不起，您不是管理员，不能进入到后台');window.location.href='{$base_url}';</script>";
            exit;
        }
        
        if (Auth::login($userdata)) {
            Session::set('auth', $username);
            Redirect::to('admin');
        } else Redirect::to('admin/login');
    }
    public function showcategoryManager() {
        $model = new CategoryModel;
        
        $model->orderBy("sortid", "asc");
        $model_data = $model->get();
        $model_type = new ModelType;
        $model_type_data = $model_type->get();
        view::make('admin/category_model.tpl', array(
            array(
                'model_type',
                $model_type_data
            ) ,
            array(
                'model',
                $model_data
            )
        ));
    }
    public function categoryManagerAdd() {
        $model = new CategoryModel();
        $model_type = new ModelType;
        $data = Input::getAll(array(
            'id',
            'name',
            'table',
            'type',
            'parent',
            'sortid',
            'field',
            'size',
            'Required',
            'isNav',
            'isEditable',
            'isSearchable'
        ));
        for ($i = 0; $i < count($data['name']); $i++) {
            if ($data["id"][$i] == - 1) {
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0
                );
                //print_r($d);
                $model->save($d);
                echo $data['parent'][$i];
                if (!$data['parent'][$i]) $model->create($data["table"][$i], array(
                    'category' => 'INT(11) NOT NULL'
                ));
                else {
                    $model_type_data = $model_type->get('id', $data['type'][$i]);
                    foreach ($model_type_data as $type_data);
                    $model->AddColumn($data["table"][$i], $data["field"][$i], $type_data['type'], $data['size'][$i], $data['Required'][$i] ? 'NOT NULL' : 'NULL');
                }
            } else {
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0
                );
                //print_r($d);
                //echo $data['id'][$i];
                $model->update($d, $data['id'][$i]);
            }
        }
        Redirect::to('admin/categorymanager');
    }
    public function categoryManagerDel($id) {
        $model = new CategoryModel();
        $data = $model->get('id', $id);
        foreach ($data as $table);
        if ($table['parent'] > 0) {
            $pData = $model->get('id', $table['parent']);
            foreach ($pData as $ptable);
            //echo $ptable['table']; //parent table
            //echo $table['table']; //field
            $model->DropColumn($ptable['tablename'], $table['tablename']);
        } else {
            echo $table['tablename'];
            $model->drop($table['tablename']);
        }
        $model->del('id = ' . $id);
        Redirect::to('admin/categorymanager');
    }
    public function dataManagerDel($id) {
        $model = new DataModel();
        $data = $model->get('id', $id);
        foreach ($data as $table);
        if ($table['parent'] > 0) {
            $pData = $model->get('id', $table['parent']);
            foreach ($pData as $ptable);
            //echo $ptable['table']; //parent table
            //echo $table['table']; //field
            $model->DropColumn($ptable['tablename'], $table['tablename']);
        } else {
            echo $table['tablename'];
            $model->drop($table['tablename']);
        }
        $model->del('id = ' . $id);
        Redirect::to('admin/datamanager');
    }
    public function showdataManager() {
        $model = new DataModel;
        $model->orderBy("sortid", "asc");
        $model_data = $model->get();
        $model_type = new ModelType;
        $model_type_data = $model_type->get();
        view::make('admin/data_model.tpl', array(
            array(
                'model_type',
                $model_type_data
            ) ,
            array(
                'model',
                $model_data
            )
        ));
    }
    public function showModelManager() {
        $model = new Models;
        $model->orderBy("sortid", "asc");
        $model_data = $model->get();
        $model_type = new ModelType;
        $model_type_data = $model_type->get();
        view::make('admin/model.tpl', array(
            array(
                'model_type',
                $model_type_data
            ) ,
            array(
                'model',
                $model_data
            )
        ));
    }
    public function dataManagerAdd() {
        $model = new DataModel();
        $model_type = new ModelType;
        $data = Input::getAll(array(
            'id',
            'name',
            'table',
            'type',
            'parent',
            'sortid',
            'field',
            'size',
            'Required',
            'isNav',
            'isEditable',
            'isSearchable'
        ));
        for ($i = 0; $i < count($data['name']); $i++) {
            if ($data["id"][$i] == - 1) {
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0
                );
                //print_r($d);
                $model->save($d);
                echo $data['parent'][$i];
                if (!$data['parent'][$i]) $model->create($data["table"][$i], array(
                    'category' => 'INT(11) NOT NULL'
                ));
                else {
                    $model_type_data = $model_type->get('id', $data['type'][$i]);
                    foreach ($model_type_data as $type_data);
		
                    $model->AddColumn($data["table"][$i], $data["field"][$i], $type_data['type'], $data['size'][$i], $data['Required'][$i] ? 'NOT NULL' : 'NULL');
                }
            } else {
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0
                );
                //print_r($d);
                //echo $data['id'][$i];

                $model->update($d, $data['id'][$i]);
            }
        }
        Redirect::to('admin/datamanager');
    }
    public function ModelManagerAdd() {
        $model = new Models();
        $model_type = new ModelType;
        $data = Input::getAll(array(
            'id',
            'name',
            'table',
            'type',
            'parent',
            'sortid',
            'field',
            'size',
            'Required',
            'isNav',
            'isEditable',
            'isSearchable'
        ));
        for ($i = 0; $i < count($data['name']); $i++) {
            if ($data["id"][$i] == - 1) {
					
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0,
					'datasource' => $data['type'][$i] == 7 ? $data['size'][$i] : NULL
                );
               // print_r($d);
                $model->save($d);
                //echo $data['parent'][$i];
                if (!$data['parent'][$i]) $model->create($data["table"][$i], array(
                    'category' => 'INT(11) NOT NULL'
                ));
                else {
                    $model_type_data = $model_type->get('id', $data['type'][$i]);
                    foreach ($model_type_data as $type_data);
					
					
					//print_r($data);
					//判断是不是组合框
					if($data['type'][$i] == 7){
						$data['size'][$i] = 255;
						
					}	
					
					
                    $model->AddColumn($data["table"][$i], $data["field"][$i], $type_data['type'], $data['size'][$i], $data['Required'][$i] ? 'NOT NULL' : 'NULL');
                }
            } else {
                $d = array(
                    'name' => $data["name"][$i],
                    'tablename' => $data['parent'][$i] > 0 ? $data['field'][$i] : $data['table'][$i],
                    'type' => !empty($data['type'][$i]) ? $data['type'][$i] : 0,
                    'parent' => !empty($data['parent'][$i]) ? $data['parent'][$i] : 0,
                    'size' => !empty($data['size'][$i]) ? $data['size'][$i] : 0,
                    'sortid' => !empty($data['sortid'][$i]) ? $data['sortid'][$i] : 0,
                    'required' => !empty($data['Required'][$i]) ? $data['Required'][$i] : 0,
                    'isnav' => !empty($data['isNav'][$i]) ? $data['isNav'][$i] : 0,
                    'iseditable' => !empty($data['isEditable'][$i]) ? $data['isEditable'][$i] : 0,
                    'issearchable' => !empty($data['isSearchable'][$i]) ? $data['isSearchable'][$i] : 0
                );
                //print_r($d);
                //echo $data['id'][$i];
                $model->update($d, $data['id'][$i]);
            }
        }
        Redirect::to('admin/modelmanager');
    }
    public function ModelManagerDel($id) {
        $model = new Models();
        $data = $model->get('id', $id);
        foreach ($data as $table);
        if ($table['parent'] > 0) {
            $pData = $model->get('id', $table['parent']);
            foreach ($pData as $ptable);
            //echo $ptable['table']; //parent table
            //echo $table['table']; //field
            $model->DropColumn($ptable['tablename'], $table['tablename']);
        } else {
            echo $table['tablename'];
            $model->drop($table['tablename']);
        }
        $model->del('id = ' . $id);
        Redirect::to('admin/modelmanager');
    }
    public function showSide() {
        $model = new Models;
        $data = $model->get('parent', '0');
        $data_model = new DataModel;
        $dataModel_data = $data_model->get('parent', '0');
        $category_model = new CategoryModel;
        $categoryModel_data = $category_model->get('parent', '0');
        view::make('admin/side_content.tpl', array(
            array(
                'category_model',
                $categoryModel_data
            ) ,
            array(
                'data_model',
                $dataModel_data
            ) ,
            array(
                'side_data',
                $data
            )
        ));
    }

    public function showCategory() {
        $article = new Category();
        $article->orderBy("sortid", "asc");
        $data = $article->get();
        $model = new Models();
        $model_data = $model->get('parent', '0');
        view::make('admin/category.tpl', array(
            array(
                'model',
                $model_data
            ) ,
            array(
                'category',
                $data
            )
        ));
    }
    public function CategoryAddAndUpdate() {
        $category = new Category();
        $data = Input::getAll(array(
            'id',
            'sortid',
            'title',
            'dir',
            'parentid',
            'model'
        ));
        for ($i = 0; $i < count($data['title']); $i++) {
            if ($data["id"][$i] != - 1) {
                $d = array(
                    'title' => $data["title"][$i],
                    'sortid' => $data['sortid'][$i],
                    'dir' => isset($data['dir'][$i]) ? $data['dir'][$i] : "",
                    'parentid' => isset($data['parentid'][$i]) ? $data['parentid'][$i] : 0,
                    'model' => $data['model'][$i]
                );
                //print_r($d);
                $category->update($d, $data["id"][$i]);
            } else {
                $d = array(
                    'title' => $data["title"][$i],
                    'sortid' => $data['sortid'][$i],
                    'dir' => isset($data['dir'][$i]) ? $data['dir'][$i] : "",
                    'parentid' => isset($data['parentid'][$i]) ? $data['parentid'][$i] : 0,
                    'model' => $data['model'][$i]
                );
                $category->save($d);
            }
        }
        Redirect::to('admin/category');
    }
    public function CategoryDel($id) {
        $category = new Category();
        $data = $category->get();
        foreach ($data as $d) {
            if ($d['parentid'] == $id) $category->del('id = ' . $d['id']);
        }
        $category->del('id = ' . $id);
        Redirect::to('admin/category');
    }
}
?>
