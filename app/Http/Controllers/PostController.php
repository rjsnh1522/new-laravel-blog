<?php

namespace App\Http\Controllers;

use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function getAddPost(){


        return view('pages.addPost');
    }

    public function postAddPost(){


        $title=Input::get('title');
        $content=Input::get('content');
        $slug=str_slug($title);

         $data=[
           'title'=>$title,
           'content'=>$content,
           'slug'=>$slug
         ];

        $rule=[
          'title'=>'required|min:5',
          'content'=>'required',
          'slug'=>'required|unique:posts'
        ];

        $validator=Validator::make($data,$rule);

        if($validator->fails()){

            Session::flash('error','Something went wrong');

            return redirect()->back();

            return 12233;

        }
        else{

            $savePost=new Post;
            $savePost->title=$title;
            $savePost->content=$content;
            $savePost->slug=$slug;
            $savePost->save();
            $data['showPost']=Post::where('slug',$slug)->first();
            Session::flash('success','Post Added Successfully');
            return redirect()->route('get.show.article',$data['showPost']->slug);

        }
    }
    public function getShowPost($slug){

        $data['post']=Post::where('slug',$slug)->first();
        return view('pages.show_article',compact('data'));

    }
}
