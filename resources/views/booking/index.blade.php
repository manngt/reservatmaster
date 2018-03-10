@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="section">
            <p class="caption">
                <h1>Reservaciones</h1>
            </p>
            <div class="divider"></div>
            <div id="full-calendar">
                <div class="row">
                    <div class="col s12 m4 l3">
                        <div id='external-events'>
                            <h4 class="header">Reservaciones</h4>
                            <div class='fc-event cyan'>Habitación 10</div>
                            <div class='fc-event teal'>Habitación 11</div>
                            <div class='fc-event cyan darken-1'>Habitación 13</div>
                            <div class='fc-event cyan accent-4'>Habitación 8</div>
                            <div class='fc-event teal accent-4'>Habitación 2</div>
                            <div class='fc-event light-blue accent-3'>Habitación 7</div>
                            <div class='fc-event light-blue accent-4'>Habitación 3</div>
                            <p>
                                <input type='checkbox' id='drop-remove' />
                                <label for='drop-remove'>remove after drop</label>
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m8 l9">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large">
                <i class="material-icons">add</i>
            </a>
            <ul>
                <li>
                    <a href="css-helpers.html" class="btn-floating blue">
                        <i class="material-icons">help_outline</i>
                    </a>
                </li>
                <li>
                    <a href="cards-extended.html" class="btn-floating green">
                        <i class="material-icons">widgets</i>
                    </a>
                </li>
                <li>
                    <a href="app-calendar.html" class="btn-floating amber">
                        <i class="material-icons">today</i>
                    </a>
                </li>
                <li>
                    <a href="app-email.html" class="btn-floating red">
                        <i class="material-icons">mail_outline</i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Floating Action Button -->
    </div>
    @endsection