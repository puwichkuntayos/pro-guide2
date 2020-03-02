<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuideRegisterRequest;
use App\Models\BanknumberModel;
use App\Models\GuideInvite;
use App\Models\GuideRegistration;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;
use Storage;

class GuideRegisterController extends Controller
{
    public function show($id)
    {
        $data = GuideInvite::findOrFail( $id );

        // dd($data);


        #เช็คstatusว่าเข้าไม่เข้า
        if( $data->status==1 ){
            return abort(404);
        }

        if( $data->status==2 ){
            return redirect('/guides/register/success/'.$data->id);
        }




        // ลิ้งหมดอายุแล้ว
        if( $data->status==3 ){
            if( time() >= strtotime($data->exp) ){
                return 'ลิงก์ของท่านหมดอายุแล้ว';
            }

            return view('pages.guide.register.index', compact('data'));
        }
    }

    public function store(GuideRegisterRequest $request)
    {
      // dd($request);  

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



        $data = new GuideRegistration();

        // $data->passport_no = strtoupper($request->passport_no);
        // dd($data->passport_no);
        $data->profile    = $dbname;
        $data->photo_card    = $dbname1;
        $data->photo_address    = $dbname2;
        $data->photo_guide    = $dbname3;
        $data->photo_tl    = $dbname4;

        $data->languages_ot = json_encode($request->languages_ot);
        $data->languages_v1 = json_encode($request->languages_v1);
        $data->languages_v2 = json_encode($request->languages_v2);


        if( $data->fill( $request->input() )->save() ){

            $data->passport_no = strtoupper($request->passport_no);
            $data->update();

            $invite = GuideInvite::find( $request->invite_id );
            $invite->status = 2;
            $invite->update();

            return redirect()->back()->with(['success'=>true, 'redirect' => 'guides/register/success/'.$data->id]);
        }
        else{

            return redirect()->back()->with(['message'=>'เกิดข้อผิดพลาด, กรุณาลองใหม่']);
        }
    }


    public function success($id)
    {
        $data = GuideInvite::findOrFail( $id );

        return view('pages.guide.register.success', compact('data'));
    }

    public function show_detai($id,Request $request)
    {
        $data = GuideInvite::findOrFail( $id );

        // dd($data->register);
     return view('pages.guide.register.edit',compact('data'));
    }

    public function update(GuideRegisterRequest $request,$id)
    {
        // dd($request);
        // dd($id);
        $picdata = GuideRegistration::find($id);
        // dd($picdata->profile);
        $profiepic = $picdata->profile;
        $photo_cardpic = $picdata->photo_card;
        $photo_addresspic = $picdata->photo_address;
        $photo_guidepic = $picdata->photo_guide;
        $photo_tlpic = $picdata->photo_tl;

        // if()
        if ($request->file('profile')) {
            if(!empty($profiepic)){
                Storage::disk('public')->delete($picdata->profile);
            }
            $image = $request->file('profile');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname = "/img/" . $new_name;
        } else {
            $dbname = $profiepic;
        }
        if ($request->file('photo_card')) {
            if(!empty($photo_cardpic)){
                Storage::disk('public')->delete($picdata->photo_card);
            }
            $image = $request->file('photo_card');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname1 = "/img/" . $new_name;
        } else {
            $dbname1 = $photo_cardpic;
        }

        if ($request->file('photo_address')) {
            if(!empty($photo_addresspic)){
                Storage::disk('public')->delete($picdata->photo_address);
            }
            $image = $request->file('photo_address');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname2 = "/img/" . $new_name;
        } else {
            $dbname2 = $photo_addresspic;
        }

        if ($request->file('photo_guide')) {
            if(!empty($photo_addresspic)){
                Storage::disk('public')->delete($picdata->photo_guidepic);
            }
            $image = $request->file('photo_guide');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname3 = "/img/" . $new_name;
        }else {
            $dbname3 = $photo_guidepic;
        }

        if ($request->file('photo_tl')) {
             if(!empty($photo_addresspic)){
                Storage::disk('public')->delete($picdata->photo_tlpic);
            }
            $image = $request->file('photo_tl');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $new_name);
            $dbname4 = "/img/" . $new_name;
        } else {
            $dbname4 = $photo_tlpic;
        }


        $data = GuideRegistration::find($id);

        $data->profile    = $dbname;
        $data->photo_card    = $dbname1;
        $data->photo_address    = $dbname2;
        $data->photo_guide    = $dbname3;
        $data->photo_tl    = $dbname4;



        $data->languages_ot = json_encode($request->languages_ot);
        $data->languages_v1 = json_encode($request->languages_v1);
        $data->languages_v2 = json_encode($request->languages_v2);


        if( $data->fill( $request->input())->update() ){
            $data->passport_no = strtoupper($request->passport_no);
            $data->update();

            // $invite = GuideInvite::find( $request->invite_id );
            // $invite->status = 2;
            // $invite->update();

            $datastatus = GuideInvite::where('id',$data->invite_id)->first();
            $datastatus->status = 2;
            $datastatus->update();

            return redirect()->back()->with(['success'=>true, 'redirect' => '/guides/register/success/'.$data->id]);
        }
        else{

            return redirect()->back()->with(['message'=>'เกิดข้อผิดพลาด, กรุณาลองใหม่']);
        }
    }


     public function edit($id){
        // dd($id);
         $data = GuideInvite::where('id',$id)->first();
        // dd($data->id);
            // if(!empty($data->id)){
                $data2 = GuideRegistration::where('invite_id',$data->id)->first();
                
            // }
                // dd($data2);  
                $lng = json_decode($data2->languages_ot, 1);
                $lng1 = json_decode($data2->languages_v1, 1);
                $lng2 = json_decode($data2->languages_v2, 1);
        // dd($data);
        return view('pages.guide.detail_guide', compact('data2','data','lng','lng1','lng2'));
    }

    // public function bankstore(Request $request)
    // {

    //     $data = new BanknumberModel();





    //     if( $data->fill( $request->input() )->save() ){


    //         return redirect()->back()->with(['success'=>true, 'redirect' => '/guides/register/success/'.$data->id]);
    //     }
    //     else{

    //         return redirect()->back()->with(['message'=>'เกิดข้อผิดพลาด, กรุณาลองใหม่']);
    //     }
    // }
}
