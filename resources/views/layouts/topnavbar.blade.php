<div class="navbar-fixed">
    <nav class="navbar-color">
        <div class="nav-wrapper">
            <ul class="left">
                <li>
                    <h1 class="logo-wrapper">
                        <a href="index.html" class="brand-logo darken-1">
                            <img src="{{ asset('materialize/images/logo/iconreservat.png') }}" alt="materialize logo">
                            <span class="logo-text hide-on-med-and-down">Reservat Master</span>
                        </a>
                    </h1>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                        <span class="flag-icon flag-icon-gb"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                        <i class="material-icons">settings_overscan</i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                        <i class="material-icons">notifications_none
                            <small class="notification-badge pink accent-2">5</small>
                        </i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="{{asset('materialize/images/avatar/avatar-7.png')}}" alt="avatar">
                    <i></i>
                  </span>
                    </a>
                </li>
                <li>
                    <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                        <i class="material-icons">format_indent_increase</i>
                    </a>
                </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
                <li>
                    <h6>Avisos
                        <span class="new badge">5</span>
                    </h6>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Nueva reservación</a>
                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 1 horas</time>
                </li>
                <li>
                    <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle red small">stars</span> Habitación 12 Check Out</a>
                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 2 horas</time>
                </li>
                <li>
                    <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle teal small">settings</span> Habitación 17 Check In</a>
                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 3 horas</time>
                </li>
                <li>
                    <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle deep-orange small">today</span> Habitación 9 Limpieza</a>
                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 4 horas</time>
                </li>
                <li>
                    <a href="#!" class="grey-text text-darken-2">
                        <span class="material-icons icon-bg-circle amber small">trending_up</span> Habitación 6 Reservación</a>
                    <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 5 horas</time>
                </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
                <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">face</i> Perfil</a>
                </li>
                <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">settings</i> Ajustes</a>
                </li>
                <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">live_help</i> Ayuda</a>
                </li>

                <li>
                    <a href="#" class="grey-text text-darken-1">
                        <i class="material-icons">keyboard_tab</i> Salir</a>
                </li>
            </ul>
        </div>
    </nav>
</div>