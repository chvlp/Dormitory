<?php

namespace App\Http\Controllers\Dormit;

use App\Dormitory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dormitorys = Dormitory::all();
        $countdotmit = count($dormitorys);
        return view('dormit.index',compact('dormitorys','countdotmit'));
    }
}
