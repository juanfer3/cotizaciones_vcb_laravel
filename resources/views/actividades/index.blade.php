@extends('layouts.app')

@section('content')
<div class="container" >
    <h1>Actividades</h1>

    @include('actividades._create_modal')   


    <br/>

    <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col" colspan="3"></th>
                
              </tr>
            </thead>
            <tbody id="add_actividad">
                
            </tbody>
          </table>

</div>



@endsection


