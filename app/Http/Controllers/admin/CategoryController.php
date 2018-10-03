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
		return view('admin.category.form');
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
}
