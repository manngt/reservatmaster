@extends('layouts.master')
@section('content')

    <div id="table-datatables">
        <h4 class="header">CONTROL DE HABITACIONES</h4>
        <div class="row">
            <div class="col s12">
                <p>Permite visualizar el detalle de las habitaciones</p>
            </div>
            <div class="col s12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Habitación</th>
                        <th>Día</th>
                        <th>Fecha</th>
                        <th>Recepcionista</th>
                        <th>Huesped</th>
                        <th>Pasaporte/DPI</th>
                        <th>Celular</th>
                        <th>Country/País</th>
                        <th>Pago</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Habitación</th>
                        <th>Día</th>
                        <th>Fecha</th>
                        <th>Recepcionista</th>
                        <th>Huesped</th>
                        <th>Pasaporte/DPI</th>
                        <th>Celular</th>
                        <th>Country/País</th>
                        <th>Pago</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Domingo</td>
                        <td>2017-12-01</td>
                        <td>Jorge Merida</td>
                        <td>Pablo Morataya</td>
                        <td>993933842</td>
                        <td>786743242</td>
                        <td>El Salvador</td>
                        <td>Q. 144.50</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lunes</td>
                        <td>2017-12-02</td>
                        <td>María Estrada</td>
                        <td>Jennifer Gonzalez</td>
                        <td>9939368842</td>
                        <td>7099143242</td>
                        <td>Nicaragua</td>
                        <td>Q. 456.50</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Martes</td>
                        <td>2017-12-03</td>
                        <td>María Estrada</td>
                        <td>Monica Alvarez</td>
                        <td>99391022342</td>
                        <td>4241242</td>
                        <td>Panama</td>
                        <td>Q. 389.50</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>Miercoles</td>
                        <td>2017-12-04</td>
                        <td>María Estrada</td>
                        <td>Monica Alvarez</td>
                        <td>99391022342</td>
                        <td>4241242</td>
                        <td>Panama</td>
                        <td>Q. 654.50</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>Jueves</td>
                        <td>2017-12-05</td>
                        <td>Jorge Merida</td>
                        <td>John Doe</td>
                        <td>515431022342</td>
                        <td>127374340</td>
                        <td>USA</td>
                        <td>Q. 178.50</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Viernes</td>
                        <td>2017-12-06</td>
                        <td>Jorge Merida</td>
                        <td>Stacy Village</td>
                        <td>51547474578342</td>
                        <td>1773636343</td>
                        <td>USA</td>
                        <td>Q. 178.50</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>Sábado</td>
                        <td>2017-12-07</td>
                        <td>María Estrada</td>
                        <td>Juan Gomez</td>
                        <td>453450324</td>
                        <td>777883434</td>
                        <td>Guatemala</td>
                        <td>Q. 987.50</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection