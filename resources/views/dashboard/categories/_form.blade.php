<label>Titulo</label>
<input type="text" name="title" value="{{ old('title', $category->title) }}">
<br>
<br>
<label>Slug</label>
<input type="text" name="slug" value="{{ old('slug', $category->slug) }}">
<button type="submit">Guardar</button>