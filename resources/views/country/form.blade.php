<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="id" name="id" value="{{ old('id', isset($country->id) ? $country->id : null) }}" type="text" required="required"
               @if($edit) readonly="readonly" @endif>

        <label for="id">Código país</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="name" value="{{ old('name',isset($country->name) ? $country->name : null) }}" type="text" required="required">
        <label for="name">País</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>


