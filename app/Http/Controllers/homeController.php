<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(Request $request){

        return view('homeView');
    }

    public function insertPost(Request $request,$text){
        
        $userData = $request->session()->pull('user');

        $insertToPost = DB::table('posts')->insert([
            'post' =>$text,
            'user'=>$userData->id
        ]);
        
        return view('newPost' , compact('text'));
    }
}
