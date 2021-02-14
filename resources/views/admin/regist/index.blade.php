
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ຂໍ້ມູນການຮອງຂໍເປັນເຈົ້າຂອງຫ້ອງເເຖວຈາກຜູ້ໃຊ້</h1></center>
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

        {{-- <center>
            <table style="width:96%" id="customers">
                <tr>


                        <th width="20px">ລະຫັດ</th>
                        <th width="10px">ຊື່ຜູ້ໃຊ້</th>
                        <th width="50px">ເບິໂທ</th>
                        <th width="50px">ຈຳນວນຫ້ອງເເຖວ</th>
                        <th width="50px">ລາຍລະອຽດ</th>
                        <th width="5px">ເຫດການ</th>
                    </tr>
                    @foreach($registors as $item)
                    <tr>

                        <td>{{$item->id}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->details}}</td>
                        <td>
                            {{URL::to('delete/comment/'.$item->id)}}
                             <a class="btn btn-danger" href=""
                            onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        @endforeach
                    </tr>
                </table>
                <center>
                    {{$comments->links()}}
                </center>

                </center> --}}


                <div class="container">
                    <div  class="card-deck">
                        <div  class="row">
                            @foreach ($registors as $key => $item)
                                {{-- @if ($item->id==1) --}}
                                    <div style="width: 185px;height:auto;" class="col-md-4">
                                        <div style="padding:1px 5px 1px 5px;border-radius:5px;border: 1px solid  #5499C7 ; width: 150px;height:auto;" class="card mb-4 box-shadow">
                                            <img style="border-radius: 5px;" class="card-img-top" src="http://pushshift.io/wp-content/uploads/2019/06/user-management_3.jpg" height="65px" width="100%" alt="Card image cap">
                                                <div style="font-size: 13px"  class="card-body">
                                                    <p class="card-text">ຊື່: {{$item->user->name}}</p>
                                                    <p class="card-text">ອີເມວ: {{$item->user->email}}</p>
                                                    <p class="card-text">ເບິໂທ: {{$item->phone}}</p>
                                                    <p class="card-text">ຈຳນວນຫ້ອງເເຖວ: {{$item->qty}}</p>
                                                    <p class="card-text">ລາຍລະອຽດ: {{$item->details}} </p>
                                                    <a href="{{URL::to('admin/delete/registor/'.$item->id)}}"><p class="card-text"><i class="fas fa-trash-alt"></i></p></a>
                                                        {{-- <div class="moree">
                                                            <button class="button button2"><a href="{{route('dongdok.index')}}">ລາຍລະອຽດ</a></button>
                                                        </div> --}}

                                                </div>

                                        </div>
                                    </div>
                                {{-- @endif --}}

                            @endforeach
                        </div>
                    </div>
                </div>
    </section>


@endsection

