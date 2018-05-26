<div class="row">
    <div class="input-field col s12">
        <select name="check_id">
            <option value="" name="check_id" disabled selected>Cuenta</option>
            @foreach($checks as $check)
                <option value="{{$check->id}}"
                        @if(isset($check_detail->check_id))
                        @if ($check->id == $check_details->check_id)
                        selected="selected"
                        @endif
                        @endif>{{$check->id.' '.$check->Client->first_name.' '.$check->Client->last_name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_checkdetail</i>
        <input id="name" name="description" value="{{ old('description',isset($check_detail->description) ? $check_detail->description : null) }}" type="text" >
        <label for="name">Descripción</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_checkdetail</i>
        <input id="name" name="amount" value="{{ old('amount',isset($check_detail->amount) ? $check_detail->amount : null) }}" type="number"  step="any">
        <label for="name">Monto</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

