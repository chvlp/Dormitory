<?php

namespace App\Http\Controllers\Admin\Regist;

use App\Http\Controllers\Controller;
use App\registor;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index()
    {
        $registors = registor::all();
        // return $regists;
        return view('admin.regist.index',compact('registors'));

    }

    public function Delete($id)
    {

            $registors = registor::find($id)->where('id',$id)->first();
            $registors = registor::find($id)->where('id',$id)->delete();
            return redirect()->route('admin.regist.index')
                                ->with('succes','ລົບຂໍ້ມູນການຮອງຂໍສຳເລັດ');
    }
}
