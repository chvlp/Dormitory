<?php

namespace App\Http\Controllers\Admin\Dormitory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dormitory;
use App\registor;
use App\School;
use App\RegistorUser;
use App\User;

class DormitoryController extends Controller
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
            $dormitorys = Dormitory::orderBy('id', 'desc')->with('school')->paginate(5);
            return view('admin.dormitory.index',compact('dormitorys','registors','registUsers'));
        }
            else{
                $registors = registor::all();
                $registUsers = RegistorUser::all();
                $dormitorys= Dormitory::where('name','like','%'.$request->search.'%')
                ->orWhere('village','like','%'.$request->search.'%')
                ->orWhere('distric','like','%'.$request->search.'%')
                ->orWhere('province','like','%'.$request->search.'%')
                ->orWhere('phone','like','%'.$request->search.'%')
                ->orWhere('horm','like','%'.$request->search.'%')
                ->orWhere('phase','like','%'.$request->search.'%')
                ->orWhere('price','like','%'.$request->search.'%')
                ->paginate(5);
            return view('admin.dormitory.index',compact('dormitorys','registors','registUsers'));

            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $users = User::all();
        $schools = School::all();
        return view('admin.dormitory.create',compact('schools','users','registors','registUsers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        'name' => 'required | min:4',
        'school_id' => 'required',
        'user_id' => 'required',
        'village' => 'required | min:4',
        'distric' => 'required | min:4',
        'province' => 'required | min:4',
        'phone' => 'required | min:4',
        'horm' => 'required | min:4',
        'phase' => 'required | min:4',
        'locat' => 'required | min:4',
        'price' => 'required | min:4',
        'detail' => 'required | min:4',
        'image' => 'required | min:4',
        ],[
        'name.required' => 'ກະລູນາປ້ອນຊື່ຫ້ອງເເຖວ',
        'school_id.required' => 'ກະລູນາເລືອກຊື່ໂຮງຮຽນ',
        'user_id.required' => 'ກະລູນາເລືອກຫ້ອງເເຖວ',
        'village.required' => 'ກະລູນາປ້ອນບ້ານ',
        'distric.required' => 'ກະລູນາປ້ອນເມືອງ',
        'province.required' => 'ເກະລູນາປ້ອນເເຂວງ',
        'phone.required' => 'ກະລູນາປ້ອນເບີໂທ',
        'horm.required' => 'ກະລູນາປ້ອນຮ່ອມ',
        'phase.required' => 'ກະລູນາປ້ອນໄລຍະຫາງຈາກຫ້ອງເເຖວໄປຫາຫ້ອງເເຖວ',
        'locat.required' => 'ກະລູນາປ້ອນຂໍ້ມຸນທີ່່ຢູ່ຂອງຫ້ອງເເຖວ',
        'price.required' => 'ກະລູນາປ້ອນລາຄ່າ',
        'detail.required' => 'ກະລູນປ້ອນລາຍລະອຽດ',
        'image.required' => 'ກະລູນາເລືອກຮູບພາບ',
        ]);
        $dormitorys = array();
        $dormitorys['name'] = $request->name;
        $dormitorys['school_id'] = $request->school_id;
        $dormitorys['user_id'] = $request->user_id;
        $dormitorys['village'] = $request->village;
        $dormitorys['distric'] = $request->distric;
        $dormitorys['province'] = $request->province;
        $dormitorys['phone'] = $request->phone;
        $dormitorys['horm'] = $request->horm;
        $dormitorys['phase'] = $request->phase;
        $dormitorys['locat'] = $request->locat;
        $dormitorys['price'] = $request->price;
        $dormitorys['detail'] = $request->detail;
        $image = $request->file('image');
        if ($image) {
            $image_name = date('day_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $succuse = $image->move($upload_path, $image_full_name);
            $dormitorys['image'] = $image_url;
            $dormitorys = Dormitory::with('school')->insert($dormitorys);
            return redirect()->route('dormitory.index')
                            ->with('succes', 'ເພີມຂໍ້ມູນຫເ້ອງເເຖວສຳເລັດ');
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $users = User::all();
        $schools = School::all();
        $dormitorys = Dormitory::find($id)->where('id',$id)->first();
        return view('admin.dormitory.edit',compact('schools','dormitorys','users','registors','registUsers'));
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

        $request->validate([

            'name' => 'required | min:4',
            'school_id' => 'required',
            'user_id' => 'required',
            'village' => 'required | min:4',
            'distric' => 'required | min:4',
            'province' => 'required | min:4',
            'phone' => 'required | min:4',
            'horm' => 'required | min:4',
            'phase' => 'required | min:4',
            'locat' => 'required | min:4',
            'price' => 'required | min:4',
            'detail' => 'required | min:4',
            ],[
            'name.required' => 'ກະລູນາປ້ອນຊື່ຫ້ອງເເຖວ',
            'school_id.required' => 'ກະລູນາເລືອກຊື່ໂຮງຮຽນ',
            'user_id.required' => 'ກະລູນາເລືອກຫ້ອງເເຖວ',
            'village.required' => 'ກະລູນາປ້ອນບ້ານ',
            'distric.required' => 'ກະລູນາປ້ອນເມືອງ',
            'province.required' => 'ເກະລູນາປ້ອນເເຂວງ',
            'phone.required' => 'ກະລູນາປ້ອນເບີໂທ',
            'horm.required' => 'ກະລູນາປ້ອນຮ່ອມ',
            'phase.required' => 'ກະລູນາປ້ອນໄລຍະຫາງຈາກຫ້ອງເເຖວໄປຫາຫ້ອງເເຖວ',
            'locat.required' => 'ກະລູນາປ້ອນຂໍ້ມຸນທີ່່ຢູ່ຂອງຫ້ອງເເຖວ',
            'price.required' => 'ກະລູນາປ້ອນລາຄ່າ',
            'detail.required' => 'ກະລູນປ້ອນລາຍລະອຽດ',
            ]);


        $dormitorys = array();
        $dormitorys['school_id'] = $request->school_id;
        $dormitorys['user_id'] = $request->user_id;
        $dormitorys['name'] = $request->name;
        $dormitorys['village'] = $request->village;
        $dormitorys['distric'] = $request->distric;
        $dormitorys['province'] = $request->province;
        $dormitorys['phone'] = $request->phone;
        $dormitorys['horm'] = $request->horm;
        $dormitorys['phase'] = $request->phase;
        $dormitorys['locat'] = $request->locat;
        $dormitorys['price'] = $request->price;
        $dormitorys['detail'] = $request->detail;
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
            $dormitorys['image'] = $image_url;
            $dormitorys = Dormitory::with('school')->where('id',$id)->update($dormitorys);
            return redirect()->route('dormitory.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
        }
        else{
            $oldlogo = $request->file('image');
            $dormitorys = Dormitory::with('school')->where('id',$id)->update($dormitorys);
            return redirect()->route('dormitory.index')
                            ->with('succes','ອັບເດດຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');

        }
    }

    public function show($id)
    {
        $registors = registor::all();
        $registUsers = RegistorUser::all();
        $dormitorys = Dormitory::find($id)->where('id',$id)->first();
        return view('admin/dormitory/show',compact('dormitorys','registors','registUsers'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete($id)
    {

            $dormitorys = Dormitory::find($id)->where('id',$id)->first();
            $image = $dormitorys->image;
            if(!$image){
                $dormitorys = Dormitory::find($id)->where('id',$id)->delete();
            return redirect()->route('dormitory.index')
                                ->with('succes','ລົບຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');
            }
            else{
                unlink($image);
            $dormitorys = Dormitory::find($id)->where('id',$id)->delete();
            return redirect()->route('dormitory.index')
                                ->with('succes','ລົບຂໍ້ມູນຫ້ອງເເຖວສຳເລັດ');

            }


    }

}
