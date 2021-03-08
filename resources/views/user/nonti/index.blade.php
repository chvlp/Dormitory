@extends('layouts.user-layout')

@section('title','ສະໝັກເປັນເຈົ້າຂອງຫ້ອງເເຖວ')

    @section('contain')
    <br><br><br>

    <section style="margin-top:-10px;" class="content-header">
        <center><h1>ການເເຈ້ງເຕືອນ</h1></center>
    </section>

    <div class="outtumn">
        {{-- @if ( Auth::user()->roles->count() > 1 ) --}}
        @foreach ( Auth()->user()->roles as $item)
            @if  ($item->id==2)
            <div class="kkk">
                <span> * ການຮ່ອງຂໍຂອງທ່ານສຳເລັດ</span>
                <div class="intum">
                    <span>ຕຳເເໜ່ງປະຈຸບັນຂອງທ່ານເເມ່ນ <i class="fas fa-user-tie"></i> <i> {{ $item->name }} </i> </span>
                    <div class="ii">
                        <i class="iii">ກະລຸນາ 
                            <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">ອອກຈາກລະບົບ </a>
                                        ເເລະ ເຂົ້າສູ່ລະບົບໃໝ່</i>
                    </div>
                
                </div>
            </div>
                @endif
        @endforeach
    </div>
        {{-- @endif --}}
    @endsection
