
@extends('layouts.admin-layout')
@section('title','ຂໍ້ມູນການຮ້ອງຂໍເປັນເຈົ້າຂອງຫ້ອງເເຖວຈາກຜູ້ໃຊ້')
@section('contain')

    <section class="content-header">
        <center><h1> ຂໍ້ມູນການຮ້ອງຂໍເປັນເຈົ້າຂອງຫ້ອງເເຖວຈາກຜູ້ໃຊ້</h1></center>
    </section><br><br>


    <section class="content container-fluid">

        {{-- <div style="margin-top: -45px;" class="col-md-4">
            <form action="/dormitory/search" method="get" class="sidebar-form">
                <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="ຄົນຫາ...">
                <span class="input-group-btn">
                        <button style="background-color: #5499C7;" type="submit" class="btn btn-primary"><i style="color: wheat;" class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
    </div> --}}

    @if ($message = Session::get('succes'))
        <center>
            <br><br><br>
            <div style="width:96%; text-align:left"  class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        </center>
    @endif
    <br>

                <div class="container">
                    <div  class="card-deck">
                        <div  class="row">
                            @foreach ($registUsers as $key => $item)

                                <div style="width: 185px;height:auto;" class="col-md-4">
                                    <div style="padding:15px 15px 15px 15px;border-radius:5px;border: 1px solid  #5499C7 ; width: 150px;height:auto;background:#cfecff" class="card mb-4 box-shadow">
                                        <a href="{{route('admin.user.edit',$item->id+1) }}"><img style="border-radius: 5px;" class="card-img-top" src="http://pushshift.io/wp-content/uploads/2019/06/user-management_3.jpg" height="65px" width="100%" alt="Card image cap"></a>
                                            <div style="font-size: 13px"  class="card-body">
                                                <p class="card-text">ຊື່: <a href="{{route('admin.user.edit',$item->id+1) }}"><i style="font-style:normal;color:#5499C7"> {{$item->user->name}}</i></a></p>
                                                <p class="card-text">ເບິໂທ:<a href="{{route('admin.user.edit',$item->id+1) }}"><i style="font-style:normal;color:#5499C7"> {{$item->user->phone}} </i></a></p>
                                                <p class="card-text">ບ້ານ: <a href="{{route('admin.user.edit',$item->id+1) }}"> {{$item->village}}</a></p>
                                                <p class="card-text">ເມືອງ: <a href="{{route('admin.user.edit',$item->id+1) }}">{{$item->distric}}</a></p>
                                                <p class="card-text">ເເຂວງ: <a href="{{route('admin.user.edit',$item->id+1) }}"> {{$item->province}}</a></p>
                                                <p class="card-text">ລາຍລະອຽດ: <a href="{{route('admin.user.edit',$item->id+1) }}">{{$item->details}} </a></p></p>
                                                <p class="card-text">ຕຳເເໜ່ງ: <a style="color: red;" href="{{route('admin.user.edit',$item->id+1) }}">{{ implode(', ', $item->user->roles()->get()->pluck('name')->toArray()) }} </a></p></p>
                                                <div  class="ggg">
                                                    <div class="ff">
                                                        <a href="{{route('admin.user.edit',$item->id+1) }}"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div class="hh">
                                                        <a  style="color:red;" href="{{URL::to('admin/delete/registor/user/'.$item->id)}}"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <center>
                    {{$registUsers->links()}}
                </center>
    </section>


@endsection


