@extends('layouts/app')

@section('content')
    
<div class="container flex flex-column align-items-center">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title p-2 text-center">{{ $vineyard->name }}</h5>
                <p class="card-text">{{ $vineyard->desc }}</p>
            </div>
        </div>


        <div class="flex">
            <a href="{{route('admin.vineyards.edit', $vineyard)}}" class="btn btn-primary" style="width:100px">Modifica</a>
            
            <form action="{{route('admin.vineyards.destroy', $vineyard)}}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINA</button>

            </form>

        </div>



</div>

@endsection