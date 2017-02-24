<!DOCTYPE html>
<html>
    <head>
        <title>{{ _("Food") }}</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-family: 'Lato';
                font-weight: bold;
            }

            .inline-block {
                display: inline-block;
            }

            .hollanbo-food-title {
                font-size: 24px;
            }

            .hollanbo-food-ingredients {
                font-size: 20px;
                font-style: italic;
                text-indent: 16px;
            }

            .hollanbo-food-img > img {
                max-width: 150px;
                max-height: 150px;
            }

            .hollanbo-food-img {
                width: 150px;
                height: 100px;
                margin-right: 20px
            }

            .va-top {
                vertical-align: top;
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
