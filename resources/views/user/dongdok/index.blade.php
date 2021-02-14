@extends('layouts.user-layout')
@section('title','ມະຫາວິທະຍາໄລ ດົງໂດກ')
@section('contain')

    <div class="conta">
        @foreach ($schools as $key => $item)
            @if ($item->id==1)
                <div class="imagex">
                    <div style="border: 1px solid  #5499C7 ;" class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{URL::to($item->image)}}" height="350" width="1000" alt="Card image cap">
                            <div class="card-body">
                                <p style="font-size: 30px; text-align:center;" class="card-text">{{$item->name}}</p>
                                <p style="font-size: 16px" class="card-text">
                                    <a href="https://goo.gl/maps/ZHphLVChdFStYuCd6" target="_blank">
                                        <i style="color: rgb(70, 20, 20);" class="fas fa-university"></i>
                                    </a>
                                        : {{$item->village}}, {{$item->distric}}, {{$item->province}}
                                </p>

                                <div style="margin-top: -50px;" class="locat">
                                    ເສັ້ນທາງໄປຫາ{{$item->name}}:
                                    <a href="https://goo.gl/maps/ZHphLVChdFStYuCd6" target="_blank">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

    </div>

                <br><br><br><hr style="border: 1px solid  #00c3ff;">
                <div class="mainn">
                    <h1 class="text-center my-3">ຫ້ອງເເຖວທີ່ໄກ້ຄຽງກັບ {{$item->name}}</h1>
                </div>
            @endif
        @endforeach
    <hr style="border: 1px solid  #00c3ff;">
    <br><br>

    <div class="container mb-5">
        <div class="card-deck">
            <div class="row">
                @foreach ($dormitorys as $key => $item)
                    @if($item->school_id==1)
                        <div class="col-md-4">
                            <div style="border: 1px solid  #5499C7 ;" class="card mb-4 box-shadow">
                                <a href="{{route('dongdok.show',$item->id)}}"> <img class="card-img-top" src="{{URL::to($item->image)}}" height="300" width="10000" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <p style="font-size: 30px; text-align:center;" class="card-text">{{$item->name}}</p>
                                        <p style="font-size: 13px" class="card-text">
                                            <i style="color: rgb(53, 4, 4);" class="fas fa-building"></i>
                                            : {{$item->village}}, {{$item->distric}}, {{$item->province}} </p>
                                        <div class="moree">
                                            <button class="button button2"><a href="{{route('dongdok.show',$item->id)}}">ລາຍລະອຽດ</a></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    @endsection
