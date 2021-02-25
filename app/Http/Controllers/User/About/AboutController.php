<?php

namespace App\Http\Controllers\User\About;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $schools = School::all();
        $dormitorys = Dormitory::all();
        return view('user.about.index',compact('schools','dormitorys'));
    }
}
