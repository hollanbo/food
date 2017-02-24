<!DOCTYPE html>
<html>
    <head>
        <title>{{ _("Food") }}</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            .inline-block {
                display: inline-block;
            }
        </style>
    </head>
    <body>

        @section('container')
            <div class="container-fluid">
                <div class="col-xs-hidden col-md-1 col-lg-2"></div>
                <div class="col-xs-12 col-md-10 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-xs-hidden col-md-1 col-lg-2"></div>
            </div>
        @show
    </body>
</html>
