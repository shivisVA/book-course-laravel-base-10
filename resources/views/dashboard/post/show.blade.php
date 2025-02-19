@extends('dashboard.master');

@section('content')

   <h1>{{$post->title }}</h1>
   <span>{{$post->posted}}</span>
   <span>{{$post->category->title}}</span>
   <div>{{$post->content }}</div>

    <div>{{$post->description }}</div>
   <img src="/uploads/posts/{{ $post->image }}" style="width:25px" alt="{{ $post->title }}">   

@endsection