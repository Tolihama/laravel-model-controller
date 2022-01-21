@extends('layouts.main')

@section('content')
    <h1 class="text-center pt-5 pb-4">Movies</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Titolo originale</th>
                <th>Nazionalità</th>
                <th>Data</th>
                <th>Voto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->nationality }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->vote }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection