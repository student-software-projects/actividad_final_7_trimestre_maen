@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Numero de Identificacion</th>
                        <td>{{ $propietario->Numero_de_documento}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Primer Nombre</th>
                        <td>{{ $propietario->Primer_de_Nombre}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Segundo Nombre</th>
                        <td>{{ $propietario->Segundo_de_Nombre}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Primer Apellido</th>
                        <td>{{ $propietario->Primer_Apellido}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Segundo Apellido</th>
                        <td>{{ $propietario->Segundo_de_Apellido}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Direccion</th>
                        <td>{{ $propietario->Direccion}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Telefono</th>
                        <td>{{ $propietario->Telefono}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Ciudad</th>
                        <td>{{ $propietario->Ciudad}}</td>
                    </tr>
                    <tr>
                        <th scope="col" >Creación</th>
                        <td>{{ $propietario->Ciudad}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Actualización</th>
                        <td>{{ $propietario->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('company.inicio') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
