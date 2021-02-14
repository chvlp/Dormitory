<?php

namespace App\Http\Controllers\User\Dongdok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use App\School;
use App\User;
use App\Dormitory;

class DongdokController extends Controller
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
        $schools = School::all();
        $dormitorys = Dormitory::all();
        // return $dormitorys;
        return view('user.dongdok.index',compact('schools','dormitorys'));
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
        return view('user.dongdok.show',compact('dormitory','imagess','userss','schoolss','dormitoryss'));
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
