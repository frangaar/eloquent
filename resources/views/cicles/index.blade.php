@extends('layouts.principal')

@section('contenido')
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sigles</th>
                <th scope="col">Nom</th>
                <th scope="col">Desripció</th>
                <th scope="col">Actiu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cicles as $cicle)
                <tr>
                    <td scope="row">{{ $cicle->sigles }}</th>
                    <td scope="row">{{ $cicle->nom }}</th>
                    <td scope="row">{{ $cicle->descripcio }}</th>
                    <td scope="row">{{ $cicle->actiu }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection