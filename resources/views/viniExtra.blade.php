@extends('layouts/main')

@section('content')
    
<div class="container flex">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <a href="{{route('viniExtra')}}">
                    <h5 class="card-title p-2 text-center {{ $wines[$index]->color }}">{{ $wines[$index]->name }}</h5>
                </a>
                <h6 class="card-subtitle mb-2">{{ $wines[$index]->type }}</h6>
                <p class="card-text">{{ $wines[$index]->year }} - {{ $wines[$index]->winery }}</p>
                <p>Colore: {{ $wines[$index]->color }}</p>
                <p>Gradazione: {{ $wines[$index]->gradation }}%</p>
                <p>Estratto: {{ $wines[$index]->extract }}g/l</p>
                <p>Acidità: {{ $wines[$index]->acidity }}g/l</p>
            </div>
        </div>

</div>

@endsection