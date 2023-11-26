<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;

class AdminAuthController extends Controller
{
    public function view_admin_register(){
        return view('admin.adminLogin');
    }
    
}
