<?php

namespace App\Http\Controllers;

use App\Models\GuideRegister;
use Illuminate\Http\Request;
use App\Models\GuideRegister as MDB;
// use App\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if(isset($request->key)){
        #genkey
        return view('register.index');

        // }else{
        //     dd("WTF");    
        // }




        // 1.เช็คkey ว่ามีอยู่จริงไหม
        // 2.ถ้าไม่มีไปหน้าไหน
        // 3.ถ้ามีก็ไปหน้าฟอร์อม


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        if ($request->file('profile')) {
            $image = $request->file('profile');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname = "/img/" . $new_name;
        } else {
            $dbname = $request->profile;
        }
        if ($request->file('photo_card')) {
            $image = $request->file('photo_card');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname1 = "/img/" . $new_name;
        } else {
            $dbname1 = $request->profile;
        }
        if ($request->file('photo_address')) {
            $image = $request->file('photo_address');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname2 = "/img/" . $new_name;
        } else {
            $dbname2 = $request->profile;
        }
        if ($request->file('photo_guide')) {
            $image = $request->file('photo_guide');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname3 = "/img/" . $new_name;
        } else {
            $dbname3 = $request->profile;
        }
        if ($request->file('photo_tl')) {
            $image = $request->file('photo_tl');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname4 = "/img/" . $new_name;
        } else {
            $dbname4 = $request->profile;
        }



        $regis = new GuideRegister;
        
      
        $regis->profile    = $dbname;
        $regis->photo_card    = $dbname1;
        $regis->photo_address    = $dbname2;
        $regis->photo_guide    = $dbname3;
        $regis->photo_tl    = $dbname4;


        $regis->languages_ot = json_encode($request->languages_ot);


        #การเก็บข้อมูลแบบarray
        // foreach ($request->invoiceprice as $key => $value) {
        //     // dd($value);
        //     $db = new GuideRegister;
        //     $db->invoiceid_detail  = $data->invoiceid;
        //     $db->invoicedetaillist  = $request->invoicedetaillist[$key];
        //     $db->invoiceprice  = $value;
        //     $db->save();
        // }


        if ($regis->fill($request->input())->save()) {
        } else {
        }

        return redirect()->route('register.index')->with('success', 'กรุณารอผลการยืนยันการลงทะเบียนผ่านทางอีเมลภายใน 24 ชั่วโมง');
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, MDB $db)
    {   
        $data = 
        $res = $db->get($id);
        if (empty($res['data'])) {
            return response()->json(["message" => 'Record not found!', 'alert' => 'Error'], 404);
        }

        return view('register.edit')->with([
            'data' => $res['data']
            // 'status' => $db->status(),
            // 'roles' => $db->roles(),

        ]);
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
