@extends('layouts.admin-layout')
@section('title','ເເກ້ໄຂຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ເເກ້ໄຂຂໍ້ມູນໂຮງຮຽນ</h1></center>
    </section>

  <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('image.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{url('update/image/'.$images->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">



                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ຊື່ຫ້ອງເເຖວ</strong>
                            <select  name="dormitory_id" class="form-control">
                                @foreach ($dormitorys as $item)
                                    <option style="color:rgb(49, 164, 199);" value="{{$item->id}}" {{$item->id == $images->dormitory_id ? 'selected' : ''}}> {{$item->name}} </option>
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບໂຮງຮຽນ</strong>
                        <input type="file" name="images">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບເກົ່າ</strong>
                        <img src="{{URL::to($images->images)}}" height="40px" width="80px">
                        <input type="hidden" name="old_logo" value="{{$images->images}}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">ອັບເດດ</button>
                </div>
            </div>
        </form>
    </section>

@endsection











