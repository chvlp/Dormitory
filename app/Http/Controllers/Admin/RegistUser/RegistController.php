<?php

namespace App\Http\Controllers\Admin\RegistUser;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registors = registor::all();
        $users = User::all();
        $registUsers = RegistorUser::all();
        return view('admin.registUser.index',compact('registors','users','registUsers'));

    }



    public function Delete($id)
    {

            $registUsers = RegistorUser::find($id)->where('id',$id)->first();
            $registUsers = RegistorUser::find($id)->where('id',$id)->delete();
            return redirect()->route('admin.registUser.index')
                                ->with('succes','ລົບຂໍ້ມູນການຮອງຂໍເປັນເຈົາຂອງຫ້ອງເເຖວສຳເລັດ');
    }
}
