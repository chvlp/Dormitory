@extends('layouts.admin-layout')
@section('title','ເເກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້')
@section('contain')

    <section class="content-header">
        <center><h1> ເເກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້</h1></center>
    </section>


    <section style="width:90%;" class="content container-fluid">

        <div style="width:100%;" class="row">
            <div  class="col-lg-12 m-t-5">
                <div style="padding-bottom:10px;" class="pull-right">
                <a style="background-color:#5499C7;border:1px solid black;margin-right:-30px" class="btn btn-success" href="{{route('admin.user.index') }}"><i class="fas fa-undo"></i> ກັບຄືນ</a><br>
            </div>
        </div>
        </div>
    @if ($message = Session::get('succes'))
        <center>
            <br><br><br>
            <div style="width:96%; text-align:left"  class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        </center>
    @endif
<div style="border: 1px solid rgb(71, 150, 214);padding:20px 30px 20px 30px;border-radius:3px;width:80%,margin:auto;" class="roww">
            <form action="{{route('admin.user.update',$user) }}" method="POST">
                @csrf
                {{method_field('PUT')}}

                <div class="form-group row">
                    <div class="col-md-4">
                        <h4>ຊື່ຜູ້ໃຊ້: <i style="font-style: normal;color:rgb(71, 150, 214)">{{$user->name}}</i> </h4>
                        <h4>ອີເມວ: <i style="font-style: normal;color:rgb(71, 150, 214)"> {{$user->email}}</i></h4>
                    </div>
                </div>


                @foreach ($roles as $item)
                <div class="form-group row">
                    <div class="col-md-6">
                    <div class="from-check">
                        @if ($item->id>1)
                        <input type="radio" name="roles[]" value="{{$item->id}}"
                        @if($user->roles->pluck('id')->contains($item->id)) checked @endif>
                        <label>{{$item->name}}</label>
                        @endif
                    </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </section>


@endsection





