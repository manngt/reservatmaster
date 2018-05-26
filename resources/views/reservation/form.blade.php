
<div class="row">
    <div class="input-field col s12">
        <select name="room_id">
            <option value="" name="room_id" disabled selected>Habitación</option>
            @foreach($rooms as $room)
                <option value="{{$room->id}}"
                        @if(isset($reservation->room_id))
                        @if ($room->id == $reservation->room_id)
                        selected="selected"
                        @endif
                        @endif>{{$room->number}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="client_id">
            <option value="" name="client_id" disabled selected>Huesped</option>
            @foreach($clients as $client)
                <option value="{{$client->id}}"
                        @if(isset($reservation->client_id))
                        @if ($client->id == $reservation->client_id)
                        selected="selected"
                        @endif
                        @endif>{{$client->first_name." ".$client->last_name}}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="row">
    <div class="input-field col s12">
        <select name="reservation_status_id">
            <option value="" name="reservation_status_id" disabled selected>Estado Reservación</option>
            @foreach($reservation_statuses as $reservation_status)
                <option value="{{$reservation_status->id}}"
                        @if(isset($reservation->reservation_status_id))
                        @if ($reservation_status->id == $reservation->reservation_status_id)
                        selected="selected"
                        @endif
                        @endif>{{$reservation_status->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="reservation_source_id">
            <option value="" name="reservation_source_id" disabled selected>Origen</option>
            @foreach($reservation_sources as $reservation_source)
                <option value="{{$reservation_source->id}}"
                        @if(isset($reservation->reservation_source_id))
                        @if ($reservation_source->id == $reservation->reservation_source_id)
                        selected="selected"
                        @endif
                        @endif>{{$reservation_source->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="reservation_time_id">
            <option value="" name="reservation_time_id" disabled selected>Vigencia</option>
            @foreach($reservation_times as $reservation_time)
                <option value="{{$reservation_time->id}}"
                        @if(isset($reservation->reservation_time_id))
                        @if ($reservation_time->id == $reservation->reservation_time_id)
                        selected="selected"
                        @endif
                        @endif>{{$reservation_time->duration}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="start" value="{{ old('name',isset($reservation->start) ? $reservation->start : null) }}" type="text" required="required">
        <label for="name">Inicia</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="ends" value="{{ old('name',isset($reservation->ends) ? $reservation->ends : null) }}" type="text" required="required">
        <label for="name">Finaliza</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="day">
            <option value="" name="day" disabled selected>Día</option>
            <option value="Domingo">Domingo</option>
            <option value="Lunes">lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Domingo">Domingo</option>

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

