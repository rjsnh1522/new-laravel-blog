<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PageGetterController extends Controller
{
    public function getIndex()
    {
        
        $data['post']=DB::table('posts')
            ->orderBy('created_at', 'desc')->limit(3)
            ->get();


        return view('pages.index',compact('data'));
    }


    public function getArticles(){

        return view('pages.articles');

    }
}
