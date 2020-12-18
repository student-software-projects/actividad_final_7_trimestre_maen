@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mt-3 mb-4" href="{{ route('conductores.create') }}">Crear Nuevo Conductor</a>
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
                @foreach($conductores as $conductores)
                    <tr>
                        <td>{{$conductores->id}}</td>
                        <td>{{$conductores->Numero_de_Cedula}}</td>
                        <td>{{$conductores->Primer_de_Nombre}}</td>
                        <td>{{$conductores->Segundo_de_Nombre	}}</td>
                        <td>{{$conductores->Primer_Apellido}}</td>
                        <td>{{$conductores->Segundo_Apellido}}</td>
                        <td>{{$conductores->Dirección}}</td>
                        <td>{{$conductores->Telefono}}</td>
                        <td>{{$conductores->Ciudad}}</td>
                        <td>{{$conductores->created_at}}</td>
                        <td>{{$conductores->updated_at}}</td>
                        <td>
                            <form action="{{ route( '$conductores.destroy',$conductores->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('conductores.show',$conductores->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{ route('conductores.edit',$conductores->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
