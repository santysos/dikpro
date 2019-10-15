@extends ('adminlte::layouts.app')
@section ('contenido')
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <h4>
                        Reporte de Ventas
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
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua">
                            <i class="fa fa-line-chart">
                            </i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                # DE ORDENES
                            </span>
                            <span class="info-box-number">
                                {{$ordenes->contordenes }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow">
                            <i class="ion ion-ios-cart-outline">
                            </i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                VENTAS
                            </span>
                            <span class="info-box-number">
                                $ {{$ordenes->sumatotal}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red">
                            <i class="fa fa-money">
                            </i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Abono
                                <strong>
                                    {{$ordenes->contordenes- $ordenes->contsinabonos}}
                                </strong>
                            </span>
                            $ {{ $ordenes->abonos}}
                            <span class="info-box-text">
                                Sin Abono
                                <strong>
                                    {{$ordenes->contsinabonos}}
                                </strong>
                            </span>
                            $
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover" id="example">
                        <thead>
                            <th>
                                #
                            </th>
                            <th>
                                Cliente
                            </th>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Agente
                            </th>
                            <th>
                                Valor
                            </th>
                            <th>
                                Abono
                            </th>
                            <th>
                                Proceso
                            </th>
                        </thead>
                        @foreach ($ordenes as $cat)
                        <tr>
                            <td>
                                {{$cat->id_tb_ordenes}}
                            </td>
                            <td>
                                {{$cat->Cliente_Nombre_Comercial}}
                            </td>
                            <td>
                                {{$cat->Fecha_de_Inicio}}
                            </td>
                            <td>
                                {{$cat->name}}
                            </td>
                            <td>
                                $ {{$cat->Total_Venta}}
                            </td>
                            <td>
                               $ {{$cat->Abono}}
                            </td>
                            <td>
                                {{$cat->descripcion_procesos}}  {{$cat->num_factura}}
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
<script src="{{ asset('/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('/js/jquery.dataTables.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
    	
       "order": [[ 0, "desc" ]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$.]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };


 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }
    } );
} );
    $(function () {

        $('#s1').datetimepicker({

            locale: 'es',
            format: 'DD-MM-YYYY',
            defaultDate: "{{$f1}}",

           
            
                     
                });
        $('#s2').datetimepicker({
            
            locale: 'es',
            format: 'DD-MM-YYYY',
            defaultDate: "{{$f2}}",
          
            
            useCurrent: false //Important! See issue #1075
        });
        $("#s1").on("dp.change", function (e) {
            $('#s2').data("DateTimePicker").minDate(e.date);
        });
        $("#s2").on("dp.change", function (e) {
            $('#s1').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
@endpush
@endsection
