<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="name" value="{{ old('name',isset($document_type->name) ? $document_type->name : null) }}" type="text" required="required">
        <label for="name">Nombre</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="description" value="{{ old('name',isset($document_type->description) ? $document_type->description : null) }}" type="text" >
        <label for="name">Descripción</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

