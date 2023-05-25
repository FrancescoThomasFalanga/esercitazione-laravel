@extends('layouts/app')

@section('content')
    

<div class="container">

    <h1>Modifica</h1>
    
    <form action="{{route('admin.wines.update', $wine)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $wine->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="year">Year</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{old('year') ?? $wine->year}}">
            @error('year')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            {{-- <label for="winery">Winery</label>
            <input type="text" class="form-control @error('winery') is-invalid @enderror" id="winery" name="winery" value="{{old('winery') ?? $wine->winery}}">
            @error('winery')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror --}}

            <label for="winery_id">Winery</label>
            <select name="winery_id" id="winery_id" class="form-select @error('winery_id') is-invalid @enderror">
              <option value="">Nessuna</option>
              @foreach($wineries as $winery)
                <option value="{{$winery->id}}" {{$winery->id == old('winery_id', $wine->winery_id) ? 'selected' : ''}}>
                  {{$winery->name}}
                </option>
              @endforeach
            </select>

            @error('winery_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
            

        </div>

        <div class="row">

            @foreach($vineyards as $vineyard)
            @if($errors->any())
                <input type="checkbox" id='vineyard_{{$vineyard->id}}' name="vineyards[]" value={{$vineyard->id}} @checked(in_array($vineyard->id, old('vineyards', [])))>
            @else
                <input type="checkbox" id='vineyard_{{$vineyard->id}}' name="vineyards[]" value={{$vineyard->id}} @checked($wine->vineyards->contains($vineyard->id))>
            @endif

                <label for="vineyard_{{$vineyard->id}}">{{$vineyard->name}}</label>
            @endforeach
            @error('vineyard_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror

        </div>

        <div class="row">

            <label for="color">Color</label>
            <input type="text" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{old('color') ?? $wine->color}}">
            @error('color')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="type">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type') ?? $wine->type}}">
            @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="gradation">Gradation</label>
            <input type="text" class="form-control @error('gradation') is-invalid @enderror" id="gradation" name="gradation" value="{{old('gradation') ?? $wine->gradation}}">
            @error('gradation')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="extract">Extract</label>
            <input type="text" class="form-control @error('extract') is-invalid @enderror" id="extract" name="extract" value="{{old('extract') ?? $wine->extract}}">
            @error('extract')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="acidity">Acidity</label>
            <input type="acidity" class="form-control @error('acidity') is-invalid @enderror" id="acidity" name="acidity" value="{{old('acidity') ?? $wine->acidity}}">
            @error('acidity')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary mt-5">Modifica</button>

    </form>

    </div>


@endsection