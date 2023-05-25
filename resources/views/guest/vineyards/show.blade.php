@extends('layouts/app')

@section('content')
    
<div class="container flex flex-column align-items-center">
        
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-subtitle mb-2">{{ $vineyard->name }}</h5>
            <h6 class="card-subtitle mb-2">{{ $vineyard->desc }}</h6>
        </div>
    </div>

</div>

@endsection