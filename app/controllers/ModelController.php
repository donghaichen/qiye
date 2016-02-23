<?php

class ModelController extends Controller{
    /**/
    public function ModelView($id) {

        $model = new Models();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
        $single_data = $model->get('id', $id);
        foreach ($single_data as $s)
            $model_data = $model->get($s['tablename']);

        $category = new Category();
        $category_data = $category->get();
        ////print_r	($category_data);
        view::make('admin/m_view.tpl', array(
            array(
                'category',
                isset($category_data)?$category_data:array()
            ) ,
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'model_data',
                $model_data
            ),
			array('has_category','1'),
			array('model_type','model')
        ));
    }
    //post add
    public function PostModelAdd() {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new Models();
        $data = $model->get('id', $id);
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);

		
        foreach ($field as $fdata) {
            $input_data  = Input::get($fdata['tablename']); //这里获取数据
			//print_r($input_data);
			//判断是不是上传类型
			if(is_array($input_data)){ //是上传类型则 保存文件 再保存文件路径
					$upload = new upload_file;
					$upload->set_file_type($input_data['type']);   # 获得文件类型
					$upload->set_file_name($input_data['name']);   # 获得文件名称
					$upload->set_file_size($input_data['size']);   # 获得文件尺寸
					$upload->set_upfile($input_data['tmp_name']);  # 服务端储存的临时文件名
					$upload->set_size(1000);               # 设置最大上传KB数
					$upload->set_base_directory("uploadImages");    # 文件存储根目录名称
					$upload->set_url(url::baseUrl());             # 文件上传成功后跳转的文件
					$upload->save();                  # 保存文件
					$filepath[] = $upload->file_path;
					$input_data = $filepath;
					$Input[$fdata['tablename']] = $input_data[0];
					
			}else{
			
				$Input[$fdata['tablename']] = $input_data;
			}

	
        }
		$category_id = Input::get('category');
		
        $Input['category'] = !empty($category_id) ? $category_id : 0;
        //print_r($Input);
        echo $tableName;
        $model->insert($tableName, $Input);
        Redirect::to('admin/model/' . $id);
    }
    public function PostModelEdit($postid) {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new Models();
        $model->orderBy("sortid", "asc");
        $data = $model->get('id', $id);
		//print_r($data);
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);
		//print_r($field);
        foreach ($field as $fdata) {
            $Input[$fdata['tablename']] = Input::get($fdata['tablename']);
        }
        $Input['category'] = Input::get('category');
        ////print_r($Input);
        //echo $tableName;
        $model->update($tableName, $Input, $postid);
        Redirect::to('admin/model/' . $id);
    }
	
    public function ModelAdd($id) {
		$model = new Models();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
        $single_data = $model->get('id', $id);;
        $article = new Category();
        $article->orderBy("sortid", "asc");
        $category_data = $article->get('model', $id);
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);
        view::make('admin/m_add.tpl', array(
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'category',
                $category_data
            ),
			array('has_category','1'),
			array('model_type','model')
        ));
    }
    public function ModelDel($page, $id) {
        $model = new Models();
        $model_data = $model->get('parent', '0');
        $model->del('id = ' . $id, $page);
        echo "modelid = " . $page . "<br>";
        echo "tableid = " . $id;
        foreach ($model_data as $md) {
            if ($md['tablename'] == $page) {
                Redirect::to('admin/model/' . $md['id']);
            }
        }
    }
    public function ModelEdit($page, $id) {
        $model = new Models();
        $model_data = $model->get('parent', '0');
        foreach ($model_data as $md) {
            if ($md['tablename'] == $page) {
                $model_id = $md['id'];
            }
        }
        $pageContent = array();
        $pagedata = $model->get($page);
        ////print_r($pagedata);
		//获取导航关联了
        foreach ($pagedata as $pdata) {
            if ($pdata['id'] == $id) { //获取模型数据 比较后 获取模型关联的导航分类
                $category_id = $pdata['category'];
                $pageContent = $pdata;
            }
        }
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $model_id);
        $single_data = $model->get('id', $model_id);
		
		
		//当有关联导航栏目的时候 才会获取导航数据
		if($category_id){
		
        	$article = new Category();
       	    $category_data = $article->get('id', $category_id);
		
		}
		
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);
        view::make('admin/m_edit.tpl', array(
            array(
                'content',
                $pageContent
            ) ,
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'category',
                isset($category_data)?$category_data:array()
            ),
			array('has_category','1'),
			array('model_type','model')
        ));
    }
	
    /**/
    public function dataModelView($id) {

        $model = new DataModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
        $single_data = $model->get('id', $id);
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);

        $category = new Category();
        $category_data = $category->get();
        ////print_r	($model_data);
        view::make('admin/m_view.tpl', array(
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'model_data',
                $model_data
            ),

			array('model_type','datamodel')
        ));
    }
    //post add
    public function PostdataModelAdd() {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new DataModel();
        $data = $model->get('id', $id);
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);
        foreach ($field as $fdata) {
            $Input[$fdata['tablename']] = Input::get($fdata['tablename']);
        }
        //$Input['category'] = Input::get('category');
        echo $tableName;
        $model->insert($tableName, $Input);
        Redirect::to('admin/datamodel/' . $id);
    }
    public function PostdataModelEdit($postid) {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new DataModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('id', $id);
		
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);
        foreach ($field as $fdata) {
            $Input[$fdata['tablename']] = Input::get($fdata['tablename']);
        }
        //$Input['category'] = Input::get('category');
        //echo $tableName;
        $model->update($tableName, $Input, $postid);
        Redirect::to('admin/datamodel/' . $id);
    }
	
    public function dataModelAdd($id) {
		$model = new DataModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
        $single_data = $model->get('id', $id);;
        $article = new Category();
        $article->orderBy("sortid", "asc");
        $category_data = $article->get('model', $id);
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);
        view::make('admin/m_add.tpl', array(
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'category',
                $category_data
            ),
			array('model_type','datamodel')
        ));
    }
    public function dataModelDel($page, $id) {
        $model = new DataModel();
        $model_data = $model->get('parent', '0');
        $model->del('id = ' . $id, $page);
        echo "modelid = " . $page . "<br>";
        echo "tableid = " . $id;
        foreach ($model_data as $md) {
            if ($md['tablename'] == $page) {
                Redirect::to('admin/datamodel/' . $md['id']);
            }
        }
    }
	/*
	
	数据模型的错误地方在于 因为没有 category 的原因 把 category 删了就可以 应该就是这样
	
	*/
	
	
    public function dataModelEdit($page, $id) {
        $model = new DataModel();
        $model_data = $model->get('tablename', $page);
      	////print_r($model_data);
		foreach($model_data as $m_data );
		$model_id = $m_data['id'];
		//echo $model_id;
		
		//获取数据 
        $single_data = $model->get($page,'id',$id);
		foreach($single_data as $tableData);
        ////print_r($single_data);
		
		//获取数据结构
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $model_id);
		
		////print_r($single_data);
		
        view::make('admin/m_edit.tpl', array(
            array(
                'content',
                $tableData
            ) ,
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $model_data //数据模型列表中 的id
            ) ,
			array('model_type','datamodel')
        ));
    }	
    /**/
    public function categoryModelView($id) {

        $model = new CategoryModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
		
        $single_data = $model->get('id', $id);
	
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);


        ////print_r	($model_data);
        view::make('admin/m_view.tpl', array(
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'model_data',
                $model_data
            ),

			array('model_type','categorymodel')
        ));
    }
    //post add
    public function PostcategoryModelAdd() {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new CategoryModel();
        $data = $model->get('id', $id);
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);
        foreach ($field as $fdata) {
            $Input[$fdata['tablename']] = Input::get($fdata['tablename']);
        }
        //$Input['category'] = Input::get('category');
        $model->insert($tableName, $Input);
       Redirect::to('admin/categorymodel/' . $id);
    }
    public function PostcategoryModelEdit($postid) {
        //先看是哪个表的,字段都是什么,一个个添加进去
        $id = Input::get('model');
        //判断模型表格名称和字段名称
        $model = new CategoryModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('id', $id);
        foreach ($data as $temp);
        $tableName = $temp['tablename'];
        $model->orderBy("id", "asc");
        $field = $model->get('parent', $temp['id']);
        foreach ($field as $fdata) {
            $Input[$fdata['tablename']] = Input::get($fdata['tablename']);
        }
        //$Input['category'] = Input::get('category');
        ////print_r($Input);
        //echo $tableName;
        $model->update($tableName, $Input, $postid);
        Redirect::to('admin/categorymodel/' . $id);
    }
	
    public function categoryModelAdd($id) {
		$model = new CategoryModel();
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $id);
        $single_data = $model->get('id', $id);;
        $article = new Category();
        $article->orderBy("sortid", "asc");
        $category_data = $article->get('model', $id);
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);
        view::make('admin/m_add.tpl', array(
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'category',
                $category_data
            ),
			array('model_type','categorymodel')
        ));
    }
    public function categoryModelDel($page, $id) {
        $model = new CategoryModel();
		
		//删除
        $model_data = $model->get('parent', '0');
        $model->del('id = ' . $id, $page);

		$model_data = $model->get('tablename',$page);

        Redirect::to('admin/categorymodel/' .$model_data[0]['id']);
   
    }
    public function categoryModelEdit($page, $id) {
        $model = new CategoryModel();
        $model_data = $model->get('parent', '0');
        foreach ($model_data as $md) {
            if ($md['tablename'] == $page) {
                $model_id = $md['id'];
            }
        }
        $pageContent = array();
        $pagedata = $model->get($page);
        ////print_r($pagedata);
        foreach ($pagedata as $pdata) {
            if ($pdata['id'] == $id) {
                $category_id = $pdata['category'];
                $pageContent = $pdata;
            }
        }
        $model->orderBy("sortid", "asc");
        $data = $model->get('parent', $model_id);
        $single_data = $model->get('id', $model_id);
        $article = new Category();
        $category_data = $article->get('id', $category_id);
        foreach ($single_data as $s);
        $model_data = $model->get($s['tablename']);
        view::make('admin/m_edit.tpl', array(
            array(
                'content',
                $pageContent
            ) ,
            array(
                'm_data',
                $data
            ) ,
            array(
                'single',
                $single_data
            ) ,
            array(
                'category',
                $category_data
            ),
			array('model_type','categorymodel')
        ));
    }	

}