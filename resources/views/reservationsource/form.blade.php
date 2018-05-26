<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="name" value="{{ old('name',isset($reservation_source->name) ? $reservation_source->name : null) }}" type="text" required="required">
        <label for="name">Origen</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="description" value="{{ old('name',isset($reservation_source->description) ? $reservation_source->description : null) }}" type="text" >
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

