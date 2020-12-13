@include('layouts\app')
<div class="container">
    <div class="row">
        <div class="col-md-4">
           <form action="{{route('propietario.store')}}" method="POST">
               @csrf
               <div class="form-group mt-4">
                   <label for="name">Numero de Identificacion</label>
                   <input name="Numero de cedula" id="name" type="text" class="form-control" value="{{$propietario->numero_de_decula}}">
               </div>
               <div class="form-group">
                   <label for="nit">Primer Nombre</label>
                   <input name="Primer de Nombre" id="Primer Nombre" type="text" class="form-control" value="{{$propietario->primer_de_nombre}}">
               </div>
               <div class="form-group">
                   <label for="address">Segundo Nombre</label>
                   <input name="Segundo de nombre" id="address" type="text" class="form-control" value="{{$propietario->Segundo_de_Nombre}}">
               </div>
               <div class="form-group">
                   <label for="Primer Nombre">primer Apellido</label>
                   <input name="Primer de Apellido" id="address" type="text" class="form-control" value="{{$propietario->Primer_apellido}}">
               </div>
               <div class="form-group">
                   <label for="Segundo Apellido">Segundo Apellido</label>
                   <input name="Segundo de Apellido" id="address" type="text" class="form-control" value="{{$propietario->Segundo_Apellido}}">
               </div>
               <div class="form-group">
                   <label for="direccion">Direccion</label>
                   <input name="Direccion" id="address" type="text" class="form-control" value="{{$propietario->Direccion}}">
               </div>
               <div class="form-group">
                   <label for="telefono">telefono</label>
                   <input name="telefono" id="telefono" type="text" class="form-control" value="{{$propietario->Telefono}}">
               </div>
               <div class="form-group">
                   <label for="Ciudad">Ciudad</label>
                   <input name="Ciudad" id="ciudad" type="text" class="form-control" value="{{$propietario->Ciudad}}">
               </div>
               <button type="submit" class="btn btn-primary">Guardar Jugador</button>
               <a class="btn btn-sm btn-danger" href="{{route('propietario.index')}}">Cancelar</a>
           </form>
        </div>
    </div>
