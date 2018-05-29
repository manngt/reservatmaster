
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="name" name="picture" value="{{ old('picture',isset($user->picture) ? $user->picture : null) }}" type="file" >
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="name" value="{{ old('name',isset($user->name) ? $user->name : null) }}" type="text" required="required">
        <label for="name">Nombre</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="lastName" value="{{ old('lastName',isset($user->lastName) ? $user->lastName : null) }}" type="text" required="required">
        <label for="name">Apellidos</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="email" value="{{ old('email',isset($user->email) ? $user->email : null) }}" type="text" required="required">
        <label for="name">Email</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="phone" value="{{ old('phone',isset($user->phone) ? $user->phone : null) }}" type="number" required="required">
        <label for="name">Teléfono</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="address" value="{{ old('address',isset($user->address) ? $user->address : null) }}" type="text" required="required">
        <label for="name">Dirección</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="birthday" value="{{ old('birthday',isset($user->birthday) ? $user->birthday : null) }}" type="text" required="required">
        <label for="name">Cumpleaños</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="title" value="{{ old('title',isset($user->title) ? $user->title : null) }}" type="text" required="required">
        <label for="name">Profesión</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="position" value="{{ old('position',isset($user->position) ? $user->position : null) }}" type="text" required="required">
        <label for="name">Puesto</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="password"  type="password" required="required">
        <label for="name">Contraseña</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">add_location</i>
        <input id="name" name="password_confirmation"  type="password" required="required">
        <label for="name">Repetir Contraseña</label>
    </div>
</div>



<div class="row">
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>


