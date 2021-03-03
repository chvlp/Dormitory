
@extends('layouts.admin-layout')
@section('title','ຈັດການຂໍ້ມູນຜູ້ໃຊ້')
@section('contain')

    <section class="content-header">
        <center><h1> ຈັດການຂໍ້ມູນຜູ້ໃຊ້</h1></center><br><br>
    </section>


    <section class="content container-fluid">

        <div style="margin-top: -45px;" class="col-md-4">
            <form action="/user/search" method="get" class="sidebar-form">
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
                <h4>{{$message}}</h4>
            </div>
        </center>
    @endif
        <center>
                <table style="width:96%" id="customers">
                    <tr>

                            <th width="30px">ຊື່ຜູ້ໃຊ້</th>
                            <th width="30px">ເບິໂທ</th>
                            <th width="20px">ອີເມວ</th>
                            <th width="20px">ຕຳເເໜ່ງ</th>
                            <th width="5px">ເຫດການ</th>
                    </tr>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.user.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                                    {{-- <a class="btn btn-danger" href="{{route('admin.user.destroy',$item->id) }} "
                                         onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                </table>
                    <center>
                        {{$users->links()}}
                    </center
                </center>
    </section>


@endsection



