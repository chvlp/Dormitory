<?php

namespace App\Http\Controllers\Admin\Report\Some;

use App\Http\Controllers\Controller;
use App\registor;
use App\Dormitory;
use App\RegistorUser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){

        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $dormitorys = Dormitory::all();
        return view('admin.report.some.index',compact('registors','registUsers','dormitorys'));

        // if (empty($request->all())) {
        //     $registors = registor::all();
        //     $registUsers = RegistorUser::all();
        //     $dormitorys = Dormitory::orderBy('id', 'desc')->with('school')->paginate(6);
        // return view('admin.report.some.index',compact('registors','registUsers','dormitorys'));
        // }
        //     else{
        //         $registors = registor::all();
        //         $registUsers = RegistorUser::all();
        //         $dormitorys= Dormitory::where('name','like','%'.$request->search.'%')
        //         ->orWhere('village','like','%'.$request->search.'%')
        //         ->orWhere('distric','like','%'.$request->search.'%')
        //         ->orWhere('province','like','%'.$request->search.'%')
        //         ->orWhere('phone','like','%'.$request->search.'%')
        //         ->orWhere('horm','like','%'.$request->search.'%')
        //         ->orWhere('phase','like','%'.$request->search.'%')
        //         ->orWhere('price','like','%'.$request->search.'%')
        //         ->paginate(6);
        // return view('admin.report.some.index',compact('registors','registUsers','dormitorys'));

        //     }
    }
}
