
@extends('layouts.admin-layout')
@section('title','ໜ້າຫຼັກເຈົ້າຂອງລະບົບ')
@section('contain')

<div style="text-align: center;margin-top:20%">
    <h1>ຍິນດີຕອນຮັບ <i title="ຊື່ຜູ້ໃຊ້ລະບົບໃນຂະນະນີ້" style="font-style: normal;color:rgb(49, 128, 131);font-family:'Monotype Corsiva';font-weight:Bold;font-size:50px;"> {{ Auth::user()->name}}</i> </h1>
    <h2 >ສູ່ໜ້າເວບເຈົ້າຂອງລະບົບ</h2>
</div>

@endsection


