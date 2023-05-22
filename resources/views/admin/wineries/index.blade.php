@extends('layouts/app')

@section('content')


    
    <div class="container flex">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone_Number</th>
                <th scope="col">Mail</th>
                <th scope="col">Command</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($wineries as $winery)

                <tr>

                    <td>
                        {{$winery->name}}
                    </td>
                    <td>
                        {{$winery->address}}
                    </td>
                    <td>
                        {{$winery->phone_number}}
                    </td>
                    <td>
                        {{$winery->mail}}
                    </td>
                    <td>
                        <a href="{{ route('admin.wineries.show', $winery->id) }}">Apri</a>
                    </td>



                </tr>
    
            @endforeach

            </tbody>
          </table>

          <a href="{{route('admin.wineries.create')}}" class="btn btn-primary">
        Aggiungi Cantina
        </a>

    </div>

@endsection