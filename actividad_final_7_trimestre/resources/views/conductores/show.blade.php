@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Numero de Identificacion</th>
                        <td>{{ $conductor->Numero_de_documento}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Primer Nombre</th>
                        <td>{{ $conductor->Primer_de_Nombre}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Segundo Nombre</th>
                        <td>{{ $conductor->Segundo_de_Nombre}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Primer Apellido</th>
                        <td>{{ $conductor->Primer_Apellido}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Segundo Apellido</th>
                        <td>{{ $conductor->Segundo_de_Apellido}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Direccion</th>
                        <td>{{ $conductor->Direccion}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Telefono</th>
                        <td>{{ $conductor->Telefono}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Ciudad</th>
                        <td>{{ $conductor->Ciudad}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Creación</th>
                        <td>{{ $conductor->Ciudad}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Actualización</th>
                        <td>{{ $conductor->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('conductores.inicio') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
