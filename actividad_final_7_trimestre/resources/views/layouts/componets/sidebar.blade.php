<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper ps ps--active-y">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CT
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="active ">
                <a href="{{route('inicio.inicio')}}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{route('propietarios.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Crear Un Propietario</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{route('conductores.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Crear Un Conductor</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{route('vehiculos.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Crear Vehiculos</p>
                </a>
            </li>

        </ul>
    </div>
</div>
