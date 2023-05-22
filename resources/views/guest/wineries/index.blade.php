@extends('layouts/main')

@section('content')

<div class="container flex align">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search" action="{{route('wineries.index')}}" method="GET">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </nav>

</div>
    
    <div class="container flex">

        @foreach ($wineries as $winery)
            
            <a href="{{ route('wineries.show', $winery) }}" class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title p-2 text-center">{{ $winery->name }}</h5>
                    <p class="card-text">{{ $winery->address }}</p>
                    <p>Telefono: {{ $winery->phone_number }}</p>
                    <p>Email: {{ $winery->mail }}</p>
                </div>
            </a>

        @endforeach

    </div>

@endsection