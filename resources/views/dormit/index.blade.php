@extends('layouts.dormit-layout')
@section('title','ໜ້າຫຼັກ ເຈົ້າຂອງຫ້ອງເເຖວ')
@section('contain')

    <div style="text-align: center;margin-top:20%">
        <h1>ຍິນດີຕອນຮັບ <i style="font-style: normal;color:rgb(49, 128, 131)"> {{ Auth::user()->name}}</i> </h1>
        <h2>ສູ່ໜ້າເວບຂອງ ເຈົ້າຂອງຫ້ອງເເຖວ</h2>
    </div>
@endsection
