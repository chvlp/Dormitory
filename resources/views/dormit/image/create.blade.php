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
                    <a class="btn btn-success" href="{{ route('images.index') }}">ກັບ</a>
                </div>
            </div>
        </div>

        <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>ເລືອກຫ້ອງເເຖວ</strong>
                        <select  name="dormitory_id" class="form-control">
                            @foreach ($dormitorys as $item)
                            @if($item->user_id==auth()->user()->id)
                                <option value="{{$item->id}}"> {{$item->name}} </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ຮູບພາບ</strong>
                        <input type="file" name="images">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">ເພິມ</button>
                </div>
            </div>
        </form>
    </section>


@endsection





