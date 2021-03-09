<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../../css/AminLTE.min.css">
    <link rel="stylesheet" href="../../../css/boostrap.min.css">
    {{-- <link rel="stylesheet" href="../../css/fontawesome.min.css"> --}}
    <link rel="stylesheet" href="../../../css/ionicons.min.css">
    <link rel="stylesheet" href="../../../css/skinblue.min.css">
    <script src="https://kit.fontawesome.com/73f13da6d0.js" crossorigin="anonymous"></script>




    <style>
         body{
            font-family: 'Phetsarath OT';
        }
        #customers {

            font-family: 'Phetsarath OT';
          border-collapse: collapse;
          width: 100%;

        }


        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #5499C7  ;
          color: white;
        }

        .row{
            display: flex;
        }
        </style>

</head>
<body  class="skin-blue">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

          <!-- Logo -->
          <a  class="logo">
           {{ Auth::user()->name}}
          </a>
          <!-- Header Navbar -->

          <nav class="navbar navbar-static-top" role="navigation">

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->

                  <li class="nav-item">
                  <li><a class="nav-link active" aria-current="page" href="{{route('Dormit.regist.index')}}">  ສະໝັກຈຳນວນຫ້ອງເເຖວເພິມ</a>
                  </li>
                  </li>
                  <li class="nav-item">


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li><a class="nav-link active" aria-current="page" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> ອອກຈາກລະບົບ</a>
                    </li>
                </li>
                </li>
              </ul>
            </div>
          </nav>
        </header>
    <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree"><br>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('dormit.index')}}"><span><i class="fas fa-home"></i> ໜ້າຫຼັກ</span></a></li><hr>
        <li><a href="{{route('dormit.dormitory.index')}}"><span><i class="fas fa-hotel"></i> ຈັດການຂໍ້ມູນຫ້ອງເເຖວ</span></a></li>
        <li><a href="{{route('images.index')}}"><span><i class="fas fa-images"></i> ຈັດການຮູບພາບຂອງຫ້ອງເເຖວ</span></a></li>
         <hr>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <!-- Main content -->
           <section class="content container-fluid">

                     @yield('contain')

            </section>

        </div>
        <footer class="main-footer">
          <strong>Powered By &copy; AlignDev </strong>
        </footer>
<script src="../../js/adminlte.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.min.js"></script>
</body>
</html>

