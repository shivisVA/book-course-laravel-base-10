@csrf
        <label>Titulo</label>
        <input class="form-control" type="text" name="title" value="{{old('title',$post->title)}}">

        <label>Slug</label>
        <input class="form-control" type="text" name="slug" value="{{old('slug',$post->slug)}}">

        <label>Contenido</label>
        <textarea class="form-control"name="content">{{old('content',$post->content) }}</textarea>

        <label for="">Categoria</label>
        <select  class="form-control" name="category_id">
           @foreach($categories as $title=>$id)
            <option {{ $post->category && old('category_id',$post->category_id)==$id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
           @endforeach
        </select>

        <label>Descripcion</label>
        <textarea class="form-control"name="description"> {{old('description',$post->description) }}</textarea>

         <label>Posted</label>
        <select class="form-control" name="posted">
            <option {{ old('posted',$post->posted) == "not" ? "selected" : ""}} value="not">Not</option>
            <option {{ old('posted',$post->posted) == "yes" ? "selected" : ""}} value="yes">Yes</option>
        </select>

        @if(isset($task) && $task=='edit')
        	<label for="">Image</label>
        	<input type="file" name="image">
        @endif
        <button class="btn btn-succes mt-2" type="submit">send</button> 
