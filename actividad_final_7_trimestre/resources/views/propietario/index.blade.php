@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-18 mb-25" href="{{ route('propietario.create') }}">Crear Nuevo Propietario</a>
              <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero_de_Cedula</th>
                <th scope="col">Primer_de_Nombre</th>
                <th scope="col">Segundo_de_Nombre</th>
                <th scope="col">Primer_Apellido</th>
                <th scope="col">Segundo_Apellido</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ciudad</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
               <th scope="col">Opciones</th>
                </tr>
                </thead>
                  <tbody>
                  @foreach($propietarios as $propietario)
                  <tr>
                      <td>{{$propietario->id}}</td>
                      <td>{{$propietario->Numero_de_Cedula}}</td>
                      <td>{{$propietario->Primer_de_Nombre}}</td>
                      <td>{{$propietario->Segundo_de_Nombre	}}</td>
                      <td>{{$propietario->Primer_Apellido}}</td>
                      <td>{{$propietario->Segundo_Apellido}}</td>
                      <td>{{$propietario->Dirección}}</td>
                      <td>{{$propietario->Telefono}}</td>
                      <td>{{$propietario->Ciudad}}</td>
                      <td>{{$propietario->created_at}}</td>
                      <td>{{$propietario->updated_at}}</td>
                      <td>
                          <form action="{{ route( 'propietario.destroy',$propietario->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                          <a href="{{ route('propietario.show',$propietario->id)}}" class="btn btn-sm btn-info">Detalles</a>
                          <a href="{{ route('propietario.edit',$propietario->id)}}" class="btn btn-sm btn-warning">Editar</a>
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
               </table>
        </div>
    </div>
</div>
@endsection


