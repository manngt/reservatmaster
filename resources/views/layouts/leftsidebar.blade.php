<ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
        <div class="row">
            <div class="col col s4 m4 l4">
                <img src="{{ asset('materialize/images/avatar/avatar-7.png') }}" alt="" class="circle responsive-img valign profile-image cyan">
            </div>
            <div class="col col s8 m8 l8">
                <ul id="profile-dropdown-nav" class="dropdown-content">

                    <li>
                        <a href="{{route('logout')}}" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i> Salir</a>
                    </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">{{Auth::User()->name.' '.Auth::User()->lastName}}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">{{Auth::User()->position}}</p>
            </div>
        </div>
    </li>
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="/dashboard">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Indicadores</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">hotel</i>
                    <span class="nav-text">Habitaciones</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{route('location.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Ubicaciones</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('level.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Niveles</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('roomtype.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Tipos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('roomstatus.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Estados de habitación</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('room.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Habitaciones</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">face</i>
                    <span class="nav-text">Huespedes</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{route('documenttype.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Tipos de documento</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('country.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Nacionalidad</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Huespedes</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">book</i>
                    <span class="nav-text">Reservaciones</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{route('reservationtime.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Vigencias</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('reservationstatus.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Estados</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('reservationsource.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Origenes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('reservation.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Reservaciones</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">home</i>
                    <span class="nav-text">Portada</span>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{route('frontpageadm.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Articulos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('bannerimage.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Banners</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>

</ul>
<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
    <i class="material-icons">menu</i>
</a>