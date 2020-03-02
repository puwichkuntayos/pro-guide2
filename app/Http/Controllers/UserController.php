<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\CompanyModel;
use Illuminate\Http\Request;
use App\Models\User as MDB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\GuideInvite;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetPasswordmail;

class UserController extends Controller
{    
    public function index(MDB $db)
    {        
        $filters = [];
        $filters[] = [
            'position' => 'topLeft',
            'label' => 'สถานะ',
            'type' => 'selectbox',
            'items' => array_merge([['id'=>'', 'name'=>'ทั้งหมด']], MDB::status()),
            'active' => 3,

            'name' => 'status',
            'id' => 'status',
        ];

        $filters[] = [
            'position' => 'topLeft',
            'type' => 'searchbox',

            'name' => 'q',
        ];

        if(Auth::user()->role_id < 3 ){
           $filters[] = [
            'position' => 'topRight',
            'type' => 'button',

            'style' => 'primary',

            'attr' => [
                'data-plugin' => "lightbox",
                'data-url' => '/users/create',
            ],

            'label' => '<svg class="svg-icon o__tiny o__by-text" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><path d="M2 5v2h3v3h2V7h3V5H7V2H5v3H2z"></path></svg> <span>เพิ่มผู้ใช้งาน</span>'
        ];
  
        }

       
        return view('layouts.datatable')->with([
            'title' => 'ผู้ใช้งาน',
            'datatable' => [
                'title' => 'ผู้ใช้งาน',

                'options' => [
                    // 'page' => 1,
                    'limit' => 24
                ],
                "url" => 'api/v1/users',

                'filters' => $filters,

                // 'actions_right' => '<a class="btn btn-primary ml-2" data-plugin="lightbox" href="/users/create"></a>'
            ],
        ]);
    }

    public function create(MDB $db)
    {
        return view('forms.user.form')->with([
            'status' => $db->status(),
            'roles' => $db->roles(),

        ]);
    }

    // Show form edit
    public function edit(MDB $db, $id)
    {
        $res = $db->get( $id );
        if( empty( $res['data'] ) ){
            return response()->json(["message" => 'Record not found!', 'alert'=>'Error'], 404);
        }

        return view('forms.user.form')->with([
            'data' => $res['data'],
            'status' => $db->status(),
            'roles' => $db->roles(),

        ]);
    }

    public function reset_password(MDB $db, $id)
    {
        $res = $db->get( $id );
        if( empty( $res['data'] ) ){
            return response()->json(["message" => 'Record not found!', 'alert'=>'Error'], 404);
        }

        return view('forms.user.reset_password')->with([
            'data' => $res['data'],
        ]);
    }

    public function new_password()
    {
       

        return view('auth.new_password');
    }

    public function change_password(Request $request)
    {
        $this->validate($request, [
            // 'password' => 'required|confirmed|min:4',
            'password' => 'min:4',
            'password_confirmation' => 'required_with:password|same:password'
        ]);

        $data = User::findOrFail( $request->user()->id );
        $data->new_password = 0;
        $data->password = Hash::make($request->password);
        $data->update();
        
        return redirect('/');
    }

    public function delete(MDB $db, $id)
    {
        $res = $db->get( $id );
        if( empty( $res['data'] ) ){
            return response()->json(["message" => 'Record not found!', 'alert'=>'Error'], 404);
        }

        return view('forms.user.delete')->with([
            'data' => $res['data'],
        ]);
    }

    public function showforget(Request $request){
        return view('auth.Forgetpassword');
    }

    public function Forgetpassword(MDB $db,Request $request){

        // dd($request);
        $data = $db->where('email',$request->email)->first();

        if(!empty($data)){
            $password = $this->fn->q('user')->generateStrongPassword();
            $truedata = $db->findOrFail($data->id);
            $truedata->password = Hash::make($password);
            $truedata->update();
            // send mail
            Mail::to( $request->email )->send( new ForgetPasswordmail([
                // 'name' => $request->name,
                'id' => $data->id,
                'username' => $data->email,
                'password' => $password,
            ]) );
   
           return redirect(asset('users/successforget/'.$data->id))->with(['success'=>true]);
        }
        else{
            return redirect()->back()->with(['message'=>'เกิดข้อผิดพลาด, กรุณาลองใหม่']);
        }
    }

        public function successforget($id){
            $data = GuideInvite::findOrFail( $id );
            return view('pages.guide.register.successforget', compact('data'));
        }

        public function errorforget(){
            // $data = GuideInvite::findOrFail($id);
            return view('pages.guide.register.errorforget');
        }


    
}
