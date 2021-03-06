<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="id" name="sequence" value="{{ old('sequence', isset($roomstatus->sequence) ? $roomstatus->sequence: null) }}" type="number" required="required"
               @if($edit) readonly="readonly" @endif>
        <label for="id">Orden</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="name" value="{{ old('name',isset($roomstatus->name) ? $roomstatus->name : null) }}" type="text" required="required">
        <label for="name">Nombre</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="description" value="{{ old('name',isset($roomstatus->description) ? $roomstatus->description : null) }}" type="text" >
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

