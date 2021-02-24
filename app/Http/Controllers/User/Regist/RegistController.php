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
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $request->validate([
            'village' => 'required | min:3',
            'distric' => 'required | min:3',
            'province' => 'required | min:3',
            'details' => 'required | min:4',
        ],[
            'village.required' => 'ກະລຸນາປ້ອນບ້ານ',
            'village.min' => 'ກະລຸນາປ້ອນບ້ານຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'distric.required' => 'ກະລຸນາປ້ອນເມືອງ',
            'distric.min' => 'ກະລູນາປ້ອນເມືອງຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'province.required' => 'ກະລຸນາປ້ອນເເຂວງ',
            'province.min' => 'ກະລຸນາປ້ອນເເຂວງຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'details.required' => 'ກະລຸນາປ້ອນລາຍລະອຽດ',
            'details.min' => 'ກະລຸນາປ້ອນຢ່າງນ້ອຍ 4 ຕົວອັກສອນ',
        ]);
        // return $dormitory->id;
        RegistorUser::create([
            'user_id' =>auth()->user()->id,
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
