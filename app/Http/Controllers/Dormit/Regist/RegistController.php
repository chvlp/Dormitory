<?php

namespace App\Http\Controllers\Dormit\Regist;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\registor;
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
        // return $regists;
        return view('dormit.regist.index',compact('regists','schools','dormitorys'));

    }

    public function store(Request $request,Dormitory $dormitory,User $user)
    {

        // return $dormitory->id;
        registor::create([
           'user_id' =>auth()->user()->id,
           'qty' =>request('qty'),
           'details' =>request('details')
        ]);
        // $request->save();
        // return back();
        return redirect()->route('Dormit.regist.index')
        ->with('succes', 'ການສະໝັກເພິມຈຳນວນຫ້ອງເເຖວສຳເລັດ ກະລະນາລໍຖ້າການຕິດຕໍ່ກັບ ຂໍຂອບໃຈ');
    }
}
