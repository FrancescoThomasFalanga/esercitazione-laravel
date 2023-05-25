@extends('layouts/main')

@section('content')

<div class="container flex align">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search" action="{{route('vineyards.index')}}" method="GET">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </nav>

</div>

    
    <div class="container flex">

        @foreach ($vineyards as $vineyard)
            
            <a href="{{route('vineyards.show', $vineyard)}}" class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title p-2 text-center">{{ $vineyard->name }} <i class="fa-solid fa-wine-glass"></i></h5>
                    <p class="card-text">{{ $vineyard->desc }}</p>
                </div>
            </a>

        @endforeach

    </div>

@endsection