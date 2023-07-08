<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show_login_view(){
//return view ('admin.auth.login');
        $admin['name']="seddar mohammed";
        $admin['email']="seddar@gmail.com";
        $admin['username']="seddar";
        $admin['password']=bcrypt("admin");
        $admin['active'] = "1";
        $admin['date'] = date("Y-m-d");
        $admin['com_code'] = 1;
        $admin['added_by'] = 1;
        $admin['updated_by'] = 1;
        Admin::create($admin);
    }

    public function login(){

    }
}
