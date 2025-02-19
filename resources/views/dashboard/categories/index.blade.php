@extends('dashboard.master')

@section('content')
   <h1>Categorias</h1>
   <a href="{{ route('categories.create') }}" target="blank">NuevaCategoria</a>
   <ul>
      
         @foreach($categories as $item)
         <li>
            {{ $item->title}}
            <a href="{{ route('categories.show',$item) }}">Detalles</a>
            <a href="{{ route('categories.edit',$item) }}">Editar</a>
           <form action="{{ route('categories.destroy', $item) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form>

         </li>
         @endforeach
       {{ $categories->links() }}
   </ul>