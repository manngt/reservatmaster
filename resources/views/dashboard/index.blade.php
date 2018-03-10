@extends('layouts.master')
@section('content')
    <div id="sales-chart">
        <div class="row">
            <div class="col s12 m8 l8">
                <div id="revenue-chart" class="card">
                    <div class="card-content">
                        <h4 class="header mt-0">INGRESOS 2017
                            <span class="purple-text small text-darken-1 ml-1">
                          <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span> <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Detalle</a>
                        </h4>
                        <div class="row">
                            <div class="col s12">
                                <div class="yearly-revenue-chart">
                                    <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                                    <canvas id="lastYearRevenue" height="350"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div id="weekly-earning" class="card">
                    <div class="card-content">
                        <h4 class="header m-0">Ganancias
                            <i class="material-icons right grey-text lighten-3">more_vert</i>
                        </h4>
                        <p class="no-margin grey-text lighten-3 medium-small">Lunes 15 - Doming 21</p>
                        <h3 class="header">Q. 899.39
                            <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                        </h3>
                        <canvas id="monthlyEarning" class="" height="150"></canvas>
                        <div class="center-align">
                            <p class="lighten-3">Total de ganancias semanal</p>
                            <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">Ver Completo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection