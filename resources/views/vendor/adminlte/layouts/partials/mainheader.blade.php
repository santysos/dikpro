<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a class="logo" href="{{ url('/home') }}">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>
                D
            </b>
            V2
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>
                Dikpro
            </b>
            2.0
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle" data-toggle="offcanvas" href="#" role="button">
            <span class="sr-only">
                {{ trans('adminlte_lang::message.togglenav') }}
            </span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="{{ url('/ventas/cliente/create') }}" target="_blank" title="Nuevo Cliente">
                        <i class="fa fa-user-plus">
                        </i>
                    </a>
                </li>
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="{{ url('/ventas/ordenes/create') }}" target="_blank" title="Nueva Orden">
                        <i class="fa fa-plus-square">
                        </i>
                        <span class="label label-danger">
                        </span>
                    </a>
                </li>
                @if (Auth::guest())
                <li>
                    <a href="{{ url('/register') }}">
                        {{ trans('adminlte_lang::message.register') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">
                        {{ trans('adminlte_lang::message.login') }}
                    </a>
                </li>
                @else
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <!-- The user image in the navbar-->
                        <img alt="User Image" class="user-image" src="{{ Gravatar::get($user->email) }}"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            {{ Auth::user()->name }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img alt="User Image" class="img-circle" src="{{ Gravatar::get($user->email) }}"/>
                            <p>
                                {{ Auth::user()->name }}
                                <small>
                                    {{ Auth::user()->email }}
                                </small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ trans('adminlte_lang::message.signout') }}
                                </a>
                                <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    <input style="display: none;" type="submit" value="logout">
                                    </input>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a data-toggle="control-sidebar" href="#">
                        <i class="fa fa-gears">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
