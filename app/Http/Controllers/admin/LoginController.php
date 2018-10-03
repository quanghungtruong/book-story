<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLogin()
    {
    	return view('admin.login');
    }

    public function doLogin()
    {

    }
}
