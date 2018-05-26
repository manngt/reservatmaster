

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">text_format</i>
        <input id="name" name="title" value="{{ old('title',isset($article->title) ? $article->title : null) }}" type="text" required="required">
        <label for="name">Titulo</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">note</i>
        <textarea id="name" name="article" type="text" required="required">{{ old('article',isset($article->article) ? $article->article : null) }} </textarea>
        <label for="name">Articulo</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="name" name="order" value="{{ old('order',isset($article->order) ? $article->order : null) }}" type="number" required="required">
        <label for="name">Orden</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

