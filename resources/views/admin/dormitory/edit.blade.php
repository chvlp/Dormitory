@extends('layouts.admin-layout')
@section('title','ເເກ້ໄຂຂໍ້ມູນຫ້ອງເເຖວ')
@section('contain')

    <section class="content-header">
        <center><h1> ເເກ້ໄຂຂໍ້ມູນຫ້ອງເເຖວ</h1></center>
    </section>

  <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('dormitory.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{url('update/dormitory/'.$dormitorys->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ຊື່ຫ້ອງເເຖວ</strong>
                        <input type="text" name="name" class="form-control" value="{{$dormitorys->name}}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ເລືອກໂຮງຮຽນ</strong>
                            <select  name="school_id" class="form-control">
                                @foreach ($schools as $item)
                                    <option value="{{$item->id}}"> {{$item->name}} </option>
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ເລືອກເຈົ້າຂອງຫ້ອງເເຖວ</strong>
                        <select  name="user_id" class="form-control" placeholder="ຊື່ຫ້ອວເເຖວ">
                            <option value=""> ກະລຸນາເລືອກເຈົ້າຂອງຫ້ອງເເຖວ </option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}"> {{$item->name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ບ້ານ</strong>
                        <input type="text" name="village" class="form-control" value="{{$dormitorys->village}}">
                    </div>
                </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເມືອງ</strong>
                            <input type="text" name="distric" class="form-control" value="{{$dormitorys->distric}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເເຂວງ</strong>
                            <input type="text" name="province" class="form-control" value="{{$dormitorys->province}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເບີໂທ</strong>
                            <input type="text" name="phone" class="form-control" value="{{$dormitorys->phone}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ຮ່ອມ</strong>
                            <input type="text" name="horm" class="form-control" value="{{$dormitorys->horm}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ໄລຍາຫາງ</strong>
                            <input type="text" name="phase" class="form-control" value="{{$dormitorys->phase}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ຕຳເເໜງ</strong>
                            <input type="text" name="locat" class="form-control" value="{{$dormitorys->locat}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ລາຄ່າ</strong>
                            <input type="text" name="price" class="form-control" value="{{$dormitorys->price}}">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ລາຍລະອຽດ</strong>
                            <input type="text" name="detail" class="form-control" value="{{$dormitorys->detail}}">
                        </div>
                    </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບໂຮງຮຽນ</strong>
                        <input type="file" name="image">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບເກົ່າ</strong>
                        <img src="{{URL::to($dormitorys->image)}}" height="40px" width="80px">
                        <input type="hidden" name="old_logo" value="{{$dormitorys->image}}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">ອັບເດດ</button>
                </div>
            </div>
        </form>
    </section>

@endsection










