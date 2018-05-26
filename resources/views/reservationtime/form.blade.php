

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="duration" value="{{ old('name',isset($reservation_time->duration) ? $reservation_time->duration : null) }}" type="number" min="0" max="12" required="required">
        <label for="name">Duración(hora)</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>

