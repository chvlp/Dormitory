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
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $request ->validate([
            'qty' => 'required | max:1',
            'details' => 'required | min:4 '
        ],[
            'qty.required' => 'ກະລຸນາປ້ອນຈຳນວນຫ້ອງເເຖວທີ່ຕ້ອງການໂຄສະນາ',
            'qty.max' => 'ກະລຸນາປ້ອນຈຳນວນຕົວເລກບໍ່ເກິນ 1 ຕົວເລກ',
            'details.required' => 'ກະລຸນາປ້ອນລາຍລະອຽດ',
            'details.min' => 'ກະລຸນາປ້ອນລາຍລະອຽດ 4 ຕົວອັັກສອນຂື້ນໄປ'
        ]);

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
