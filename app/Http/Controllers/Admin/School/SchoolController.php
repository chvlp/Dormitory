<?php

namespace App\Http\Controllers\Admin\School;
use App\Http\Controllers\Controller;
use App\registor;
use App\RegistorUser;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class SchoolController extends Controller
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
            $schools=School::orderBy('id', 'desc')->paginate(5);
            return view('admin.school.index',compact('schools','registors','registUsers'));
        }
            else{
                $registors = registor::all();
                $registUsers = RegistorUser::all();
                $schools= School::where('name','like','%'.$request->search.'%')
                ->orWhere('village','like','%'.$request->search.'%')
                ->orWhere('distric','like','%'.$request->search.'%')
                ->orWhere('province','like','%'.$request->search.'%')
                ->paginate(5);
                return view('admin.school.index',compact('schools','registors','registUsers'));
            }


    }
    public function create(){
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        return view('admin.school.create',compact('registors','registUsers'));
    }
    public function Store(Request $request){

        $request->validate([
            'name' => 'required | min:4',
            'village' => 'required| min:2 ',
            'distric' => 'required| min:3 ',
            'province' => 'required| min:3',
            'image' => 'required'
        ],[
            'name.required' => 'ກະລຸນາປ້ອນຊື່ໂຮງຮຽນ',
            'name.min' => 'ຊື່ໂຮງຮຽນ ຕ້ອງຍາວກວ່າ 4 ຕົວອັກສອນ',
            'village.required' => 'ກະລຸນາປ້ອນບ້ານ',
            'village.min' => 'ກະລລຸນາປ້ອນບ້ານໃຫ້ຖືກຕ້ອງ',
            'distric.required' => 'ກະລຸນາປ້ອນເມືອງ',
            'distric.min' => 'ກະລລຸນາປ້ອນເມືອງໃຫ້ຖືກຕ້ອງ',
            'province.required' => 'ກະລຸນາປ້ອນເເຂວງ',
            'province.min' => 'ກະລລຸນາປ້ອນເເຂວງໃຫ້ຖືກຕ້ອງ',
            'image.required' => 'ກະລຸນາເລືອກຮູບພາບ',

        ]);
        $schools = array();
        $schools['name'] = $request->name;
        $schools['village'] = $request->village;
        $schools['distric'] = $request->distric;
        $schools['province'] = $request->province;
        $image = $request->file('image');
        if($image) {
            $image_name = date('day_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $succuse = $image->move($upload_path,$image_full_name);
            $schools['image'] = $image_url;
            $schools = School::where ($request)->insert($schools);
            return redirect()->route('school.index')
                            ->with('succes','ເພິມຂໍ້ມູນໂຮງຮຽນສຳເລັດ');
        }
    }

    public function Edit($id){
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $schools =School::find($id)->where('id',$id)->first();
        return view('admin.school.edit',compact('schools','registors','registUsers'));
    }

    public function Update(Request $request,$id){

        $request->validate([
            'name' => 'required | min:4',
            'village' => 'required| min:2 ',
            'distric' => 'required| min:3 ',
            'province' => 'required| min:3',
        ],[
            'name.required' => 'ກະລຸນາປ້ອນຊື່ໂຮງຮຽນ',
            'name.min' => 'ຊື່ໂຮງຮຽນ ຕ້ອງຍາວກວ່າ 4 ຕົວອັກສອນ',
            'village.required' => 'ກະລຸນາປ້ອນບ້ານ',
            'village.min' => 'ກະລລຸນາປ້ອນບ້ານໃຫ້ຖືກຕ້ອງ',
            'distric.required' => 'ກະລຸນາປ້ອນເມືອງ',
            'distric.min' => 'ກະລລຸນາປ້ອນເມືອງໃຫ້ຖືກຕ້ອງ',
            'province.required' => 'ກະລຸນາປ້ອນເເຂວງ',
            'province.min' => 'ກະລລຸນາປ້ອນເເຂວງໃຫ້ຖືກຕ້ອງ',

        ]);
        $schools = array();
        $schools['name'] = $request->name;
        $schools['village'] = $request->village;
        $schools['distric'] = $request->distric;
        $schools['province'] = $request->province;
        $image = $request->file('image');
        $oldlogo = $request->old_logo;


        if($image) {
            unlink($oldlogo);
            $image_name = date('day_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $succuse = $image->move($upload_path,$image_full_name);
            $schools['image'] = $image_url;
            $schools = School::find($id)->where('id',$id)->update($schools);
            return redirect()->route('school.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນໂຮງຮຽນສຳເລັດ');
        }
        else{
            $oldlogo = $request->file('image');
            $schools = School::find($id)->where('id',$id)->update($schools);
            return redirect()->route('school.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນໂຮງຮຽນສຳເລັດ');

        }
    }

    public function delete($id){
        $schools = School::find($id)->where('id',$id)->first();
        $image = $schools->image;
        unlink($image);
        $schools = School::find($id)->where('id',$id)->delete();
        return redirect()->route('school.index')
                            ->with('succes','ລົບຂໍ້ມູນໂຮງຮຽນສຳເລັດ');
    }
}



