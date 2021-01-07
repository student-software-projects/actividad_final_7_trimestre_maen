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
                <a href="{{route('propietarios.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Consultar propietarios</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{route('conductores.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Consultar Conductores</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{route('vehiculos.inicio')}}">
                    <i class="tim-icons icon-chart-pie-45"></i>
                    <p>Consultar Vehiculos</p>
                </a>
            </li>

        </ul>
    </div>
</div>
