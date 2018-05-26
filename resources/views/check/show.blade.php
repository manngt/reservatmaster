@extends('layouts.master')
@section('content')


<div class="col s12 m6 l6">
    <div class="card">
        <div class="card-content">

            <table>
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Monto</th>
                </tr>
                </thead>
                <tbody>
                @foreach($check->CheckDetails as $detail)
                <tr>
                    <td>{{$detail->description}}</td>
                    <td>{{$detail->amount}}</td>
                </tr>
                @endforeach
            </table>

            <ul>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">more</i>
                        {{ $check->id }}
                       </div>

                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">check</i>
                        {{ $check->Client->first_name.' '. $check->Client->last_name}}
                    </div>

                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">attach_money</i>
                        {{$check->TotalAmount()}}
                    </div>

                </li>

            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>

@endsection