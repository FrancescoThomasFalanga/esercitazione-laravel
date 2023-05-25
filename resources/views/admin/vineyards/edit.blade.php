@extends('layouts/app')

@section('content')
    

<div class="container">

    <h1>Aggiungi Cantina</h1>
    
    <form action="{{route('admin.vineyards.update', $vineyard)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="row">

            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $vineyard->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="desc">Description</label>
            <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" value="{{old('desc') ?? $vineyard->desc}}">
            @error('desc')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <button type="submit" class="btn btn-primary mt-5">Aggiungi</button>

    </form>

    </div>


@endsection