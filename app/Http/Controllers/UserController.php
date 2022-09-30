<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vcard;
use Auth;


class UserController extends Controller
{
    public function index(){
        $data['myContacts'] = Vcard::where("user_id",Auth::id())->get();
        return view("user/home",$data);
    }

    
}
