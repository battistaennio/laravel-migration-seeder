@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>{{ $title }}</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario partenza</th>
                    <th scope="col">Orario arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->id }}</th>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_hour }}</td>
                        <td>{{ $train->arrival_hour }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages_number }}</td>
                        <td>{{ $train->on_time === 1 ? 'Si' : 'No' }}</td>
                        <td>{{ $train->cancelled === 1 ? 'Si' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    home
@endsection
