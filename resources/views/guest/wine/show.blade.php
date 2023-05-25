@extends('layouts/app')

@section('content')
    
<div class="container flex flex-column align-items-center">
        
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-subtitle mb-2">{{ $wine->name }}</h5>
            <h6 class="card-subtitle mb-2">{{ $wine->type }}</h6>
            <p class="card-text">{{ $wine->year }} - {{ $wine->winery->name }}</p>
            <p>
                @foreach($wine->vineyards as $vineyard)
                    {{$vineyard->name}}
                @endforeach
            </p>
            <p>Colore: {{ $wine->color }}</p>
            <p>Gradazione: {{ $wine->gradation }}%</p>
            <p>Estratto: {{ $wine->extract }}g/l</p>
            <p>Acidità: {{ $wine->acidity }}g/l</p>
        </div>
    </div>

</div>

@endsection