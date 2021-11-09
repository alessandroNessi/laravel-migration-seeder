@extends('layout.base')

@section('content')    
    <div class="container">
        @foreach ($packages as $package)
            {{-- @dump($package); --}}
            <div class="card">
                <h2>nome pacchetto: {{$package['package_name']}}</h2>
                <p>location: {{$package['arriving_place']}}</p>
                <p>Date: {{$package["departure_date"]}} || {{$package["returning_date"]}}</p>
                <p>Descrizione: {{$package["description"]}}</p>
            </div>
        @endforeach
    </div>
@endsection