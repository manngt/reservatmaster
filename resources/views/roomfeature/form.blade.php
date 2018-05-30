<div class="row">
    <div class="input-field col s12">
        <select name="room_id">
            <option value="" name="room_id" disabled selected>Habitación</option>
            @foreach($rooms as $room)
                <option value="{{$room->id}}"
                        @if(isset($room_feature->room_id))
                        @if($room->id == $room_feature->room_id)
                        selected="selected"
                        @endif
                        @endif>{{$room->number}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="name" name="feature" value="{{ old('picture',isset($room_feature->feature) ? $room_feature->feature : null) }}" type="text" >
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>


