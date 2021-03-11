@extends('layouts.admin-layout')
@section('title','ໜ້າຫຼັກເຈົ້າຂອງລະບົບ')
@section('contain')

<div class="re__contain">
    {{-- <div class="re__nav">
        <ul>
            <li class="re__list"><i class="fas fa-hotel"></i> <a href="{{ route('admin.report.all')}}">ຫ້ອງເເຖວທັງໝົດ</a> </li>
            <li class="re__list"><i class="fas fa-user"></i> <a class="active" href="{{ route('admin.report.some')}}">ຫ້ອງເເຖວສວນບຸກຄົນ</a> </li>
        </ul>
    </div> --}}

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
    <h1 style="text-align: left;padding-left: 2.5rem;font-size:20px;font-weight:bold;padding-top:2rem;">ຫ້ອງເເຖວທັງໝົດ: <span style="color: red;"></span> </h1>
        <div  class="card-deck">
            <div>
                @foreach ($registUsers->user as $item)
                    <p>{{$item->dormitory}}, </p>
                @endforeach
                {{-- @foreach ($dormitorys as $item)
                    <div style="width:170px;" class="col-md-4">
                        <div style="border: 1px solid  #5499C7 ;width:160px;border-radius: 3px;" class="card mb-4 box-shadow">
                            <img style="border-radius: 3px;" class="card-img-top" src="{{URL::to($item->image)}}" height="110px;" width="100%" alt="Card image cap">
                                <div class="card-body">
                                    <p style="font-size: 30px;text-align: center;" class="card-text">{{$item->name}}</p>
                                    <p style="font-size: 13px;padding-left:1rem;" class="card-text">{{$item->village}} <br> {{$item->distric}} <br>{{$item->province}}</p>
                                </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
{{-- <center>
    {{$dormitorys->links()}}
</center --}}
@endsection

