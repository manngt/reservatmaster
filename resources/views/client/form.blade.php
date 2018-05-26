

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="first_name" value="{{ old('first_name',isset($client->first_name) ? $client->first_name : null) }}" type="text" required="required">
        <label for="name">Nombre</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="last_name" value="{{ old('last_name',isset($client->first_name) ? $client->last_name : null) }}" type="text" required="required">
        <label for="name">Apellidos</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="phone" value="{{ old('phone',isset($client->first_name) ? $client->phone : null) }}" type="text" required="required" >
        <label for="name">Teléfono</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="email" value="{{ old('email',isset($client->email) ? $client->email : null) }}" type="text" required="required">
        <label for="name">Email</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="birthday" value="{{ old('birthday',isset($client->birthday) ? $client->birthday : null) }}" type="text" required="required">
        <label for="name">Fecha de nacimiento</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="identity_document_type_id">
            <option value="" name="identity_document_type_id" disabled selected>Tipo de documento</option>
            @foreach($document_types as $document_type)
                <option value="{{$document_type->id}}"
                        @if(isset($client->identity_document_type_id))
                        @if($document_type->id == $client->identity_document_type_id)
                        selected="selected"
                        @endif
                        @endif>{{$document_type->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="identity_number" value="{{ old('identity_number',isset($client->identity_number) ? $client->identity_number : null) }}" type="number" required="required" max="9999999999">
        <label for="name">Número de documento</label>
    </div>
</div>


<div class="row">
    <div class="input-field col s12">
        <select name="country_id">
            <option value="" name="country_id" disabled selected>País</option>
            @foreach($countries as $country)
                <option value="{{$country->id}}"
                        @if(isset($client->country_id))
                        @if($country->id == $client->country_id)
                        selected="selected"
                        @endif
                        @endif>{{$country->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

