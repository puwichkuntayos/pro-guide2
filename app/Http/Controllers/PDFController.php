<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
  public function pdf(){
    // return view('pages.invoice.create');
    $data = 'top';
    $ldate = date('d/m/Y');
     $pdf = PDF::loadView('email.sample',['data'=>$data])->setPaper('a4','horizontal');
        // dd($pdf);

      return $pdf->stream('top.pdf');
  }
}
