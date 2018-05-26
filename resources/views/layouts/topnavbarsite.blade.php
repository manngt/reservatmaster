<div class="navbar-fixed">
    <nav class="navbar-color gradient-45deg-light-blue-cyan" >
        <div class="nav-wrapper">
            <ul class="left">
                <li>
                    <h1 class="logo-wrapper">
                        <a href="/" class="brand-logo darken-1">
                            <img src="{{ asset('materialize/images/logo/iconreservat.png') }}" alt="ReservatMaster">
                            <span class="logo-text hide-on-med-and-down">Reservat Master</span>
                        </a>
                    </h1>
                </li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="/">Inicio</a></li>
                <li><a href="/room">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{route('room.index')}}">Inicio</a></li>
                <li><a href="{{route('room.index')}}">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>
</div>
