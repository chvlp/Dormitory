
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນຫ້ອງເເຖວ')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນຫ້ອງເເຖວ</h1></center>
    </section>


    <section class="content container-fluid">

        <div style="width:100%" class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('dormitory.create')}}"><i class="fas fa-university"></i> ເພິມຂໍ້ມູນຫ້ອງເເຖວໃຫມ່</a>
            </div>
        </div>
        </div>
        <div style="margin-top: -45px;" class="col-md-4">
            <form action="/dormitory/search" method="get" class="sidebar-form">
                <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="ຄົນຫາ...">
                <span class="input-group-btn">
                        <button style="background-color: #5499C7;" type="submit" class="btn btn-primary"><i style="color: wheat;" class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
    </div>

    @if ($message = Session::get('succes'))
        <center>
            <br><br><br>
            <div style="width:96%; text-align:left"  class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        </center>
    @endif
        <center>
                <table style="width:96%" id="customers">
                    <tr>

                            <th width="30px">ຊື່ຫ້ອງເເຖວ</th>
                            <th width="30px">ເຈົ້າຂອງຫ້ອງເເຖວ</th>
                            <th width="30px">ຊື່ໂຮງຮຽນ</th>
                            <th width="20px">ເບີໂທ</th>
                            <th width="20px">ລາຄ່າ</th>
                            <th width="5px">ເຫດການ</th>
                        </tr>
                        @foreach ($dormitorys as $dormit)
                        <tr>
                            <td>{{$dormit->name}}</td>
                            <td>{{$dormit->user->name}}</td>
                            <td>{{$dormit->school->name}}</td>
                            <td>{{$dormit->phone}}</td>
                            <td>{{$dormit->price}}</td>
                            {{-- <td>{{substr ($sh->detail,0,3) }} {{strlen($sh->detail) > 3 ? "..." :""}} </td> --}}
                            {{-- <td><img src="{{URL::to($sh->image)}}" height="40px" width="80px"></td> --}}
                            <td>
                                <a  class="btn btn-primary" href="{{URL::to('show/show/dormitory/'.$dormit->id)}}">
                                    <i class="fas fa-eye"></i></a>
                                <a style="margin-left: 5px;" class="btn btn-primary" href="{{URL::to('edit/edit/dormitory/'.$dormit->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('delete/dormitory/'.$dormit->id)}}"
                                onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach


                    </table>
                    <center>
                        {{$dormitorys->links()}}
                    </center
                </center>
    </section>


@endsection


