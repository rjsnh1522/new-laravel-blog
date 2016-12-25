@extends('master')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <h1 id="page_title">Say Hello</h1>

    <div class="skinny_wrapper wrapper_padding">
        <label for="name">Name</label><br>
        <input type="text" id="name"><br>
        <label for="email">Email</label><br>
        <input type="text" id="email"><br>
        <label for="message">Message</label><br>
        <textarea name="" id="" cols="30" rows="10" id="message"></textarea><br>
        <input type="submit" value="Send Message">
    </div>
@endsection

@section('script')
@endsection
