@extends("layouts.base-layout")

@section('win-title', 'Home Page')
@section('page-title', 'I film più belli')

@section("main")
    <h1>Film</h1>

    <ul>
        <!-- @foreach ($movies as $movie)
                                <li>{{ $movie['title'] }}</li>
                            @endforeach -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($movies as $movie)
                <div class="col text-center">
                    <x-card>
                        <x-slot:card_title>{{$movie["title"]}}</x-slot:card_title>
                        <x-slot:card_subtitle>{{$movie["original-title"]}}</x-slot:card_subtitle>
                        <x-slot:nazionality>{{$movie["nationality"]}}</x-slot:nazionality>
                        <x-slot:year>{{$movie["date"]}}</x-slot:year>
                        <x-slot:vote>{{$movie["vote"]}}</x-slot:vote>
                    </x-card>
                </div>
            @endforeach
        </div>
    </ul>
@endsection