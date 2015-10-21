<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Reponsitories\ArticleReponsitory;
use App\Reponsitories\CategoryReponsitory;

class ArticleController extends Controller
{
	public function __construct()
	{
		view()->share('menu', 'articles');
	}

	// 文章列表，管理界面
    public function manage(ArticleReponsitory $articleReps)
    {
		view()->share('submenu', 'list');
    	$keyword = Request::input('keyword');
    	$condition = empty($keyword) ? null : ['title' => $keyword];
    	$articles = $articleReps->paginate($condition);
    	return view('admin/article-list', compact('articles', 'keyword'));
    }

    // 编辑或添加文章
    public function edit($id, ArticleReponsitory $articleReps, CategoryReponsitory $categoryReps)
    {
    	if ($id == 0) {
    		view()->share('submenu', 'add');
    	}
    	$categories = $categoryReps->all();
    	$old = Request::old() ?: [];
    	if (empty($old) && $id > 0) {
    		$article = $articleReps->byId($id);
    		$old = (array) $article;
    	}
    	return view('admin/article-edit', compact('id', 'categories', 'old'));
    }

    public function save(ArticleReponsitory $articleReps)
    {
    	$request = Request::instance();
    	$this->validate($request, [
    		'title'		=> 'required|max:32',
    		'content'	=> 'required'
    	]);
    	$res = $articleReps->save(Request::all());
    	if (!$res) {
    		return $this->error('保存文章失败', [
    			'确定' => url('admin/articles/edit/'.intval($article['id']))
    		], $article);
    	}
    	return $this->success('保存文章成功', [
    		'确定' => url('admin/articles')
    	]);
    }

    public function delete($id, ArticleReponsitory $articleReps)
    {
    	$res = $articleReps->delete($id);
    	if (!$res) {
    		return $this->error('删除文章失败', [
    			'确定' => url('admin/articles')
    		]);
    	}
    	return $this->success('删除文章成功', [
    		'确定' => url('admin/articles')
    	]);
    }
}
