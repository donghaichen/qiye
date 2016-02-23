<?php

class subMenu{
	
	public static function getSubmenu($dir,$field = null){
		
		$category = new Category;
		$single_data = $category->get('dir', $dir);
        foreach ($single_data as $s);
        $category->orderBy("sortid", "asc");
		if($field){
			$single_data = $category->get($field,$s['id']);
		}
        
		return $single_data;
	}
	
	public static function getCategory(){
		$category = new Category;
        $category->orderBy("sortid", "asc");
        $category_data = $category->get();
		return $category_data;
	}
	
	public static function GetTableData($category_model,$order = 'asc'){
        $model = new Models();
        $model->orderBy("id", $order);
        $m_data = $model->get('id', $category_model);
        foreach ($m_data as $model_data);
        $article = $model->get($model_data['tablename']);
		return $article;
	}
	
	public static function GetTableName($model_id){
		
		$model = new Models();
        $model->orderBy("id", "asc");
        $m_data = $model->get('id', $model_id);
        foreach ($m_data as $model_data);
		return $model_data['tablename'];
	}
	
	public static function GetGroupTopNews(){
		$category = new Category;
		$category_dir = $category->get('dir', 'news');
        foreach ($category_dir as $data);
        //echo $data['id'];
        //echo $data['model'];
		$article = subMenu::GetTableData($data['model']);
		//print_r($data);
		//return;
        $news_data = array();
        foreach ($article as $viewdata) {
            if ($viewdata['category'] == $data['id']) {
                $news_data[] = $viewdata;
            }
        }
        //遍历出有图的新闻;
        $pic_news;
        for ($i = 0; $i < count($news_data); $i++) {
            preg_match_all('/<img.*src=[\"](.*?)[\"].*?>/', $news_data[$i]['content'], $match);
            //print_r($match);
            $pic_news = $news_data[$i];
            $pic_news['image'] = $match[1][0];
            //print_r($pic_news);
            break;
        }
		return $pic_news;
	}
	public static function GetIndustryTopNews(){
		$category = new Category;
		$category_dir = $category->get('dir', 'industry');
        foreach ($category_dir as $data);
        //echo $data['id'];
        //echo $data['model'];
		$article = subMenu::GetTableData($data['model']);
		//print_r($data);
		//return;
        $news_data = array();
        foreach ($article as $viewdata) {
            if ($viewdata['category'] == $data['id']) {
                $news_data[] = $viewdata;
            }
        }
        //遍历出有图的新闻;
        $pic_news;
        for ($i = 0; $i < count($news_data); $i++) {
            preg_match_all('/<img.*src=[\"](.*?)[\"].*?>/', $news_data[$i]['content'], $match);
            //print_r($match);
            $pic_news = $news_data[$i];
            $pic_news['image'] = $match[1][0];
            //print_r($pic_news);
            break;
        }
		return $pic_news;
	}
	
	public static function GetTopSample(){
		$category = new Category;
		$category_dir = $category->get('dir', 'office-park');
        foreach ($category_dir as $data);
        //echo $data['id'];
        //echo $data['model'];
		$article = subMenu::GetTableData($data['model'],'desc');
		return $article;

		
	}
}

?>