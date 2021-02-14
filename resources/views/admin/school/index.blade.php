
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນໂຮງຮຽນ</h1></center>
    </section>


    <section class="content container-fluid">

        <div style="width:100%" class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('school.create')}}"><i class="fas fa-university"></i> ເພິມຂໍ້ມູນໂຮງຮຽນໃຫມ່</a>
            </div>
        </div>
        </div>
        <div style="margin-top: -45px;" class="col-md-4">
            <form action="/school/search" method="get" class="sidebar-form">
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

                            <th width="30px">ຊື່ໂຮງຮຽນ</th>
                            <th width="20px">ບ້ານ</th>
                            <th width="20px">ເມືອງ</th>
                            <th width="20px">ເເຂວງ</th>
                            <th width="20px">ຮູບພາບ</th>
                            <th width="5px">ເຫດການ</th>
                        </tr>
                        @foreach ($schools as $sh)
                        <tr>
                            <td>{{$sh->name}}</td>
                            <td>{{$sh->village}}</td>
                            <td>{{$sh->distric}}</td>
                            <td>{{$sh->province}}</td>
                            <td><img src="{{URL::to($sh->image)}}" height="40px" width="80px"></td>
                            <td>
                                <a class="btn btn-primary" href="{{URL::to('edit/edit/school/'.$sh->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('delete/school/'.$sh->id)}}"
                                onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    <center>
                        {{$schools->links()}}
                    </center
                </center>
    </section>


@endsection


