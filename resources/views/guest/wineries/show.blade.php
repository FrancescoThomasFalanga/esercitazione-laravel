@extends('layouts/app')

@section('content')
    
    <div class="container flex">
            
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title p-2 text-center">{{ $winery->name }}</h5>
                <p class="card-text">{{ $winery->address }}</p>
                {{-- <p class="card-text" >{{ $winery->town }} - {{ $winery->district }} - {{ $winery->region }} - {{ $winery->nation }}</p> --}}
                <p>Telefono: {{ $winery->phone_number }}</p>
                <p>Email: {{ $winery->mail }}</p>
            </div>
        </div>

        

    </div>

@endsection