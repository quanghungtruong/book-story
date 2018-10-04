<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function getBookList()
    {
    	$data = \App\Models\Book::all()->where('del_flg', '=', 0);
    	return view('admin.book.list', compact('data'));
    }
}
