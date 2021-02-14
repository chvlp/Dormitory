
@extends('layouts.dormit-layout')
@section('title','ຈັດການຂໍ້ມູນໂຮງຮຽນ')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນຮູບພາບຂອງຫ້ອງເເຖວ</h1></center>
    </section>


    <section class="content container-fluid">

        <div style="width:100%" class="row">
        <div class="col-lg-12 m-t-5">
            <div class="pull-right">
                <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('create.images')}}"><i style="color: wheat;" class="fas fa-folder-plus"></i> ເພິມຮູບພາບຂອງຫ້ອງເເຖວ</a>
            </div>
        </div>
        </div>

        <div style="margin-top: -45px;" class="col-md-4">
            <form action="/images/search" method="get" class="sidebar-form">
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
            <table style="width:96%;border-radius:5px;" id="customers">
                <tr>


                    <th>ຊື່ຫ້ອວເເຖວ</th>
                    <th>ຮູບພາບ</th>
                    <th>ເຫດການ</th>
                </tr>
                            @foreach($images as $item)
                            @if($item->dormitory->user_id==auth()->user()->id)
                            <tr>
                                <td>{{$item->dormitory->name}}</td>
                                <td><img src="{{URL::to($item->images)}}" height="40px" width="80px"></td>
                                <td>
                                    <a class="btn btn-primary" href="{{URL::to('edit/edit/images/'.$item->id)}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger" href="{{URL::to('delete/images/'.$item->id)}}"
                                    onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                @endif
                            @endforeach
                        </tr>
                    </table>
                    <center>
                        {{$images->links()}}
                    </center>
                </center>
    </section>


@endsection


