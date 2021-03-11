<?php

namespace App\Http\Controllers\Admin\Regist;

use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\Role;
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
        $registors = registor::orderBy('id', 'desc')->paginate(5);
        $registUsers = RegistorUser::all();
        $users = User::all();
        return view('admin.regist.index',compact('registors','users','registUsers'));

    }

    public function Delete($id)
    {

            $registors = registor::find($id)->where('id',$id)->first();
            $registors = registor::find($id)->where('id',$id)->delete();
            return redirect()->route('admin.regist.index')
                                ->with('succes','ລົບຂໍ້ມູນການຮອງຂໍເພິມຈຳນວນຫ້ອງເເຖວສຳເລັດ');
    }
}
