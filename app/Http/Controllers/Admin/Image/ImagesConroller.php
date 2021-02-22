<?php

namespace App\Http\Controllers\Admin\Image;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\registor;
use App\Image;
use App\RegistorUser;
use Illuminate\Http\Request;

class ImagesConroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (empty($request->all())) {
            $registors = registor::all();
            $registUsers = RegistorUser::all();
            $images = Image::orderBy('id', 'desc')->paginate(5);
            return view('admin.image.index',compact('images','registors','registUsers'));
        }
            else{
                $registors = registor::all();
                $registUsers = RegistorUser::all();
                $images= Image::where('dormitory_id','like','%'.$request->search.'%')
                ->paginate(5);
                return view('admin.image.index',compact('images','registors','registUsers'));

            }



        // return $images;

    }

    public function create()
    {
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $dormitorys = Dormitory::all();
        return view('admin.image.create',compact('dormitorys','registors','registUsers'));
    }


    public function store(Request $request)
    {
        // return $request;
        $images = array();
        $images['dormitory_id'] = $request->dormitory_id;
        $image = $request->file('images');
        if ($image) {
            $image_name = date('day_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $succuse = $image->move($upload_path, $image_full_name);
            $images['images'] = $image_url;
            $images = image::with('dormitory')->insert($images);
            return redirect()->route('image.index')
                            ->with('succes', 'ເພີມຂໍ້ມູນຫເ້ອງເເຖວສຳເລັດ');
        }

    }

    public function edit($id)
    {
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $dormitorys = Dormitory::all();
        $images = Image::with('dormitory')->find($id);
        return view('admin.image.edit',compact('dormitorys','images','registors','registUsers'));
    }

    public function update(Request $request, $id)
    {
        $images = array();
        $images['dormitory_id'] = $request->dormitory_id;
        $image = $request->file('images');
        $oldlogo = $request->old_logo;

        if($image) {
            unlink($oldlogo);
            $image_name = date('day_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $succuse = $image->move($upload_path,$image_full_name);
            $images['images'] = $image_url;
            $images = Image::with('dormitory')->where('id',$id)->update($images);
            return redirect()->route('image.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
        }
        else{
            $oldlogo = $request->file('images');
            $images = Image::with('dormitory')->where('id',$id)->update($images);
            return redirect()->route('image.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
        }
    }

    public function Delete($id)
    {

            $images = Image::find($id)->where('id',$id)->first();
            $image = $images->images;
            if(!$image){
                $images = Image::find($id)->where('id',$id)->delete();
            return redirect()->route('image.index')
                                ->with('succes','ລົບຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
            }
            else{
                unlink($image);
                $images = Image::find($id)->where('id',$id)->delete();
                return redirect()->route('image.index')
                                    ->with('succes','ລົບຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
            }




    }
}
