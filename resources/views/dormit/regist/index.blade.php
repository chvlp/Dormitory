@extends('layouts.dormit-layout')

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

    <form action="{{route('Dormit.regist.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="width: 70%;margin:auto;" class="col">
        <div class="row">
            <div class="col-xs-13  ">
                <div class="form-group">
                    <strong>ເບີໂທ</strong>
                    <input type="text" name="phone" class="form-control" placeholder="ເບິໂທຕິດຕໍ່">
                </div>
            </div>

            <div class="col-xs-13  ">
                <div class="form-group">
                    <strong>ຈຳນວນ</strong>
                    <input type="text" name="qty" class="form-control" placeholder=" ຈຳນວນຫ້ອງເເຖວທີ່ຕ້ອງການໂຄສະນາ">
                </div>
            </div>

            <div class="col-xs-13 ">
                <div class="form-group">
                    <strong>ລາຍລະອຽດ</strong>
                    <input type="text" name="details" class="form-control" placeholder=" ລາຍລະອຽດຕ່າງທີ່ຕ້ອງການບອກກັບເຈົ້າຂອງລະບົບ">
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
