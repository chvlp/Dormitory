<?php

namespace App\Http\Controllers\User\Regist;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\School;
use App\User;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index()
    {
        $schools = School::with('dormitory')->get();
        $dormitorys = Dormitory::all();
        $regists = registor::all();
        $registUsers = RegistorUser::all();
        // return $regists;
        return view('user.regist.index',compact('regists','schools','dormitorys','registUsers'));

    }

    public function store(Request $request,Dormitory $dormitory,User $user)
    {

        // return $dormitory->id;
        RegistorUser::create([
            'user_id' =>auth()->user()->id,
            'qty' =>request('qty'),
            'village' =>request('village'),
            'distric' =>request('distric'),
            'province' =>request('province'),
            'details' =>request('details')
        ]);
        // $request->save();
        // return back();
        return redirect()->route('user.regist.index')
        ->with('succes', 'ການສະໝັກສະມາຊິກເປັນເຈົ້າຂອງຫ້ອງເເຖວສຳເລັດກະລຸນາລໍຖ້າການຕິດຕໍ່ກັບ ຂໍຂອບໃຈ');
    }


}
