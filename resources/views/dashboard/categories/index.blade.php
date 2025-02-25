@extends('dashboard.master')

@section('content')

   <h1>Categorias</h1>
   <a class="btn btn-primary my-3"href="{{ route('categories.create') }}" target="blank">NuevaCategoria</a>
   <table class="table">
      <thead>
         <tr>
            <th>
               Id
            </th>
            <th>
               Title
            </th>
            <th>
               Options
            </th>
         </tr>
      </thead>
      <tbody>
          @foreach($categories as $item)
         <tr>
            <td>
               {{ $item->id}}
            </td>
            <td>
               {{ $item->title}}
            </td>
            <td>
               <a class="btn btn-succes mt-2"href="{{ route('categories.show',$item) }}">Detalles</a>
               <a class="btn btn-succes mt-2" href="{{ route('categories.edit',$item) }}">Editar</a>
               <form action="{{ route('categories.destroy', $item) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <div class="mt-2"></div>
   {{ $categories->links() }}
   
@endsection