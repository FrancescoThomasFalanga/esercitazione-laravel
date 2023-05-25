@extends('layouts/app')

@section('content')


    
    <div class="container flex">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Command</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($vineyards as $vineyard)

                <tr>

                    <td>
                        {{$vineyard->name}}
                    </td>
                    <td>
                        {{$vineyard->desc}}
                    </td>
                    <td>
                        <a href="{{ route('admin.vineyards.show', $vineyard->id) }}">Apri</a>
                    </td>



                </tr>
    
            @endforeach

            </tbody>
          </table>

          <a href="{{route('admin.vineyards.create')}}" class="btn btn-primary">
        Aggiungi Vigneto
        </a>

    </div>

@endsection