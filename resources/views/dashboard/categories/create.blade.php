@extends('dashboard.master');

@section('content')

   @include('dashboard.fragment._errors-form')
   <form action="/categories" method="post">
      @csrf
       <h1>Crear Categoría</h1>
       
       @include('dashboard.categories._form')
   </form>
   

@endsection