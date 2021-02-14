<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Responsive Navbar</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}

body{
    font-family: 'Phetsarath OT';

}

ul{
    list-style: none;
}

a{
    text-decoration: none;
}

header{
    position: sticky;
    top: 0px;
    background-color: #5499C7 ;
    width: 100%;
    z-index: 1000;
}

section{
    position: relative;
    height: calc(100vh - 3rem);
    width: 100%;
    background: url('bg.jpg') no-repeat top center / cover;
    overflow: hidden;
}

.overlay{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: wheat;
}

.container{
    max-width: 65rem;
    padding: 0 2rem;
    margin: 0 auto;
    display: flex;
    position: relative;
}

.logo-container{
    flex: 1;
    display: flex;
    align-items: center;
}

.nav-btn{
    flex: 3;
    display: flex;
}

.nav-links{
    flex: 2;
}

.log-sign{
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
}

.logo{
    color: #fff;
    font-size: 1.1rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    line-height: 3rem;
}

.logo span{
    font-weight: 300;
}

.btn{
    display: inline-block;
    padding: .5rem 1.3rem;
    font-size: .8rem;
    border: 2px solid #fff;
    border-radius: 2rem;
    line-height: 1;
    margin: 0 .2rem;
    transition: .3s;
    text-transform: uppercase;
}

.btn.solid, .btn.transparent:hover{
    background-color: #fff;
    color: #69bde7;
}

.btn.transparent, .btn.solid:hover{
    background-color: transparent;
    color: #fff;
}

.nav-links > ul{
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-link{
    position: relative;
}

.nav-link > a{
    line-height: 3rem;
    color: #fff;
    padding: 0 .8rem;
    letter-spacing: 1px;
    font-size: .95rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: .5s;
}

.nav-link > a > i{
    margin-left: .2rem;
}
/*
.nav-link:hover > a{
    transform: scale(1.1);
} */

.dropdown{
    position: absolute;
    top: 100%;
    left: 0;
    width: 12rem;
    transform: translateY(10px);
    opacity: 0;
    pointer-events: none;
    transition: .5s;
}

.dropdown ul{
    position: relative;
}

.dropdown-link > a{
    display: flex;
    background-color:#5499C7;
    color: #fff;
    padding: .5rem 1rem;
    font-size: .9rem;
    align-items: center;
    justify-content: space-between;
    transition: .3s;
}
/*
.dropdown-link:hover > a{
    background-color: #3498db;
    color: #fff;
} */

.dropdown-link:not(:nth-last-child(2)){
    border-bottom: 1px solid #efefef;
}


.arrow{
    position: absolute;
    width: 11px;
    height: 11px;
    top: -5.5px;
    left: 32px;
    background-color: #fff;
    transform: rotate(45deg);
    cursor: pointer;
    transition: .3s;
    z-index: -1;
}

/* .dropdown-link:first-child:hover ~ .arrow{
    background-color: #3498db;
} */

.dropdown-link{
    position: relative;
}

.dropdown.second{
    top: 0;
    left: 100%;
    padding-left: .8rem;
    cursor: pointer;
    transform: translateX(10px);
}

.dropdown.second .arrow{
    top: 10px;
    left: -5.5px;
}

.nav-link:hover > .dropdown,
.dropdown-link:hover > .dropdown{
    transform: translate(0, 0);
    opacity: 1;
    pointer-events: auto;
}

.hamburger-menu-container{
    flex: 1;
    display: none;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu{
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.hamburger-menu div{
    width: 1.6rem;
    height: 3px;
    border-radius: 3px;
    background-color: #fff;
    position: relative;
    z-index: 1001;
    transition: .5s;
}

.hamburger-menu div:before,
.hamburger-menu div:after{
    content: '';
    position: absolute;
    width: inherit;
    height: inherit;
    background-color: #fff;
    border-radius: 3px;
    transition: .5s;
}

.hamburger-menu div:before{
    transform: translateY(-7px);
}

.hamburger-menu div:after{
    transform: translateY(7px);
}

#check{
    position: absolute;
    top: 50%;
    right: 1.5rem;
    transform: translateY(-50%);
    width: 2.5rem;
    height: 2.5rem;
    z-index: 90000;
    cursor: pointer;
    opacity: 0;
    display: none;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div{
    background-color: transparent;
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:before{
    transform: translateY(0) rotate(-45deg);
}

#check:checked ~ .hamburger-menu-container .hamburger-menu div:after{
    transform: translateY(0) rotate(45deg);
}

@keyframes animation{
    from{
        opacity: 0;
        transform: translateY(15px);
    }
    to{
        opacity: 1;
        transform: translateY(0px);
    }
}

@media (max-width: 920px){
    .hamburger-menu-container{
        display: flex;
    }

    #check{
        display: block;
    }

    .nav-btn{
        position: fixed;
        height: calc(100vh - 3rem);
        top: 3rem;
        left: 0;
        width: 100%;
        background-color: #69bde7;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        overflow-x: hidden;
        overflow-y: auto;
        transform: translateX(100%);
        transition: .65s;
    }

    #check:checked ~ .nav-btn{
        transform: translateX(0);
    }

    #check:checked ~ .nav-btn .nav-link,
    #check:checked ~ .nav-btn .log-sign{
        animation: animation .5s ease forwards var(--i);
    }

    .nav-links{
        flex: initial;
        width: 100%;
    }

    .nav-links > ul{
        flex-direction: column;
    }

    .nav-link{
        width: 100%;
        opacity: 0;
        transform: translateY(15px);
    }

    .nav-link > a{
        line-height: 1;
        padding: 1.6rem 2rem;
    }
/*
    .nav-link:hover > a{
        transform: scale(1);
        background-color: #50a9d6;
    } */

    .dropdown, .dropdown.second{
        position: initial;
        top: initial;
        left: initial;
        transform: initial;
        opacity: 1;
        pointer-events: auto;
        width: 100%;
        padding: 0;
        background-color: #3183ac;
        display: none;
    }

    /* .nav-link:hover > .dropdown,
    .dropdown-link:hover > .dropdown{
        display: block;
    }

    .nav-link:hover > a > i,
    .dropdown-link:hover > a > i{
        transform: rotate(360deg);
    } */

    .dropdown-link > a{
        background-color: transparent;
        color: #fff;
        padding: 1.2rem 2rem;
        line-height: 1;
    }

    .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 3rem;
    }

    .dropdown.second .dropdown.second .dropdown-link > a{
        padding: 1.2rem 2rem 1.2rem 4rem;
    }

    .dropdown-link:not(:nth-last-child(2)){
        border-bottom: none;
    }

    .arrow{
        z-index: 1;
        background-color: #69bde7;
        left: 10%;
        transform: scale(1.1) rotate(45deg);
        transition: .5s;
    }

    /* .nav-link:hover .arrow{
        background-color: #50a9d6;
    } */

    .dropdown .dropdown .arrow{
        display: none;
    }

    /* .dropdown-link:hover > a{
        background-color: #3a91bd;
    } */

    /* .dropdown-link:first-child:hover ~ .arrow{
        background-color: #50a9d6;
    } */

    .nav-link > a > i{
        font-size: 1.1rem;
        transform: rotate(-90deg);
        transition: .7s;
    }

    .dropdown i{
        font-size: 1rem;
        transition: .7s;
    }

    .log-sign{
        flex: initial;
        width: 100%;
        padding: 1.5rem 1.9rem;
        justify-content: flex-start;
        opacity: 0;
        transform: translateY(15px);
    }
}

/* older */

.containn{
        height: 200px;
        width: auto;
        background-color: #eeeeee

    }
    .foott{
        text-align: center;
        font-size: 40px;
        margin-top:-18px;
    }
    .txt  p{
        padding-top: 5%;
    }


    /* older */

    .mainn{
        padding-top: 1%;
        margin-top:-18px;
        margin-bottom:-18px;
        height: 90px;
        width: auto;
        background-color: #eeeeee;
 .containn{
        height: 200px;
        width: auto;
        background-color: #eeeeee

    }
    .foott{
        text-align: center;
        font-size: 40px;
        margin-top:-18px;
    }
    .txt  p{
        padding-top: 5%;
    }   }
    .conta{

        margin: auto;
        margin-top: 30px;
        width: 90%;

    }
    .imagex{
        width: 100%;
    }
    .locat{
        margin-top: -5px;
        text-align: right;
    }
    .locat i{
        font-size:30px;
        color:rgb(145, 0, 0);
    }
    .locat i:hover{
        transform: scale(1);
        transition: 1ms;
        color:rgb(255, 0, 0);
    }
    .moree a{
        font-size: 13px;
        text-decoration: none;
        color: #5499C7;
    }
    .moree a:hover{
        transition: 1ms ease-in;
        font-size: 15px;
        color: #197e43;
    }
    .button{
        width: 100px;
        border-radius: 5%;
        border: 2px solid #5499C7;
    }
    .button:hover{

        border: 2px solid #197e43;
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
    .card-text h2{
        padding-left: 50px;

    }

    .texttt p{
        font-size: 16px;
        font-weight: bold;
        padding-left: 50px;
    }
    /* .texttt{
        height: 390px;

    } */

    .contax{
        display: flex;
        width: 90%;
        margin: auto;
        border:1px solid rgb(211, 211, 211);
        border-radius: 3px;

    }

    .contax .imagexx .cardx{
        display: flex;
        padding: 0px 10px 0px 10px;
    }
    .ouut{
        border: 1px solid  rgb(211, 211, 211);
        border-radius: 3px;
        width: 90%;
        margin: auto;
    }
    .outtu{


        padding-top: 50px;

    }

/* new */

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

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

    </style>
</head>

<body>
    <header class="headerr">
        <div style="height:50px;" class="container">
            <input type="checkbox" name="" id="check">

            <div class="logo-container">
                <p style="font-size: 18px; color:white;">Powered By © AlignDev</p>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul style="margin-left:15px">
                        <li class="nav-link" style="--i: .6s">
                            <a  href="{{route('user.index')}}"><i style="color: #fff;margin-top:-4px;margin-right:10px;" class="fas fa-home"></i>ໜ້າຫຼັກ</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a style="cursor:context-menu;color:white;" style="cursor:context-menu;">ເລືອກໂຣງຮຽນ<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>

                                        <li class="dropdown-link">
                                            @foreach ($schoolss as $key => $item)
                                                @if ($item->id==1)
                                                    <a href="{{route('dongdok.index')}}"><i style="color: #fff ;" class="fas fa-university"></i> {{$item->name}}<i class="fas fa-caret-right"></i></a>
                                                @endif
                                            @endforeach
                                                <div class="dropdown second">
                                                    <ul style="margin-left:-10px;">
                                                        <li class="dropdown-link">
                                                            @foreach ($dormitoryss as $key => $item)
                                                                @if($item->school_id==1)
                                                                    <a href="{{route('dongdok.show',$item->id)}}">{{$item->name}}</a>
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                </div>
                                        </li>
                                        <li class="dropdown-link">
                                            @foreach ($schoolss as $key => $item)
                                                @if ($item->id==2)
                                                    <a href="{{route('visavakum.index')}}"><i style="color: #fff ;" class="fas fa-university"></i> {{$item->name}}<i class="fas fa-caret-right"></i></a>
                                                @endif
                                            @endforeach

                                                <div class="dropdown second">
                                                    <ul>
                                                        <li class="dropdown-link">
                                                            @foreach ($dormitoryss as $key => $item)
                                                                @if($item->school_id==2)
                                                                    <a href="{{route('visavakum.show',$item->id)}}">{{$item->name}}</a>
                                                                @endif
                                                            @endforeach
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>
                                        <li class="dropdown-link">
                                            @foreach ($schoolss as $key => $item)
                                                @if ($item->id==3)
                                                    <a href="{{route('soutsaka.index')}}"><i style="color: #fff ;" class="fas fa-graduation-cap"></i> {{$item->name}}<i class="fas fa-caret-right"></i></a>
                                                @endif
                                            @endforeach

                                                <div class="dropdown second">
                                                    <ul>
                                                        <li class="dropdown-link">
                                                            @foreach ($dormitoryss as $key => $item)
                                                                @if($item->school_id==3)
                                                                    <a href="{{route('soutsaka.show',$item->id)}}">{{$item->name}}</a>
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                </div>
                                        </li>
                                </ul>
                            </div>
                        </li>





            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <li style="padding-left: 25px" class="nav-link" style="--i: 1.1s">
                    <a style="cursor:context-menu;" ><i style="margin-top:-6px;margin-right:6px;" class="far fa-user"></i> {{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown">
                        <ul>
                            <li  class="dropdown-link">
                                <a href="{{route('user.regist.index')}}">ສະໝັກເປັນເຈົ້າຂອງຫ້ອງເເຖວ</a>
                            </li>
                            <li class="dropdown-link">
                                <a href="#">ກ່ຽວກັບເຮົາ</a>
                            </li>

                            <li class="dropdown-link">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">ອອກຈາກລະບົບ</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </form>
        </ul>
    </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>

@yield('contain')


<hr style="border: 1px solid  #0099ff;">
    <div class="containn">
        <div class="foott">
            <div class="txt">
                <p>Powered By © AlignDev</p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/73f13da6d0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>

            <script src="../js/bootstrap.min.js"></script>
</body>

</html>
