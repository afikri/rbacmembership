<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">RBAC Membership</div>
                <h2><a href="{{url('auth/login')}}">Login</a></h2>
                @can('free-download')
                    <h4><a href="#">Free Download</a></h4>
                @endcan

                @can('monthly-download')
                    <h4><a href="#">Monthly Download</a></h4>
                @endcan

                @can('yearly-download')
                    <h4><a href="#">Yearly Download</a></h4>
                @endcan
            </div>
        </div>
    </body>
</html>
