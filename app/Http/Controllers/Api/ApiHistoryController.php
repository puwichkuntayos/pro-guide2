<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

use App\Models\GuideRegister AS MDB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiHistoryController extends Controller
{
    public function index(MDB $db, Request $request)
    {
        $res = $db->find($request);

        $res['code'] = 200;
        $res['info'] = 'Results successfully';
        $res['message'] = 'The request has succeeded.';


        $res['items'] = $this->ui->item('HistoryDatatable')->init($res['data'], $res['options'] );

        return response()->json($res, 200);
    }


    // insert data
    public function store(UserRequest $request)
    {
        
    }


    // update data
    public function update(MDB $db, UserRequest $request, $id)
    {

        // try {
        //     if ($request->fails()) {
        //         return $this->errorResponse($request->errors()->all());
        //     }
            
        // } catch (Exception $exception) {
        //     return $this->errorResponse('Unexpected error occurred while trying to process your request!');
        // }


        $data = MDB::findOrFail($id);

        if( empty( $data ) ){
            return response()->json(["message" => 'Record not found!'], 404);
        }
        
        $arr = [];
        if( $data->fill( $request->input() )->update() ){

            // เพิ่มรูปใหม่
            // if($request->has('file1')){
            //     $data->avatar = $request->file('file1')->store('avatar', 'public' );
            //     $data->update();
            // }

            $arr['code'] = 200;
            $arr['info'] = 'The request has succeeded.';
            $arr['message'] = 'บันทึกข้อมูลเรียบร้อย';

            // callback update
            $arr['update'] = ['[user-id='.$id.']', $db->convert($data)];
        }
        else{
            $arr['code'] = 422;
            $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
        }

        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
    }
    

    public function reset_password(MDB $db, Request $request, $id)
    {
        $data = MDB::findOrFail($id);

        if( is_null( $data ) ){
            return response()->json(["message" => 'Record not found!'], 404);
        }

        $arr = []; //|required_with:password_confirmation
        $validator = Validator::make($request->all(), [
            'password' => 'min:6',
            'password_confirmation' => 'same:password'
        ], [
            'password.min' => 'รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร',
            // 'password.required_with' => 'ใส่',

            'password_confirmation.same' => 'การยืนยันรหัสผ่านและรหัสผ่านจะต้องตรงกัน'
        ]);

        if( $validator->fails() && !$request->has('password_auto') ){
            $arr['code'] = 422;
            $arr['errors'] = $validator->errors();
        }
        else{

            if($request->has('password_auto')  ){
                $faker = \Faker\Factory::create();
                $password = $faker->password(6);
            }
            else{
                $password = $request->password;
            }
            
            $data->remember_token = str_random(10);
            $data->password = Hash::make($password);

            if( $data->update() ){

                $arr['code'] = 200;
                $arr['info'] = 'The request has succeeded.';
                $arr['message'] = 'บันทึกข้อมูลเรียบร้อย';
                $arr['data'] = ['password'=>$password];

                // callback update
                // $arr['call'] = '';

                $arr['alert'] = [
                    'icon' => 'success',
                    'title' => 'รีเซ็ตรหัสผ่านสำเร็จ',
                    'html' => $this->fn->q('form')->resetPasswordSuccess($data),
                ];
            }
            else{
                $arr['code'] = 422;
                $arr['message'] = 'บันทึกข้อมูลล้มเหล่ว, กรุณาลองใหม่';
            }

        }

        return response()
            ->json($arr, $arr['code'])
            ->header('Content-Type', 'application/json');
    }


    // delete data
    public function destroy($id)
    {
        $data = MDB::findOrFail($id);

        if( is_null( $data ) ){
            return response()->json(["message" => 'Record not found!'], 404);
        }

        
        // ลบรูป
        // if( !empty($data->avatar) ){
        //     Storage::disk('public')->delete($data->avatar);
        // }

        // ลบข้อมูล
        $data->delete();

        return response()
            ->json([
                'code' => 200,
                'info' => 'The request has succeeded.',
                "message" => 'ลบข้อมูลเรียบร้อย',
    
                'call' => 'refreshDatatable',
            ], 200)
            ->header('Content-Type', 'application/json');
    }
}
