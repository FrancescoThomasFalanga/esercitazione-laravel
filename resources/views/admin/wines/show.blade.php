@extends('layouts/app')

@section('content')
    
<div class="container flex flex-column align-items-center">
        
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-subtitle mb-2">{{ $wine->name }}</h5>
            <h6 class="card-subtitle mb-2">{{ $wine->type }}</h6>
            <p class="card-text">{{ $wine->year }} - {{ $wine->winery }}</p>
            <p>Colore: {{ $wine->color }}</p>
            <p>Gradazione: {{ $wine->gradation }}%</p>
            <p>Estratto: {{ $wine->extract }}g/l</p>
            <p>Acidità: {{ $wine->acidity }}g/l</p>
        </div>
    </div>


        <div class="flex">
            <a href="{{route('admin.wines.edit', $wine)}}" class="btn btn-primary" style="width:100px">Modifica</a>
            
            <form action="{{route('admin.wines.destroy', $wine)}}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINA</button>

            </form>

        </div>



</div>

@endsection