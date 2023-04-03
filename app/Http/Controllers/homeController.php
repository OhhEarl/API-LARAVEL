<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        return view('homeView');
    }

    public function insertPost($text){
        $insertToPost = DB::table('posts')->insert([
            'post' =>$text,
            'user'=>1
        ]);
        return view('newPost' , compact('text'));
    }
}
