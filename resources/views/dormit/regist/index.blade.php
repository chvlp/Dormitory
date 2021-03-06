@extends('layouts.dormit-layout')

@section('title','ໜ້າສະໝັກໂຄສະນາຫ້ອງເເຖວ')

    @section('contain')
    <br><br><br>

    <section class="content-header">
        <center><h1 style="padding-bottom: 3rem;"> ຮ້ອງຂໍການລົງໂຄສະນາຫ້ອງເເຖວ</h1>
            <p> <span style="color: red">ໝາຍເຫດ!:</span>  ເມື່ອທ່ານສະໝັກຫ້ອງເເຖວໄປຄັ້ງ 1 ທ່ານຈະໄດ້ການໂຄສະນາຫ້ອງເເຖວ 1 ຫ້ອງເເຖວ</p>
            <p style="margin-left: -20px;"> <span style="color: red">ກົດ:</span>  ທ່ານສາມາດໂຄສະນາຫ້ອງເເຖວຂອງທ່ານໄດ້ພຽງເເຕ່ 5 ຫ້ອງເເຖວເທົ່ານັ້ນ</p>
        </center>
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
        <section style="width:70%" class="content container-fluid">
            {{-- <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຈຳນວນ</strong>
                        <input type="number" name="qty" class="form-control" placeholder=" ຈຳນວນຫ້ອງເເຖວທີ່ຕ້ອງການໂຄສະນາ">
                    </div>
                    @error('qty')
                    <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                        <strong>ຜິດພາດ ! </strong> {{$message}}
                    </div>
                    @enderror
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ລາຍລະອຽດ</strong>
                        <textarea type="text" name="details" class="form-control" placeholder=" ລາຍລະອຽດຕ່າງທີ່ຕ້ອງການບອກກັບເຈົ້າຂອງລະບົບ"></textarea>
                    </div>
                    @error('details')
                    <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                        <strong>ຜິດພາດ ! </strong> {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">ສະໝັກ</button>
                </div>
            </div>
    </div>
    </form>

    @endsection
