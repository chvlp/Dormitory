@extends('layouts.user-layout')

@section('title','ໜ້າຫຼັກ')

    @section('contain')
<br>
    <div style="width: 100%;margin:auto; " class="col-md-8">
    <div style="width: 100%;margin:auto;margin-top: 40px;" id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/dormitory1.jpg" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>ຫ້ອງເເຖວສະອາດ</h2>
                    <p>ສຳຫຼັບນັກສຶກສາທີ່ມາຈາກຕ້າງເເຂວງ</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dormitory2.jpg" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>ຫ້ອງເເຖວສະອາດ</h2>
                    <p>ສຳຫຼັບນັກສຶກສາທີ່ມາຈາກຕ້າງເເຂວງ</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dormitory3.jpg" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>ຫ້ອງເເຖວສະອາດ</h2>
                    <p>ສຳຫຼັບນັກສຶກສາທີ່ມາຈາກຕ້າງເເຂວງ</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br><br><hr style="border: 1px solid  #00c3ff;">
    <div class="mainn">
        <h1 class="text-center my-3">ມະຫາວິທະຍາໄລ ເເລະ ວິທະຍາໄລ ທີ່ືືທ່ານກຳລັງຮຽນ</h1>
    </div>

    <hr style="border: 1px solid  #00c3ff;">
    <div  class="container mb-5">
        <div class="card-deck">
            <div class="row">
                @foreach ($schools as $key => $item)
                    @if ($item->id==1)
                        <div class="col-md-4">
                            <div style="border: 1px solid  #5499C7 ;" class="card mb-4 box-shadow">
                                <a href="{{route('dongdok.index')}}"> <img class="card-img-top" src="{{URL::to($item->image)}}" height="300" width="10000" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <p style="font-size: 30px" class="card-text">{{$item->name}}</p>
                                        <p style="font-size: 13px" class="card-text">{{$item->village}}, {{$item->distric}}, {{$item->province}}</p>
                                            <div class="moree">
                                                <button class="button button2"><a href="{{route('dongdok.index')}}">ລາຍລະອຽດ</a></button>
                                            </div>

                                    </div>

                            </div>
                        </div>
                    @endif
                    @if ($item->id==2)
                        <div class="col-md-4">
                            <div style="border: 1px solid  #5499C7 ;" class="card mb-4 box-shadow">
                                <a href="{{route('visavakum.index')}}"> <img class="card-img-top" src="{{URL::to($item->image)}}" height="300" width="10000" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <p style="font-size: 30px" class="card-text">{{$item->name}}</p>
                                        <p style="font-size: 13px" class="card-text">{{$item->village}}, {{$item->distric}}, {{$item->province}}</p>
                                        <div class="moree">
                                            <button class="button button2"><a href="{{route('visavakum.index')}}">ລາຍລະອຽດ</a></button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    @endif
                    @if ($item->id==3)
                        <div   class="col-md-4">
                            <div style="border: 1px solid  #5499C7 ;" class="card mb-4 box-shadow">
                                <a href="{{route('soutsaka.index')}}"> <img class="card-img-top" src="{{URL::to($item->image)}}" height="300" width="10000" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <p style="font-size: 30px" class="card-text">{{$item->name}}</p>
                                        <p style="font-size: 13px" class="card-text">{{$item->village}}, {{$item->distric}}, {{$item->province}}</p>
                                        <div class="moree">
                                            <button class="button button2"><a href="{{route('soutsaka.index')}}">ລາຍລະອຽດ</a></button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    @endif


                @endforeach
            </div>
        </div>
    </div>

</div>

    @endsection
