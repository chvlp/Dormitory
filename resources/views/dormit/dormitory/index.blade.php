
@extends('layouts.dormit-layout')
@section('title','ຈັດການຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນຫ້ອງເເຖວ</h1></center>
    </section>


    <section class="content container-fluid">

        {{-- <div style="width:100%" class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('dormit.dormitory.create')}}"><i class="fas fa-university"></i> ເພິມຂໍ້ມູນຫ້ອງເເຖວໃຫມ່</a>
            </div>
        </div>
        </div> --}}
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
                        <th width="30px">ຊື່ໂຮງຮຽນທີ່ຂື້ນກັບ</th>
                        <th width="20px">ເບີໂທ</th>
                        <th width="20px">ລາຄ່າຕໍ່ຫ້ອງ</th>
                        <th width="5px">ເຫດການ</th>
                        </tr>
                        @foreach ($dormitorys as $sh)
                            @if($sh->user_id==auth()->user()->id)
                        <tr>
                            <td>{{$sh->name}}</td>
                            <td>{{$sh->user->name}}</td>
                            <td>{{$sh->school->name}}</td>
                            <td>{{$sh->phone}}</td>
                            <td>{{$sh->price}}</td>
                            <td>
                                <a  class="btn btn-primary" href="{{URL::to('show/dormit/dormitory/'.$sh->id)}}">
                                    <i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{URL::to('edit/edit/dormit/'.$sh->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                {{-- <a class="btn btn-danger" href="{{URL::to('delete/dormit/'.$sh->id)}}"
                                onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a> --}}
                            </td>
                        </tr>
                        @endif
                        @endforeach


                    </table>
                    <center>
                        {{$dormitorys->links()}}
                    </center
                </center>
    </section>


@endsection


