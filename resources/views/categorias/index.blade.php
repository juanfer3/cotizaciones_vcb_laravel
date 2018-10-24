@extends('layouts.app')

@section('content')
<div class="container" >
    <h1>Categorias</h1>

    @include('categorias._create_modal')    

    {{--  <button type="button" class="btn btn-info">Info</button>  --}}

    <br/>

    <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col" colspan="3"></th>
                
              </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>

</div>
@endsection