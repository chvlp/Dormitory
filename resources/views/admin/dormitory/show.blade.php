
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ລາຍລະອຽດຫ້ອງເເຖວຂອງ {{$dormitorys->name}}</h1></center>
    </section>


    <section class="content container-fluid">

        <div style="width:100%" class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                    <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('dormitory.index')}}"></i> ກັບ</a>
                </div>
            </div>
        </div><br>


        <div style="margin:auto;width:95%;height:800px;" class="boddy">
            <div style="padding:10px 5px 10px 5px;width:95%;height:750px;margin:auto;" class="pic">

                <div class="imagee">
                    <img class="card-img-top" src="{{URL::to($dormitorys->image)}}" height="350" width="100%s" alt="Card image cap">
                </div>
                <div style="padding-top:20px;padding-right:40px;" class="alltext">
                    <h4 style="cursor: context-menu;">
                    <p>ເຈົ້າຂອງຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;" > {{$dormitorys->user->name}}</a></p>
                    <p>ອີເມວເຈົ້າຂອງຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;" > {{$dormitorys->user->email}}</a></p>
                    <p>ຊື່ຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->name}}</a></p>
                    <p>ຂື້ນກັບໂຮງຮຽນ: <a style="font-style: italic;color:#5499C7;text-decoration: none"> {{$dormitorys->school->name}}</a></p>
                    <p>ບ້ານ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->village}}</a></p>
                    <p>ເມືອງ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->distric}}</a></p>
                    <p>ເເຂວງ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->province}}</a></p>
                    <p>ຮ່ອມ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->horm}}</a></p>
                    <p>ໄລຍາຫາງຈາກໂຮງຮຽນ: <a style="text-decoration: none;color:#5499C7;"> {{$dormitorys->phase}}</a></p>
                    <p>ເບີໂທ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->phone}}</a></p>
                    <p>ລາຄ່າ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->price}}</a></p>
                    <p>ລາຍລະອຽດ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->detail}}</a></p>
                </h4>
                </div>
            </div>
        </div>

    </section>


@endsection


