@extends('layouts.dormitory-layout')
@section('title','ລາຍລະອຽດຫ້ອງເເຖວໃນ ສະຖາບັນສຸດສະກະ')
@section('contain')


<div style="width: 100%;margin:auto;" class="col-md-8">
    <div style="width: 90%;margin:auto;margin-top:50px; " class="col-md-5">
        <div  class="conta">
                @if ($dormitory->id)
                    <div class="imagex">
                        <div style="border: 1px solid  #5499C7 ; margin:auto;" class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{URL::to($dormitory->image)}}" height="450" width="1090" alt="Card image cap">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align:center;border-radius:3%;" class="card-text">{{$dormitory->name}}</p>
                                    {{--<p style="font-size: 13px" class="card-text">{{$item->village}}, {{$item->distric}}, {{$item->province}}</p>
                                    <div class="locat">
                                    a    <a href="" target="_blank">
                                            <i class='fas fa-map-marker-alt' ></i>
                                        </a>
                                    </div> --}}
                                </div>
                        </div>
                    </div>
                @endif
        </div>
    </div>
    <br><br>

        {{-- <p>this is: school {{$dormitory->school}} </p><br><br>

        <p>this is: comment {{$dormitory->comment}} </p> <br> <br> --}}
        {{-- <p>this is: image {{$dormitory->images}}</p> <br><br> --}}




    <hr style="border: 1px solid  #5499C7;"><br>

    <h1 style="text-align:center;font-size:26px;ont-weight: bold;">ຮູບພາບເພີມເຕີມ</h1>

<br>
     <!-- The four columns -->
  <div style="border:1px solid #5499C7;width:82%;margin:auto;" class="row">
    @if ($dormitory->id)
        @foreach ($dormitory->images as $item)
            <div class="column">
                <a target="_blank" href="{{URL::to($item->images)}}">
                <img src="{{URL::to($item->images)}}" alt="Lights" style="width:100%" onclick="myFunction(this);">
            </div>
        </a>
        @endforeach
    @endif
  </div>
<br>


    <div class="out">
        <div  style="border: 1px solid  #5499C7 ;" class="intt">
            <h2  class="card-text">ລາຍລະອຽດ</h2>
                <hr style="border: 1px solid  #5499C7;">
                    <div style="margin-top:20px;" class="texttt">
                        @foreach ($schoolss as $item)
                            @if ($item->id==3)
                                <p  class="card-text"><i style="color: #5499C7;" class="fas fa-university"> : </i>  <a style="font-style: italic;"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; {{$item->name}} </a></p>
                            @endif
                        @endforeach
                        @if ($dormitory->id)
                                    <p  class="card-text"><a style="color:#5499C7 ;">ຊື່ຫ້ອງເເຖວ: </a> {{$dormitory->name}}</p>
                                    <p  class="card-text"><a style="color:#5499C7 ;">ໄລຍະຫາງ: </a> {{$dormitory->phase}}</p>
                                    <p  class="card-text"><a style="color:#5499C7">ທີ່ຢູ່: </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; {{$dormitory->horm}},  {{$dormitory->village}},  {{$dormitory->distric}},  {{$dormitory->province}}</p>
                                    <p  class="card-text"><a style="color: #5499C7">ລາຄ່າ : </a> &nbsp;&nbsp; &nbsp;&nbsp;  {{$dormitory->price}}</p>
                                    <p  class="card-text"><a style="color:#5499C7"><i class="fas fa-phone"></i> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; </a> {{$dormitory->phone}}</p>
                                    <p  class="card-text"><a style="color: #5499C7">ລາຍລະອຽດ : </a><br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  {{$dormitory->detail}}</p>

                    </div>
                    <div class="locat">
                        <p class="card-text">
                            ເສັ້ນທາງໄປຫາ{{$dormitory->name}}:
                            <a href="{{$dormitory->locat}}" target="_blank">
                                <i class="fas fa-map-marked-alt"></i>
                            </a>
                        </p>
                    </div>
                @endif
        </div>
    </div>
<br><br>

<div  class="out">
     <div  style="border: 1px solid  #5499C7 ;" class="intt">
        <h2 class="card-text">ຄອມເມັ້ນ</h2>
            <hr style="border: 1px solid  #5499C7;">
               <div style="margin-top:20px;" class="texttt">
                    <form  action="/school1/{{$dormitory->id}}/comments" method="POST">
                        {{ csrf_field() }}
                        <div style="width: 90%;margin:auto;" class="booo">
                            <textarea name="body" id="" style="width: 100%; padding-top:10px;padding-left:20px; font-family: 'Phetsarath OT';" rows="3" placeholder="ປ້ອນຄອມເມັ້ນ ຢູ່ນີ້ ..."></textarea>
                            <input style="
                             font-family: 'Phetsarath OT';
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

                <div style="margin-top:50px;width:88%;margin:auto;" class="texttt">
                 {{-- <h4>{{$dormitory->name}}  </h4>                       --}}
                </div>
                @foreach ($dormitory->comment as $item)
                <div  style="margin-top:20px;width:70%;margin:auto;padding-left:5px;text-align:right;border-radius:3px;" class="texttt">
                    <p style="margin-right: 20px;font-size:12px;"> {{$item->created_at-> diffForHumans() }}</p>
                 </div>
                    <div  style="font-size:18px;margin-top:20px;width:70%;margin:auto;padding-left:5px;background-color: rgb(211, 204, 190,0.50);padding:10px 10px 10px 10px ;border-radius:3px;" class="texttt">
                       <p style="margin-left: -50px">{{$item->user->name}}</p><hr>
                    </div>
                    <div style="margin-top:20px;width:70%;margin:auto;background-color: rgb(211, 204, 190,0.50);padding-left:10px;border-radius:3px;" class="texttt">
                        {{$item->body}}
                    </div><br>
                    @endforeach
</div>

</div>
</div>
<br><br>

  <script>
  function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
  }
  </script>

</div>

    @endsection
