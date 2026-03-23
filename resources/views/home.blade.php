@extends("layouts.base-layout")

@section('win-title', 'Home Page')

@section("main")
    <h1>Film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }}</li>
        @endforeach
    </ul>
@endsection