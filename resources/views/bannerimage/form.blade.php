

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="name" name="image" value="{{ old('image',isset($banner_image->image) ? $banner_image->image : null) }}" type="file" >
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="name" name="order" value="{{ old('order',isset($banner_image->order) ? $banner_image->order : null) }}" type="number" required="required">
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

