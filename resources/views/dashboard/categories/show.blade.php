@extends('dashboard.master');

@section('content')

   @include('dashboard.fragment._errors-form')
  
      @csrf
       <h2>Detalle Categoría</h2>
       <a href="/categories">Home</a>
       <br>
       <label>Titulo</label>
       <p>{{ $category->title }}</p>
       <br>
       <br>
       <label>Slug</label>
       <p>{{ $category->slug }}</p>
       
  
   

@endsection