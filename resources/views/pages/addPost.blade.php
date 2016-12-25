@extends('master')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <h1 id="page_title">Say Hello</h1>

       @if(Session::has('error'))
           <p>{{Session::get('error')}}</p>
           @endif
    @if(Session::has('success'))
        <p>{{Session::get('success')}}</p>
    @endif

    <div class="skinny_wrapper wrapper_padding">
        <form action="{{route('post.add.post')}}" method="post">
        <label for="name">Title</label><br>
        <input type="text" id="name" name="title"><br>
        <label for="message">Write your article here</label><br>
        <textarea name="content" id="" cols="30" rows="10" id="message"></textarea><br>
        <input type="submit" value="Add Post">
        <input type="hidden" name="_token" value="{{Session('_token')}}">
        </form>
    </div>
@endsection

@section('script')
@endsection
