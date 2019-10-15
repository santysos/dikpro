<head>
    <meta charset="utf-8">
        <title>
            Dikpro 2.0 - @yield('htmlheader_title', 'Dikapsa')
        </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- CSRF Token -->
            <meta content="{{ csrf_token() }}" name="csrf-token">
                <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css"/>
                <link href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
                <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
                <script>
                    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
                </script>
            </meta>
        </meta>
    </meta>
</head>
