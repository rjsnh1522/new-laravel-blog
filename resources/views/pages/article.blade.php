@extends('master')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <h1 id="page_title">Stuff I've Written</h1>
    <div class="skinny_wrapper" id="posts_wrapper">
        <div class="post">
            <p class="date">
                Friday April 10th
            <h2><a href="#">TO Do List</a></h2>
            </p>
            <hr>
        </div>
        <div class="post">
            <p class="date">
                Friday April 10th
            <h2><a href="#">TO Do List</a></h2>
            </p>
            <hr>
        </div>
        <div class="post">
            <p class="date">
                Friday April 10th
            <h2><a href="#">TO Do List</a></h2>
            </p>
            <hr>
        </div>
        <div class="pagination">
        <span class="previous_page disabled">
            Prev
        </span>
            <em class="current">1</em>
            <a href="#" rel="next">2</a>
            <a href="#" class="next_page" href="#">Next</a>
        </div>
    </div>
@endsection

@section('script')
@endsection
