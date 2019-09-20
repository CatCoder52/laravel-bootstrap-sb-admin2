<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 25px;
            }
            .content{
                margin-top:2em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">            
            <div class="top-right links">
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>            

            <div class="content">
                <img src="https://i0.wp.com/wp.laravel-news.com/wp-content/uploads/2019/09/laravel6.jpg" alt="" width="150">
                <div class="title m-b-md">
                    Bootstrap Admin SB2
                </div>


                <a href="{{route('home')}}" title="Click to Go">
                <img width="430" src="https://startbootstrap.com/assets/img/screenshots/themes/sb-admin-2.png" alt="Free Bootstrap Admin Theme - SB Admin 2">
                </a>
            </div>
        </div>
    </body>
</html>
