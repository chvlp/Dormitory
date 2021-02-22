<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Dormitory;
use App\registor;
use App\RegistorUser;

class CommentController extends Controller
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
    public function index(Request $request)
    {

        if (empty($request->all())) {
            $registors = registor::all();
            $registUsers = RegistorUser::all();
            $comments = Comment::orderBy('id', 'desc')->paginate(5);
            return view('admin.comment.index',compact('comments','registors','registUsers'));
        }
            else{
                $registors = registor::all();
                $registUsers = RegistorUser::all();
                $comments = Comment::where('body','like','%'.$request->search.'%')
                ->orWhere('dormitory_id','like','%'.$request->search.'%')
                ->orWhere('user_id','like','%'.$request->search.'%')
                ->paginate(5);
                return view('admin.comment.index',compact('comments','registors','registUsers'));
            }
    }

    public function delete($id)
    {
            $comments = Comment::find($id)->where('id',$id)->delete();
            return redirect()->route('comment.index')
                                ->with('succes','ລົບຂໍ້ມູນຄອມເມັ້ນສຳເລັດ');


    }
}
