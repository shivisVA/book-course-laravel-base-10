<label>Titulo</label>
<input class="form-control" type="text" name="title" value="{{ old('title', $category->title) }}">
<br>
<br>
<label>Slug</label>
<input class="form-control" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
<button class="btn btn-succes mt-2" type="submit">Guardar</button>