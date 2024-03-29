@extends ('adminlte::layouts.app')
@section ('contenido')
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-7 col-md-9 col-sm-9 col-xs-12">
                <div class="form-group">
                    <h4>
                        Departamentos --
                        <a href="departamentos/create">
                            <button class="btn btn-sm btn-success">
                                Nuevo
                            </button>
                        </a>
                    </h4>
                </div>
            </div>
            <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <h4 align="text-center">
                        @include('departamento.departamentos.search')
                    </h4>
                </div>
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
                                Departamentos
                            </th>
                            <th>
                                Opciones
                            </th>
                        </thead>
                        @foreach ($departamento as $cat)
                        <tr>
                            <td>
                                {{ $cat->id_tb_departamentos}}
                            </td>
                            <td>
                                {{ $cat->departamentos}}
                            </td>
                            <td>
                                @if($cat->id_tb_departamentos!=1)
                                @include('departamento.departamentos.delete')
                                @endif
                            </td>
                        </tr>
                        @include('departamento.departamentos.modal')
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
        document.title = 'Departamentos | Configuracion'; }
    titulo();
</script>
@endpush
@endsection
