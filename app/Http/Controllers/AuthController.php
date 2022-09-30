<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $req){
        if($req->isMethod("post")){
            $data = $req->only("email","password");
            if(Auth::attempt($data)){
                return redirect()->route('homepage');
            }
            else{
                echo "fail";
            }
        }
        return view("user.login");
    }
    public function adminLogin(Request $req){
        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::guard('admin')->attempt($data)){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with("msg","login fail try again ");
            }
        }
        return view("admin.adminLogin");
    }
    public function logout(){
        Auth::logout();
        return  redirect()->back();
    }
    
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return  redirect()->back();
    }
    
    public function register(Request $req){
        if($req->isMethod("post")){
            $data = $req->only(["name","password","email"]);

            User::create($data);

            return redirect()->route('signup');
        }

        return view("user.register");
    }

    public function forgetPassword(){
        return "sorry ye aabhi nahi";
    }


}