<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        return view('admin.report.index',compact('registors','registUsers'));
    }
}
