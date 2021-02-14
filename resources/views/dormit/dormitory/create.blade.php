@extends('layouts.dormit-layout')
@section('title','ເພີມຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ເພີມຂໍ້ມູນໂຮງຮຽນ</h1></center>
    </section>

  <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('dormit.dormitory.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{route('dormit.dormitory.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ຊື່ຫ້ອວເເຖວ</strong>
                        <input type="text" name="name" class="form-control" placeholder="ຊື່ຫ້ອວເເຖວ">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ເລືອກໂຮງຮຽນ</strong>
                        <select  name="school_id" class="form-control" placeholder="ຊື່ຫ້ອວເເຖວ">
                            <option value=""> ກະລຸນາເລືອກໂຮງຮຽນ </option>
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
                            @foreach ($registors as $item)
                                @if($item->user_id)
                                <option value="{{$item->user->id}}"> {{$item->user->name}} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ບ້ານ</strong>
                        <input type="text" name="village" class="form-control" placeholder=" ບ້ານ">
                    </div>
                </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເມືອງ</strong>
                            <input type="text" name="distric" class="form-control" placeholder=" ເມືອງ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເເຂວງ</strong>
                            <input type="text" name="province" class="form-control" placeholder="ເເຂວງ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເບີໂທ</strong>
                            <input type="text" name="phone" class="form-control" placeholder="ເບີໂທ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ຮ່ອມ</strong>
                            <input type="text" name="horm" class="form-control" placeholder="ຮ່ອມ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ໄລຍາຫາງ</strong>
                            <input type="text" name="phase" class="form-control" placeholder="ໄລຍາຫາງ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ຕຳເເໜງ</strong>
                            <input type="text" name="locat" class="form-control" placeholder="ກະລຸນາກ້ອບປີທີ່ຢູ່ຕຳເເໜງ ວາງທີ່ນີ້ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ລາຄ່າ</strong>
                            <input type="text" name="price" class="form-control" placeholder="ລາຄ່າ ">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm- col-md-25">
                        <div class="form-group">
                            <strong>ລາຍລະອຽດ</strong>
                            <textarea type="text" name="detail" class="form-control" placeholder="ລາຍລະອຽດ "></textarea>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ຮູບພາບໂຮງຮຽນ</strong>
                            <input type="file" name="image">
                        </div>
                    </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">ເພິມ</button>
                </div>
            </div>
        </form>
    </section>


@endsection






