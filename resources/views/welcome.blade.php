<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/73f13da6d0.js" crossorigin="anonymous"></script>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-family: 'Phetsarath OT';
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

            .m-b-md {
                margin-bottom: 30px;
            }
            .hhhh{
                color: blue;
            }
        </style>
    </head>
    <body>
        <div  class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div style="box-shadow: blacks;" class="top-right links">

                    @auth

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                        Somethings Wrong please
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i style="color:  #5499C7;" class="fas fa-sign-in-alt"></i><i style="color: red">Clik here </i> </a>
                        and login again



                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                        <a style="color:#5499C7;" href="{{ route('login') }}"> <i style="color:  #5499C7;" class="fas fa-sign-in-alt"></i> ເຂົ້າສູ່ລະບົບ</a>

                        @if (Route::has('register'))
                            <a style="color: #5499C7;" href="{{ route('register') }}"><i style="color:  #5499C7;" class="fas fa-user-plus"></i> ສະໝັກສະມາຊິກ</a>
                        @endif
                </div>
                <div style="width:100%" class="content"><hr style="margin-top:-50px;color:#5499C7;">
                    <div class="hhhh">
                        <div style="font-size: 70px;margin-bottom:-120px;" class="hjhj">
                            <h1>ຍິນດີຕອນຮັບ</h1>
                        </div>
                        <div style="font-size: 40px;" class="hj">
                         <h1>ເຂົ້າສູ່ເວບເເນະນຳຫ້ອງເເຖວ</h1>
                     </div>
                    </div>

                </div>
                @endauth
            @endif

        </div>
    </body>
</html>
