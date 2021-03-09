@extends('layouts.user-layout')

@section('title','ສະໝັກເປັນເຈົ້າຂອງຫ້ອງເເຖວ')

    @section('contain')
    <br><br><br>

    <section style="margin-top:-10px;" class="content-header">
        <center><h1>ການເເຈ້ງເຕືອນ</h1></center>
    </section>
    <section style="height:350px;" class="content-header">
    <div style="
     background: rgb(157, 157, 157);
    border: none;
    outline: none;
    border-radius: 4px;
    width: 70%;
    margin: auto;
    " class="outtumn">
        {{-- @if ( Auth::user()->roles->count() > 1 ) --}}
        @foreach ( Auth()->user()->roles as $item)
            @if  ($item->id==2)
            <div style="
            padding: 0.5rem 1rem;
            font-size: 18px;
            font-weight: bold;
    " class="kkk">
                <span> * ການຮ່ອງຂໍຂອງທ່ານສຳເລັດ</span>
                <div class="intum">
                    <span style="
                     font-size: 15px;
                    font-weight: normal;
                    padding-left: 4rem;"
                     >ຕຳເເໜ່ງປະຈຸບັນຂອງທ່ານເເມ່ນ
                     <i style=" font-size: 15px;
                                font-weight: bold;
                                color: #1b6799;"
                                  class="fas fa-user-tie"></i> <i> {{ $item->name }} </i> </span>
                    <div style=" display: flex;" class="ii">
                        <i style=" display:flex;
                        font-size: 15px;
                        padding-left: 4rem;
                        font-weight: normal;" class="iii">ກະລຸນາ
                            <a style=" margin-top: -8px;
                            color: rgb(145, 0, 0);" class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">ອອກຈາກລະບົບ </a>
                                        ເເລະ ເຂົ້າສູ່ລະບົບໃໝ່</i>
                    </div>

                </div>
            </div>
                @endif
        @endforeach
    </div>
</section>
        {{-- @endif --}}
    @endsection
