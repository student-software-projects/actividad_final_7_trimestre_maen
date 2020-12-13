@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('conductores.create') }}">Crear Nuevo Jugador</a>
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
                @foreach($conductores as $conductor)
                    <tr>
                        <td>{{$conductor->id}}</td>
                        <td>{{$conductor->Numero_de_Cedula}}</td>
                        <td>{{$conductor->Primer_de_Nombre}}</td>
                        <td>{{$conductor->Segundo_de_Nombre	}}</td>
                        <td>{{$conductor->Primer_Apellido}}</td>
                        <td>{{$conductor->Segundo_Apellido}}</td>
                        <td>{{$conductor->Dirección}}</td>
                        <td>{{$conductor->Telefono}}</td>
                        <td>{{$conductor->Ciudad}}</td>
                        <td>{{$conductor->created_at}}</td>
                        <td>{{$conductor->updated_at}}</td>
                        <td>
                            <form action="{{ route( 'propietario.destroy',$conductor->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('conductores.show',$conductor->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{ route('conductores.edit',$conductor->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                <buttonty type="submit" class="btn btn-sm btn-danger">Eliminar</buttonty>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
