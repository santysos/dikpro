@extends ('adminlte::layouts.app')
@section ('contenido')
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                <div class="form-group">
                    <h4>
                        Tipos de Empleados --
                        <a href="empleados/create">
                            <button class="btn btn-sm btn-success">
                                Nuevo
                            </button>
                        </a>
                    </h4>
                </div>
                <hr>
                </hr>
            </div>
            <hr>
            </hr>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if(Session::has('message'))
                <p class="alert alert-info">
                    {{Session::get('message')}}
                </p>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover" id="example">
                        <thead>
                            <th>
                                Id
                            </th>
                            <th>
                                Departamento
                            </th>
                            <th>
                                Tipo Empleado
                            </th>
                            <th>
                                Opciones
                            </th>
                        </thead>
                        @foreach ($tipo_empleado as $cat)
                        <tr>
                            <td>
                                {{ $cat->id_tb_tipo_empleados}}
                            </td>
                            <td>
                                {{ $cat->departamentos}}
                            </td>
                            <td>
                                {{ $cat->tipo_empleados}}
                            </td>
                            <td>
                                @if($cat->id_tb_tipo_empleados!= 1)
                        @include('personal.empleados.delete')
                    @endif
                            </td>
                        </tr>
                        @include('personal.empleados.modal')
            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@push ('scripts')
<script>
    function titulo(){      
    
    document.title = 'Listado de Tipos de Empleado | Acceso'; }
titulo();
</script>
@endpush
@endsection
