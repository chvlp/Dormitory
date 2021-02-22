@extends('layouts.user-layout')

@section('title','ໜ້າສະໝັກເປັນເຈົ້າຂອງຫ້ອງເເຖວ')

    @section('contain')
    <br><br><br>

    <section class="content-header">
        <center><h1> ສະໝັກເປັນເຈົ້າຂອງຫ້ອງເເຖວ</h1></center>
    </section>


    @if ($message = Session::get('succes'))
        <center>
            <br><br><br>
            <div style="width:70%; text-align:left"  class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        </center>
    @endif

    <form action="{{route('user.regist.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="width: 70%;margin:auto;" class="col">
        <div class="row">

            <div class="col-xs-6  ">
                <div class="form-group">
                    <strong>ບ້ານ</strong>
                    <input type="text" name="village" class="form-control" placeholder=" ທີ່ຢູ່ ບ້ານ">
                </div>
            </div>

            <div class="col-xs-6  ">
                <div class="form-group">
                    <strong>ເມືອງ</strong>
                    <input type="text" name="distric" class="form-control" placeholder=" ທີ່ຢູ່ ເມືອງ">
                </div>
            </div>

            <div class="col-xs-6  ">
                <div class="form-group">
                    <strong>ເເຂວງ</strong>
                    <input type="text" name="province" class="form-control" placeholder=" ທີ່ຢູ່ ເເຂວງ">
                </div>
            </div>

            <div class="col-xs-6 ">
                <div class="form-group">
                    <strong>ລາຍລະອຽດ</strong>
                    <textarea type="text" name="details" class="form-control" placeholder=" ລາຍລະອຽດຕ່າງທີ່ຕ້ອງການບອກກັບເຈົ້າຂອງລະບົບ"></textarea>
                </div>
            </div><br>
            <div class="col-xs-6 col-sm-12 col-md-12">
                <br>
                <button type="submit" class="btn btn-primary">ສະໝັກ</button>
            </div>
        </div>
    </div>
    </form>

    @endsection
