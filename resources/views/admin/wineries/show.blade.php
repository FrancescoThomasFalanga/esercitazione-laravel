@extends('layouts/app')

@section('content')
    
<div class="container flex flex-column align-items-center">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title p-2 text-center">{{ $winery->name }}</h5>
                <p class="card-text">{{ $winery->address }}</p>
                {{-- <p class="card-text" >{{ $winery->town }} - {{ $winery->district }} - {{ $winery->region }} - {{ $winery->nation }}</p> --}}
                <p>Telefono: {{ $winery->phone_number }}</p>
                <p>Email: {{ $winery->mail }}</p>
            </div>
        </div>


        <div class="flex">
            <a href="{{route('admin.wineries.edit', $winery)}}" class="btn btn-primary" style="width:100px">Modifica</a>
            
            <form action="{{route('admin.wineries.destroy', $winery)}}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINA</button>

            </form>

        </div>



</div>

@endsection