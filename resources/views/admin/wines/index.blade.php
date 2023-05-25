@extends('layouts/app')

@section('content')


    
    <div class="container flex">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Winery</th>
                <th scope="col">Vineyard</th>
                <th scope="col">Color</th>
                <th scope="col">Type</th>
                <th scope="col">Gradation</th>
                <th scope="col">Extract</th>
                <th scope="col">Acidity</th>
                <th scope="col">Comandi</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($wines as $wine)
                <tr>

                    <td>
                        {{$wine->name}}
                    </td>
                    <td>
                        {{$wine->year}}
                    </td>
                    <td>
                        {{$wine->winery?->name}}
                    </td>
                    <td>
                        @foreach($wine->vineyards as $vineyard)
                            {{$vineyard->name}}
                        @endforeach
                    </td>
                    <td>
                        {{$wine->color}}
                    </td>
                    <td>
                        {{$wine->type}}
                    </td>
                    <td>
                        {{$wine->gradation}}
                    </td>
                    <td>
                        {{$wine->extract}}
                    </td>
                    <td>
                        {{$wine->acidity}}
                    </td>
                    <td>
                        <a href="{{ route('admin.wines.show', $wine->id) }}">Apri</a>
                    </td>



                </tr>
    
            @endforeach

            </tbody>
          </table>

          <a href="{{route('admin.wines.create')}}" class="btn btn-primary">
        Aggiungi Vino
        </a>

    </div>

@endsection