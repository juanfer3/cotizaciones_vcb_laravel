@extends('layouts.app')

@section('content')
<div class="container" >
    <h1>Maestras</h1>

    <button type="button" class="btn btn-info">Info</button>

    <br/>

    <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col" colspan="3"></th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($maestros as $maestro)
                    <tr>
                        <td> {{$maestro->nombre}} </td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                @endforeach
            </tbody>
          </table>

</div>
@endsection