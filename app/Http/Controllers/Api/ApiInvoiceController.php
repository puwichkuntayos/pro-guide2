<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InvoiceModel AS MDB;

class ApiInvoiceController extends Controller
{
     public function index(MDB $db, Request $request,$tab)
        {
            $res = $db->find($request);
            $res['code'] = 200;
            $res['info'] = 'Results successfully';
            $res['message'] = 'The request has succeeded.';

            $res['items'] = $this->ui->item('InvoiceDatatable')->init($res['data'], $res['options'] );
            return response()->json($res, 200);
        }
}
