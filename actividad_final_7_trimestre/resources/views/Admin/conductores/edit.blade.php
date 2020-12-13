@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('conductores.update',$conductor->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group mt-4">
                    <label for="name">Numero de Identificacion</label>
                    <input name="Numero de cedula" id="name" type="text" class="form-control" value="{{$conductor->numero_de_decula}}">
                </div>
                <div class="form-group">
                    <label for="nit">Primer Nombre</label>
                    <input name="Primer de Nombre" id="Primer Nombre" type="text" class="form-control" value="{{$conductor->primer_de_nombre}}">
                </div>
                <div class="form-group">
                    <label for="address">Segundo Nombre</label>
                    <input name="Segundo de nombre" id="address" type="text" class="form-control" value="{{$conductor->Segundo_de_Nombre}}">
                </div>
                <div class="form-group">
                    <label for="Primer Nombre">primer Apellido</label>
                    <input name="Primer de Apellido" id="address" type="text" class="form-control" value="{{$conductor->Primer_apellido}}">
                </div>
                <div class="form-group">
                    <label for="Segundo Apellido">Segundo Apellido</label>
                    <input name="Segundo de Apellido" id="address" type="text" class="form-control" value="{{$conductor->Segundo_Apellido}}">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input name="Direccion" id="address" type="text" class="form-control" value="{{$conductor->Direccion}}">
                </div>
                <div class="form-group">
                    <label for="telefono">telefono</label>
                    <input name="telefono" id="telefono" type="text" class="form-control" value="{{$conductor->Telefono}}">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input name="Ciudad" id="ciudad" type="text" class="form-control" value="{{$conductor->Ciudad}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Actualización</button>
                <a class="btn btn-sm btn-danger" href="{{ route('conductores.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

