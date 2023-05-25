@extends('layouts/app')

@section('content')
    <div class="container">
        <a href="{{route('admin.wineries.index')}}">WINERY</a>
    
        <a href="{{route('admin.wines.index')}}">WINE</a>
    
        <a href="{{route('admin.vineyards.index')}}">VINEYARDS</a>
    </div>


@endsection