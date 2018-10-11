<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Requests\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CategoryController ;
use App\Models\Category;

class CategoryController extends Controller
{
	public function getCate()
	{
		$data['list'] = Category::all();
		return view('admin.category.form', compact('data'));
	}

	public function postCate(CategoryRequest $request)
	{
		$cate = new Category();
		$cate->cat_name = $request->cat_name;
		$cate->alias = $request->alias;
		$cate->parent_id = $request->parent_id;
		$cate->save();
		return redirect()->route('list');
	}

	public function listCate()
	{
		$data = Category::all();
		return view('admin.category.list', compact('data'));
	}

	public function delCate($id)
	{
		$del = \App\Models\Category::where('id', $id)->delete();
		return redirect()->route('list')->with(['status'=>'success', 'message'=>'Delete Category Success !']);
	}

	public function showEditCate($id)
	{
		$data['cate'] = Category::find($id);
		$data['list'] = Category::all();
		return view('admin.category.Form', compact('data'));
	}
}
