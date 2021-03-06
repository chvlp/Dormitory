<?php

namespace App\Http\Controllers\Admin\RegistUser;

use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\Role;
use App\RoleUser;
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
    public function index(User $user)
    {
        $registors = registor::all();
        $roles = Role::all();
        $users = User::all();
        $roleUsers = RoleUser::all();
        $registUsers = RegistorUser::orderBy('id', 'desc')->paginate(5);
        return view('admin.registUser.index',compact('registors','users','registUsers','roles','roleUsers'))->with([
            'user' => $user,
            'roles' => $roles
        ]);

    }



    public function Delete($id)
    {

            $registUsers = RegistorUser::find($id)->where('id',$id)->first();
            $registUsers = RegistorUser::find($id)->where('id',$id)->delete();
            return redirect()->route('admin.registUser.index')
                                ->with('succes','ລົບຂໍ້ມູນການຮອງຂໍເປັນເຈົາຂອງຫ້ອງເເຖວສຳເລັດ');
    }
}
