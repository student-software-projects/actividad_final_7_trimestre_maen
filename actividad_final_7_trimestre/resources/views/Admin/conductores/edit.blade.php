<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0. maximun-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>TIENDA VIRTUAL</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('conductores.update',$equipos->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nit">Numero de Cedula</label>
                    <input name="Numero de Cedula" id="nit" type="text" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="name">Primer de Nombre</label>
                    <input name="Nombre del Conductor" id="name" type="text" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="name">segundo Nombre</label>
                    <input name="Nombre del Conductor" id="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Primer Apellido</label>
                    <input name="Primer Apellido" id="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Segundo Apellido</label>
                    <input name="Segundo Apellido" id="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Direccion</label>
                    <input name="Direccion" id="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">telefono</label>
                    <input name="telefono" id="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">ciudad</label>
                    <input name="ciudad" id="address" type="text" class="form-control">
                </div>
                    <label for="name">ciudad</label>
                    <select name="" id="" class="form-control" required>
                        <option value="">seleccionar...</option>
                        @foreach($localidad as $localidad
                            <option value="{{ $localidad->id }}">{{$localidad->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Actualización</button>
                <a class="btn btn-sm btn-danger" href="{{ route('conductores.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
