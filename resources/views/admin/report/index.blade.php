@extends('layouts.admin-layout')
@section('title','ໜ້າຫຼັກເຈົ້າຂອງລະບົບ')
@section('contain')

<div class="re__contain">
    <div class="re__nav">
        <ul>
            <li class="re__list"><i style="color: darkcyan;font-size:13px;" class="fas fa-hotel"></i> <a href="{{ route('admin.report.all')}}">ຫ້ອງເເຖວທັງໝົດ</a> </li>
            <li class="re__list"><i class="fas fa-user"></i> <a href="{{ route('admin.report.some')}}">ຫ້ອງເເຖວສວນບຸກຄົນ</a> </li>
        </ul>
    </div>
</div>
@endsection

