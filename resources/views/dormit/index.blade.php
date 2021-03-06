@extends('layouts.dormit-layout')
@section('title','ໜ້າຫຼັກ ເຈົ້າຂອງຫ້ອງເເຖວ')
@section('contain')

    <div style="text-align: center;margin-top:10%">
        <h1>ຍິນດີຕອນຮັບ <i style="font-style: normal;color:rgb(49, 128, 131);font-family:'Monotype Corsiva';font-weight:Bold;font-size:50px;"> {{ Auth::user()->name}}</i> </h1>
        <h2>ສູ່ໜ້າເວບຂອງ ເຈົ້າຂອງຫ້ອງເເຖວ</h2>
        <h3>ຖ້າທ່ານຍັງບໍ່ມີການລົງໂຄສະນາຫ້ອງເເຖວ ກະລຸນາ<span style="color: blue;"><a class="khor" href="{{route('Dormit.regist.index')}}"> ຮ້ອງຂໍ </a></span>ການລົງໂຄສະນາຫ້ອງເເຖວ</h3>
        <h4 style="padding: 2rem 0;"> ຫ້ອງເເຖວທີ່ທ່ານມີໃນການໂຄສະນາ:</h4>
        @foreach ($dormitorys as $item)
        @if($item->user_id==Auth::user()->id)
        <h5>* <a style="text-decoration: none;" href="{{URL::to('show/dormit/dormitory/'.$item->id)}}">{{$item->name}}</a></h5>
        @endif
        @endforeach

    </div>
@endsection
