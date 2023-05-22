@extends('layouts/app')

@section('content')
    

<div class="container">

    <h1>Modifica</h1>
    
    <form action="{{route('admin.wineries.update', $winery)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $winery->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="address">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{old('address') ?? $winery->address}}">
            @error('address')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="town">Town</label>
            <input type="text" class="form-control @error('town') is-invalid @enderror" id="town" name="town" value="{{old('town') ?? $winery->town}}">
            @error('town')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="district">District</label>
            <input type="text" class="form-control @error('district') is-invalid @enderror" id="district" name="district" value="{{old('district') ?? $winery->district}}">
            @error('district')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="region">Region</label>
            <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region" value="{{old('region') ?? $winery->region}}">
            @error('region')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="nation">Nation</label>
            <input type="text" class="form-control @error('nation') is-invalid @enderror" id="nation" name="nation" value="{{old('nation') ?? $winery->nation}}">
            @error('nation')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="phone_number">Phone_Number</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{old('phone_number') ?? $winery->phone_number}}">
            @error('phone_number')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            

        </div>

        <div class="row">

            <label for="mail">Mail</label>
            <input type="mail" class="form-control @error('mail') is-invalid @enderror" id="mail" name="mail" value="{{old('mail') ?? $winery->mail}}">
            @error('mail')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary mt-5">Aggiungi</button>

    </form>

    </div>


@endsection