<div class="row">
    <div class="input-field col s12">
        <select name="client_id">
            <option value="" name="client_id" disabled selected>Cliente</option>
            @foreach($clients as $client)
                <option value="{{$client->id}}"
                        @if(isset($check->client_id))
                        @if ($client->id == $check->client_id)
                        selected="selected"
                        @endif
                        @endif>{{$client->first_name.' '.$client->last_name}}</option>
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

