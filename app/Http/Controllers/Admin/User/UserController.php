<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\Role;
use App\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Gate;
// use Gate;
use Illuminate\Http\Request;
use Illuminate\Mail\Message as MailMessage;

class UserController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (empty($request->all())) {

            $users = User::orderBy('id', 'desc')->paginate(5);
            $registors = registor::all();
            $registUsers = RegistorUser::all();
            return view('admin.user.index',compact('users','registors','registUsers'));
        }
            else{
                $registors = registor::all();
                $users = User::where('name','like','%'.$request->search.'%')
                ->orWhere('phone','like','%'.$request->search.'%')
                ->orWhere('email','like','%'.$request->search.'%')
                ->paginate(5);
                return view('admin.user.index',compact('users','registors'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        return view('admin.user.edit',compact('roles','registors','registUsers'))->with([
            'user' => $user,
            'roles' => $roles
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->roles()->sync($request->roles);
        $user->save();
        return redirect()->route('admin.user.index')
                        ->with('succes','ອັບເດດຂໍ້ມູນຜູ້ໃຊ້ສະເລັດ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

    }
}
