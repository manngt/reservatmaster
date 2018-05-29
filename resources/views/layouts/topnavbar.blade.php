<div class="navbar-fixed">
    <nav class="navbar-color">
        <div class="nav-wrapper">
            <ul class="left">
                <li>
                    <h1 class="logo-wrapper">
                        <a href="/room" class="brand-logo darken-1">
                            <img src="{{ asset('materialize/images/logo/iconreservat.png') }}" alt="ReservatMaster">
                            <span class="logo-text hide-on-med-and-down">Reservat Master</span>
                        </a>
                    </h1>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">

                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                        <i class="material-icons">settings_overscan</i>
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

            <ul id="profile-dropdown" class="dropdown-content">


                <li>
                    <a href="{{route('logout')}}" class="grey-text text-darken-1">
                        <i class="material-icons">keyboard_tab</i> Salir</a>
                </li>
            </ul>
        </div>
    </nav>
</div>