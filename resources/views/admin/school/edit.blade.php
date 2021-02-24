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
                    <a class="btn btn-success" href="{{ route('school.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{url('update/school/'.$schools->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ຊື່ໂຮງຮຽນ</strong>
                        <input type="text" name="name" class="form-control" value="{{$schools->name}}">
                    </div>
                    @error('name')
                    <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                        <strong>ຜິດພາດ ! </strong> {{$message}}
                  </div>
                @enderror
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ບ້ານ</strong>
                        <input type="text" name="village" class="form-control" value="{{$schools->village}}">
                    </div>
                </div>
                @error('village')
                <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                    <strong>ຜິດພາດ ! </strong> {{$message}}
              </div>
            @enderror
            </div>
            <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເມືອງ</strong>
                            <input type="text" name="distric" class="form-control" value="{{$schools->distric}}">
                        </div>
                        @error('distric')
                        <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                            <strong>ຜິດພາດ ! </strong> {{$message}}
                      </div>
                    @enderror
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>ເເຂວງ</strong>
                            <input type="text" name="province" class="form-control" value="{{$schools->province}}">
                        </div>
                        @error('province')
                        <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                            <strong>ຜິດພາດ ! </strong> {{$message}}
                      </div>
                    @enderror
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບໂຮງຮຽນ</strong>
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບເກົ່າ</strong>
                        <img src="{{URL::to($schools->image)}}" height="40px" width="80px">
                        <input type="hidden" name="old_logo" value="{{$schools->image}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">ອັບເດດ</button>
                </div>
            </div>

        </form>
    </section>

@endsection











