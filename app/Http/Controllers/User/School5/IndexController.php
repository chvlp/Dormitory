<?php

namespace App\Http\Controllers\User\School5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use App\School;
use App\User;
use App\Dormitory;


class IndexController extends Controller
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
        $schools = School::with('dormitory')->get();
        $dormitorys = Dormitory::orderBy('phase', 'ASC')->get();
        // return $dormitorys;
        return view('user.school5.index',compact('schools','dormitorys'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagess = Image::with('dormitory')->get();
        $userss = User::all();
        $schoolss = School::all();
        $dormitoryss = Dormitory::with('school')->get();
        $dormitory = Dormitory::find($id);
        return view('user.school5.show',compact('dormitory','imagess','userss','schoolss','dormitoryss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
