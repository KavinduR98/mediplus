<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;
use DB;

class UserAuthController extends Controller
{
    public function index(){
        return view('user.userLogin');
    }


    public function view_user_register(){
        return view('user.userRegister');
    }

    //User Register 
    public function register(Request $request)
    {

        try{
        
            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->address = $request->get('address');
            $user->phone = $request->get('phone');
            $user->dob = $request->get('dob');
            $user->password = $request->get('password');
    
            if($user->save()){
                return response()->json(["status" => 200, "redirect" => '/']);
            }else{
                return response()->json(["status" => "failed"]);
            }

        }catch(Exception $ex){
            return $ex;
        }
    }

    // User Login
    public function login(Request $request){

        try {
            // return $request;
            $email = $request->get('email');
            $password = $request->get('password');

            if (Auth::attempt(['email' => $email, 'password' => $password], true)) {

                // Authentication passed...
                return response()->json(["status" => 200, "redirect" => '/view_upload_prescription']);

            } else {
                return "201";
            }
        } catch(Exception $ex) {
            return $ex;
        }
    }

    // User Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
