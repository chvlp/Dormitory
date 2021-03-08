<?php

namespace App\Http\Controllers\User\Nonti;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\School;
use Illuminate\Http\Request;

class NontiController extends Controller
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
        return view('user.nonti.index',compact('regists','schools','dormitorys','registUsers'));

    }
}
