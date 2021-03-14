@extends('layouts.admin-layout')
@section('title','ໜ້າຫຼັກເຈົ້າຂອງລະບົບ')
@section('contain')

<section class="content-header">
    <center><h1> ລາຍງານຂໍ້ມູນຫ້ອງເເຖວທັງໝົດ</h1></center>
</section>


<div class="re__contain">
       <div style="padding-top:6rem;" class="container mb-5">
        <div style="margin-top: -45px;" class="col-md-4">
            <form action="/admin/report/all/search" method="get" class="sidebar-form">
                <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="ຄົນຫາ...">
                <span class="input-group-btn">
                        <button style="background-color: #5499C7;" type="submit" class="btn btn-primary"><i style="color: wheat;" class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
    </div>

    <form action="/admin/report/search" method="POST">
        @csrf
        <br>
        <div style="padding-bottom:1rem;" class="container">
            <div  class="row">
                <div style="width:900%;" class="container-fluid">
                    <div class="form-group-row">
                        <div class="col-sm-3">
                            <span>ວັນເລີມຕົ້ນ</span>
                            <input type="date" class="form-control input-sm" id="from" name="fromDate">
                            @error('fromDate')
                                <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                                    <strong>ຜິດພາດ ! </strong> {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <span>ວັນສິນສຸດ</span>
                            <input type="date" class="form-control input-sm" id="to" name="toDate" >
                            @error('toDate')
                                <div style="padding:5px;border-radius: 5px;" class="alert-danger">
                                    <strong>ຜິດພາດ ! </strong> {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <button style="margin-top: 20px;margin-left:-30px;" type="submit" class="btn" name="search" title="ຄົ້ນຫາ"><i class="fas fa-search"></i></button>
                            <a href="{{ route('admin.report.all')}}"><span style="margin-top: 20px;margin-left:-10px;" class="btn"  title="ຣີເຟສ"><i class="fas fa-sync-alt"></i></span></a>
                        </div>
                        <div class="col-sm-1s">
                            <label style="margin-top: 27px;margin-left:150px;" for="">ຫ້ອງເເຖວທັງໝົດ: <span style="color: red;"> {{$dormitc}}</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- <h1 style="text-align: left;padding-left: 2.5rem;font-size:20px;font-weight:bold;padding-top:2rem;">ຫ້ອງເເຖວທັງໝົດ: <span style="color: red;"> {{$dormitc}}</span> </h1> --}}
        <div  class="card-deck">
            <div  class="row">
                @foreach ($dormitorys as $item)
                    <div style="width:170px;" class="col-md-4">
                        <div style="border: 1px solid  #5499C7 ;width:160px;border-radius: 3px;" class="card mb-4 box-shadow">
                            <img style="border-radius: 3px;" class="card-img-top" src="{{URL::to($item->image)}}" height="110px;" width="100%" alt="Card image cap">
                                <div class="card-body">
                                    <p style="font-size: 15px;text-align: center;" class="card-text">{{$item->name}}</p>
                                    <p style="font-size: 13px;padding-left:1rem;" class="card-text">ທີ່ຢູ່ບ້ານ: {{$item->village}}</p>
                                    <p style="font-size: 13px;padding-left:1rem;" class="card-text">ຮ່ອມ: {{$item->horm}}</p>
                                    <p style="font-size: 13px;padding-left:1rem;" class="card-text"> ຊື່ເຈົ້າ: {{$item->user->name}}</p>
                                    <p style="font-size: 13px;padding-left:1rem;" class="card-text"> ລົງໂຄສະນາວັນທີ: {{ $item->created_at->format('d/m/Y') }}</p>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<center>
    {{$dormitorys->links()}}
</center
@endsection

