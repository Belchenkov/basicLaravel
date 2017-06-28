@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, totam perspiciatis, pariatur ipsa vero odit asperiores sint, sed sequi tenetur temporibus dolor iure. Deserunt voluptatum vitae cupiditate nobis necessitatibus sapiente labore dignissimos laudantium debitis, quos, omnis animi mollitia explicabo voluptate nisi corrupti, quam ea obcaecati aliquid in repudiandae architecto! Eius.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection

