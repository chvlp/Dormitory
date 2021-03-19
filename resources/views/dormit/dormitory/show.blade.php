
@extends('layouts.dormit-layout')
@section('title','ລາຍລະອຽດຫ້ອງເເຖວ')
@section('contain')

    <section class="content-header">
        <center><h1> ລາຍລະອຽດຫ້ອງເເຖວຂອງ {{$dormitorys->name}}</h1></center>
    </section>


    <section class="content container-fluid">

        <div style="width:100%" class="row">
            <div class="col-lg-12 m-t-5">
                <div class="pull-right">
                    <a style="background-color:#5499C7;border:1px solid black; " class="btn btn-success" href="{{route('dormit.dormitory.index')}}"></i> ກັບ</a>
                </div>
            </div>
        </div><br>


        <div style="margin:auto;width:95%;heiht:auto;" class="bodd">
            <div style="padding:10px 5px 10px 5px;width:95%;margin:auto;" class="pic">

                <div class="imagee">
                    <img class="card-img-top" src="{{URL::to($dormitorys->image)}}" height="350" width="100%s" alt="Card image cap">
                </div>
                <hr style="border: 1px solid  #5499C7;"><br>

                    <h1 style="text-align:center;font-size:26px;ont-weight: bold;">ຮູບພາບເພີມເຕີມ</h1>

                <br>
                    <!-- The four columns -->
                <div style="border:1px solid #5499C7;width:100%;margin:auto;" class="row">
                    @if ($dormitorys->id)
                        @foreach ($dormitorys->images as $item)
                            <div class="column">
                                <a target="_blank" href="{{URL::to($item->images)}}">
                                <img src="{{URL::to($item->images)}}" alt="Lights" style="width:100%" onclick="myFunction(this);">
                            </div>
                        </a>
                        @endforeach
                    @endif
                </div>
                <br>
                <div style="padding-top:20px;padding-right:40px;" class="alltext">
                    <h1 style="text-align:center;font-size:26px;ont-weight: bold;">ລາຍລະອຽດຫ້ອງເເຖວ</h1>

                    <h4 style="cursor: context-menu;">
                    <p>ເຈົ້າຂອງຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;" > {{$dormitorys->user->name}}</a></p>
                    <p>ອີເມວເຈົ້າຂອງຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;" > {{$dormitorys->user->email}}</a></p>
                    <p>ຊື່ຫ້ອງເເຖວ: <a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->name}}</a></p>
                    <p>ຂື້ນກັບໂຮງຮຽນ: <a style="font-style: italic;color:#5499C7;text-decoration: none"> {{$dormitorys->school->name}}</a></p>
                    <p>ບ້ານ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->village}}</a></p>
                    <p>ເມືອງ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->distric}}</a></p>
                    <p>ເເຂວງ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->province}}</a></p>
                    <p>ຮ່ອມ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->horm}}</a></p>
                    <p>ໄລຍາຫາງຈາກໂຮງຮຽນ: <a style="text-decoration: none;color:#5499C7;"> {{$dormitorys->phase}}</a></p>
                    <p>ເບີໂທ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->phone}}</a></p>
                    <p>ລາຄ່າຕໍ່ຫ້ອງ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp;&nbsp; {{$dormitorys->price}}</a></p>
                    <p>ລາຍລະອຽດຂອງຫ້ອງເເຖວ:<a style="text-decoration: none;color:#5499C7;"> &nbsp;&nbsp; {{$dormitorys->detail}}</a></p>
                </h4>
                </div>
            </div>
        </div>
        <br><br><br><br>


        <div style="width:95%;padding-top:10px;margin: auto;"  class="alltext">
            <div class="intt">
               <h2 style="margin-left: 20px;" class="card-text">ຄອມເມັ້ນ</h2>
                   <hr>
                      <div style="margin-top:20px;" class="texttt">
                           <form  method="POST" action="/dormit/{{$dormitorys->id}}/comments">
                               {{ csrf_field() }}
                               <div style="width: 90%;margin:auto;" class="booo">
                                   <textarea name="body" style="width: 100%; padding-top:10px;padding-left:20px;" rows="3" placeholder="ປ້ອນຄອມເມັ້ນ ຢູ່ນີ້ ..."></textarea>
                                   <input style="
                                       background-color: #4CAF50;
                                       color: white;
                                       padding: 12px 20px;
                                       border: none;
                                       border-radius: 4px;
                                       cursor: pointer;
                                     " type="submit" value="ເພີມຄອມເມັ້ນ">
                               </div>
                           </form>
                       </div>
                       <br><br>

                       @foreach ($dormitorys->comment as $item)
                       <div  style="width:70%;height:20px;margin:auto;padding-left:5px;text-align:right;border-radius:3px;" class="texttt">
                           <p style="margin-right:10px;"> {{$item->created_at-> diffForHumans() }}</p>
                        </div>
                           <div  style="border:1px solid #dcdedf;font-size:18px;width:70%;margin:auto;padding-left:5px;background-color: rgb(211, 204, 190,0.50);border-radius:3px;" class="texttt">
                              <p style="margin-bottom:-20px;">{{$item->user->name}}</p>
                              <hr>
                             <p style="margin-top: -20px;font-size:14px;"> {{$item->body}} </p>
                           </div>
                           @endforeach
            </div>
       </div>

    </section>


@endsection


