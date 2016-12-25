@extends('master')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <div id="post_show_content" class="skinny_wrapper">
        @if(Session::has('error'))
            <p>{{Session::get('error')}}</p>
        @endif
        @if(Session::has('success'))
            <p>{{Session::get('success')}}</p>
        @endif
        <header>
            {{--<p class="date">Friday April 10th</p>--}}
            <p class="date">{{date('F j, Y'),strtotime($data['post']->created_at)}}</p>
            <h1>{{$data['post']->title}}</h1>
            <hr>
        </header>

        <div id="content">

            {{$data['post']->content}}
            <hr>
            <div id="share_box">
                <p>Share The Do List</p>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i>
                </a>
                <a href=""><i class="fa fa-google-plus"></i>
                </a>
            </div>
            <hr>

        </div>
    </div>

@endsection

@section('script')
@endsection
