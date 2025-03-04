@extends('blog.master')

@section('content')

<x-blog.show :post="$post"   />
<x-dynamic-component component='blog.show' :post="$post" />
{{--<x-card info='succes'>
	contenido dinamico
</x-card>

<x-card class="bg-yellow-100" :bg=false>
	contenido 2
</x-card>   --}}
    

{{--<div class="card card-white">
	<h1>{{ $post->title }}</h1>
	<span>{{ $post->category->title }}</span>
	<hr>
	{{ $post->content }}
	</div>
  --}}


@endsection