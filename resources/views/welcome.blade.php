
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Informasi Parkir</title>

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
                top: 18px;
                text-align: center;
                align-items: center;
                justify-content: center;
            }

            .title {
                font-size: 84px;
                
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
            a:hover {
                    background-color: blueviolet;
                    color: white;
                }

            .m-b-md {
                margin-bottom: 30px;
                color: blueviolet;
            }

            .welcome {
                margin-top: 250px;
                font-size: 40px;
                
            }
        </style>
    </head>
    <body>
        

            <div class="content">
                <div class="welcome" >
                    Welcome to,
                </div>
            <div class="content">
                <div class="title m-b-md">
                    Sistem Informasi Parkir
                </div>
                <div class="flex-center ">
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                
            </div>
        </div>
    </body>
</html>
