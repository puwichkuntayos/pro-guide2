<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\CompanyModel;
use Illuminate\Http\Request;
use App\Models\GuideRegister as MDB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HistoryController extends Controller
{    
    public function index(MDB $db)
    {        
             return view('layouts.datatable')->with([
            'title' => 'ไกด์',
            'datatable' => [
                'title' => 'ไกด์',

                'options' => [
                    // 'page' => 1,
                    'limit' => 24
                ],
                "url" => 'api/v1/history',

                // 'filters' => $filters,

                // 'actions_right' => '<a class="btn btn-primary ml-2" data-plugin="lightbox" href="/users/create"></a>'
            ],
        ]);
    }

    public function create(MDB $db)
    {
        return view('/register/create');
    }

    // Show form edit
    public function edit(MDB $db, $id)
    {
    // return view('register.eidt');
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

   
}
