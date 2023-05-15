@extends('layouts/main')

@section('content')

<div class="container flex">

    @foreach ($vineyards as $vineyard)
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title p-2 text-center">{{ $vineyard->name }}</h5>
                <p class="card-text text-center">{{ $vineyard->desc }}</p>
            </div>
        </div>

    @endforeach

</div>

@endsection