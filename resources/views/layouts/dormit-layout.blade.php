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
            font-family: 'Noto Sans Lao';
        }
        #customers {

            font-family: 'Noto Sans Lao';
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
        .khor {
            text-decoration: none;
        }
        .khor:hover{
            text-decoration: none;
        }

.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8;
  cursor: pointer;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


    .out{
        /* border:1px solid black; */

        width: 82%;
        margin: auto;
        height: auto;


    }

    .intt h2{
        font-size: 20px;
        text-align: left;
        font-weight: bold;

    }


    .intt{
        padding:20px 20px 20px 20px;
        border:1px solid rgb(211, 211, 211);
        border-radius: 3px;
    }
    .textt p{
        font-size: 18px;
    }

        </style>

</head>
<body  class="skin-blue">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

          <!-- Logo -->
          <a style="text-decoration: none;cursor: context-menu;"  class="logo">
            <i title="ຊື່ຜູ້ໃຊ້ລະບົບໃນຂະນະນີ້" style="text-decoration:none; font-style: normal;font-size: 24px;color:rgb(255, 255, 255);font-family:'Monotype Corsiva';font-weight:Bold;cursor: context-menu;"><i class="fas fa-user"></i> {{ Auth::user()->name}}</i>
          </a>
          <!-- Header Navbar -->

          <nav class="navbar navbar-static-top" role="navigation">

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->

                  <li class="nav-item">
                  <li><a class="nav-link active" aria-current="page" href="{{route('Dormit.regist.index')}}"> ຮ້ອງຂໍການລົງໂຄສະນາຫ້ອງເເຖວ</a>
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
          <strong>Powered By &copy; Group Presentation at Sousaka Collage </strong>
        </footer>
<script src="../../js/adminlte.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.min.js"></script>
</body>
</html>

