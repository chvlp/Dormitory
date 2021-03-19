
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນຄອມເມັ້ນ')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນຄອມເມັ້ນ</h1></center>
    </section>


    <section class="content container-fluid">

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


                        <th width="20px">ຊື່ຫ້ອງເເຖວ</th>
                        <th width="10px">ຊື່ຜູ້ໃຊ້</th>
                        <th width="50px">ຄອມເມັ້ນ</th>
                        <th width="5px">ເຫດການ</th>
                    </tr>
                    @foreach($comments as $item)
                    <tr>

                        <td>{{$item->dormitory->name}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->body}}</td>
                        <td>
                            <a class="btn btn-danger" href="{{URL::to('delete/comment/'.$item->id)}}"
                            onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        @endforeach
                    </tr>
                </table>
                <center>
                    {{$comments->links()}}
                </center>

                </center>
    </section>


@endsection


