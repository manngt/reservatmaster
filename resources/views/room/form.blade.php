<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="id" name="number" value="{{ old('number', isset($room->number) ? $room->number: null) }}" type="number" required="required"
               @if($edit) readonly="readonly" @endif>
        <label for="id">Nro. Habitación</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="room_type_id">
            <option value="" name="room_type_id" disabled selected>Tipo</option>
            @foreach($room_types as $room_type)
                    <option value="{{$room_type->id}}"
                            @if(isset($room->room_type_id))
                                @if ($room_type->id == $room->room_type_id)
                                selected="selected"
                                @endif
                            @endif>{{$room_type->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <select name="location_id">
            <option value="" name="location_id" disabled selected>Ubicación</option>
            @foreach($locations as $location)
                <option value="{{ $location->id }}"
                        @if(isset($room->location_id))
                            @if ($location->id == $room->location_id)
                                selected="selected"
                            @endif
                        @endif>{{ $location->name }}</option>


            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="level_id">
            <option value="" name="level_id" disabled selected>Nivel</option>
            @foreach($levels as $level)
                <option value="{{$level->id}}"
                @if(isset($room->level_id))
                    @if($level->id == $room->level_id)
                        selected="selected"
                    @endif
                @endif>{{$level->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">attach_money</i>
        <input id="name" name="cost" value="{{ old('name',isset($room->cost) ? $room->cost : null) }}" type="number" step="any" >
        <label for="id">Costo</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">monetization_on</i>
        <input id="name" name="price" value="{{ old('name',isset($room->price) ? $room->price : null) }}" type="number" step="any" >
        <label for="id">Precio</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="name" name="picture" value="{{ old('name',isset($room->picture) ? $room->picture : null) }}" type="file" >
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

