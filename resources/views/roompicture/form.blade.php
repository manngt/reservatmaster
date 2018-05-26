<div class="row">
    <div class="input-field col s12">
        <select name="room_id">
            <option value="" name="room_id" disabled selected>Habitación</option>
            @foreach($rooms as $room)
                <option value="{{$room->id}}"
                        @if(isset($room_picture->room_id))
                        @if($room->id == $room_picture->room_id)
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
        <input id="name" name="picture" value="{{ old('picture',isset($room_picture->picture) ? $room_picture->picture : null) }}" type="file" >
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>


