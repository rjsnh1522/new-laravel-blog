<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageGetterController extends Controller
{
    public function getIndex()
    {
        return view('pages.index');
    }


    public function getArticles(){

        return view('pages.articles');

    }
}
