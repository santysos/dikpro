@extends ('adminlte::layouts.app')
@section ('contenido')
        {!!Form::open(array('url'=>'departamento/departamentos','method'=>'POST','autocomplete'=>'off'))!!}
        {!!Form::token()!!}
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <h4>
                    Nuevo Departamento
                </h4>
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <hr>
                </hr>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    {!!Form::text('departamento',null,['class'=>'form-control','placeholder'=>'Ventas, Produccion, Diseño'])!!}
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 col-md-6 col-xs-6">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                    <button class="btn btn-danger" type="reset">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{!!Form::close()!!}

@push ('scripts')
<script>
    function titulo(){      
        document.title = 'Nuevo Departamento | Configuracion'; }
    titulo();
</script>
@endpush    
@endsection
