@extends('layouts.admin-layout')
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
                    <a class="btn btn-success" href="{{ route('school.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{route('school.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ຊື່ໂຮງຮຽນ</strong>
                        <input type="text" name="name" class="form-control" placeholder="ຊື່ໂຮງຮຽນ">
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






