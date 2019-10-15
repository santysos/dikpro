<link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@extends ('adminlte::layouts.app')
@section ('contenido')
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <h4>
                        Reporte de Ordenes en Entrega
                    </h4>
                    {!! Form::open(array('url'=>'reportes/ordenes','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
                    <div class="col-md-4">
                        Fecha de Inicio
                        <div class="form-group">
                            <div class="input-group date" id="s1">
                                <input class="form-control" name="s1" type="text"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        Fecha Final
                        <div class="form-group">
                            <div class="input-group date" id="s2">
                                <input class="form-control" name="s2" type="text"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        .
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Buscar
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5>
                    <strong>
                        {{$enentrega->count}}
                    </strong>
                    Ordenes listas para entrega
                </h5>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover" id="tablaentrega">
                        <thead>
                            <th>
                                # Orden
                            </th>
                            <th>
                                Proceso
                            </th>
                            <th>
                                Fecha Hora
                            </th>
                            <th>
                                Empleado
                            </th>
                            <th>
                                Modificado por
                            </th>
                            <th>
                                Retraso
                            </th>
                            <th>
                                Opciones
                            </th>
                        </thead>
                        @foreach ($enentrega as $cat)
                        <tr>
                            <td>
                                <a href="{{URL::action('OrdenesController@show',$cat->tb_ordenes_id_tb_ordenes)}}" target="_blank">
                                    {{ $cat->tb_ordenes_id_tb_ordenes}}
                                </a>
                            </td>
                            <td>
                                {{ $cat->descripcion_procesos}}
                            </td>
                            <td>
                                {{ $cat->tb_fecha_hora}}
                            </td>
                            <td>
                                {{ $cat->asignado}}
                            </td>
                            <td>
                                {{ $cat->asignador}}
                            </td>
                            <td>
                                {{ $cat->retraso}}
                            </td>
                            <td>
                                <a href="{{URL::action('ProcesosController@show',$cat->tb_ordenes_id_tb_ordenes)}}" target="_blank">
                                    <button class="btn btn-success btn-xs" type="button">
                                        <span aria-hidden="true" class="glyphicon glyphicon-pencil">
                                        </span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@push ('scripts')
<script src="{{ asset('/js/moment-with-locales.js') }}" type="text/javascript">
</script>
<script src="{{ asset('/js/selectdinamico-procesos.js') }}" type="text/javascript">
</script>
<script src="{{ asset('/js/jquery.dataTables.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
    function titulo(){      
    document.title = 'Cambio de Procesos | Procesos'; }
titulo();

$(document).ready(function() {
    $('#tablaentrega').DataTable( {
        "order": [[ 0, "desc" ]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );


$("#norden").keyup(function(e){                      
       consulta = $("#norden").val();
        console.log(consulta);
    });

$('#boton').click(function(){
location.href='procesos/'+consulta;
        });
</script>
@endpush

@endsection
