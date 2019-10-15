<!-- REQUIRED JS SCRIPTS -->
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript">
</script>
<script>
    $("#busquedageneral").keyup(function(e){                      
       consultabusquedageneral = $("#busquedageneral").val();
        console.log(consultabusquedageneral);
    });

    $('#botonbusquedageneral').click(function(){
        location.href='{{ url('ventas/ordenes')}}'+'/'+consultabusquedageneral;
        });

    $("#cambiarproceso").keyup(function(e){                      
       consultacambiarproceso = $("#cambiarproceso").val();
        console.log(consultacambiarproceso);
    });

    $('#botoncambiarproceso').click(function(){
        location.href='{{ url('ventas/procesos')}}'+'/'+consultacambiarproceso;
        });
</script>
@stack('scripts')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
