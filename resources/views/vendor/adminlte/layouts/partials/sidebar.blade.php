<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="{{ Gravatar::get($user->email) }}"/>
            </div>
            <div class="pull-left info">
                <p>
                    {{ Auth::user()->name }}
                </p>
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success">
                    </i>
                    {{ trans('adminlte_lang::message.online') }}
                </a>
            </div>
        </div>
        @endif
        <!-- search form (Optional) -->
        <div class="input-group sidebar-form">
            <input class="form-control" id="busquedageneral" name="busquedageneral" placeholder="# Buscar Orden..." type="text"/>
            <span class="input-group-btn">
                <button class="btn btn-flat" id="botonbusquedageneral" name="botonbusquedageneral" type="submit">
                    <i class="fa fa-search">
                    </i>
                </button>
            </span>
        </div>
        <div class="input-group sidebar-form">
            <input class="form-control" id="cambiarproceso" name="cambiarproceso" placeholder="# Cambiar Proceso..." type="text"/>
            <span class="input-group-btn">
                <button class="btn btn-flat" id="botoncambiarproceso" name="botoncambiarproceso" type="submit">
                    <i class="fa fa-search">
                    </i>
                </button>
            </span>
        </div>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">
                {{ trans('adminlte_lang::message.header') }}
            </li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ url('home') }}">
                    <i class="fa fa-home">
                    </i>
                    <span>
                        {{ trans('adminlte_lang::message.home') }}
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user">
                    </i>
                    <span>
                        Clientes
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('ventas/cliente/create')}}">
                            <i class="fa fa-user-plus">
                            </i>
                            Nuevo Cliente
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('ventas/cliente')}}">
                            <i class="fa fa-users">
                            </i>
                            Listado Clientes
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive">
                    </i>
                    <span>
                        Ordenes
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('ventas/ordenes/create')}}">
                            <i class="fa fa-plus-circle">
                            </i>
                            Nueva Orden
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('ventas/ordenes')}}">
                            <i class="fa fa-file-text">
                            </i>
                            Listado de Ordenes
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('ventas/procesos')}}">
                    <i class="fa fa-gg">
                    </i>
                    <span>
                        Estados - Procesos
                    </span>
                </a>
            </li>
            @if((Auth::user()->id_tb_tipo_empleados)==1)
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder">
                    </i>
                    <span>
                        Acceso
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('personal/empleado')}}">
                            <i class="fa fa-users">
                            </i>
                            Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="{{url('personal/empleados')}}">
                            <i class="fa fa-street-view">
                            </i>
                            Tipos de Empleados
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @if((Auth::user()->id_tb_tipo_empleados)==1)
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs">
                    </i>
                    <span>
                        Configuración
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('departamento/departamentos')}}">
                            <i class="fa fa-suitcase">
                            </i>
                            Departamentos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('departamento/procesos')}}">
                            <i class="fa fa-tasks">
                            </i>
                            Procesos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('departamento/servicios')}}">
                            <i class="fa fa-hand-o-right">
                            </i>
                            Servicios
                        </a>
                    </li>
                    <li>
                        <a href="{{url('departamento/productos')}}">
                            <i class="fa fa-print">
                            </i>
                            Productos
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt">
                    </i>
                    <span>
                        Reportes
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('reportes/ordenes')}}">
                            <i class="fa fa-line-chart">
                            </i>
                            Ventas
                        </a>
                    </li>
                    <li>
                        <a href="{{url('reportes/entrega')}}">
                            <i class="fa fa-check">
                            </i>
                            Listas para Entrega
                        </a>
                    </li>
                    <li>
                        <a href="{{url('reportes/facturados')}}">
                            <i class="fa fa-check-square-o">
                            </i>
                            Facturadas
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-plus-square">
                    </i>
                    <span>
                        Ayuda
                    </span>
                    <small class="label pull-right bg-red">
                        PDF
                    </small>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info-circle">
                    </i>
                    <span>
                        Acerca De...
                    </span>
                    <small class="label pull-right bg-yellow">
                        CRWB
                    </small>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
