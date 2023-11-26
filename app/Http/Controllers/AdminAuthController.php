<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;
use DB;

class AdminAuthController extends Controller
{
    public function view_admin_register(){
        return view('admin.adminLogin');
    }
    

    // Admin Login
    public function login(Request $request){

        try {
            $email = $request->get('email');
            $password = $request->get('password');

            if (Auth::attempt(['email' => $email, 'password' => $password], true)) {

                // Authentication passed...
                return response()->json(["status" => 200, "redirect" => '/view_admin_request_quotations']);

            } else {
                return "201";
            }
        } catch(Exception $ex) {
            return $ex;
        }
    }

    // Admin Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/view_admin_register');
    }
}
