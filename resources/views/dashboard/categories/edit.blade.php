@extends('dashboard.master');

@section('content')

   @include('dashboard.fragment._errors-form')
   <form action="{{ route('categories.update',$category) }}" method="post">
      @csrf
      @method('PATCH')
       <h1>Crear Categoría</h1>
       
       @include('dashboard.categories._form')
   </form>
   

@endsection