<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class authController extends Controller
{
    public function index(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $inserTOtheDatabase = DB::table('users')->insert([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    
    }
}
