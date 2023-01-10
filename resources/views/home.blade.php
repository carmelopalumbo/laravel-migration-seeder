@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">AZIENDA</th>
                <th scope="col">STAZIONE PARTENZA</th>
                <th scope="col">STAZIONE ARRIVO</th>
                <th scope="col">ORARIO PARTENZA</th>
                <th scope="col">ORARIO ARRIVO</th>
                <th scope="col">CODICE TRENO</th>
                <th scope="col">NUMERO CARROZZE</th>
                <th scope="col">RITARDI</th>
                <th scope="col">STATO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriages }}</td>

                    @if ($train->on_time)
                        <td>IN ORARIO</td>
                    @else
                        <td>IN RITARDO</td>
                    @endif

                    @if ($train->is_delete)
                        <td>ATTIVO</td>
                    @else
                        <td>CANCELLATO</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
