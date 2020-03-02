<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Access\AuthorizationException;
use App\Models\InvoiceModel;
use PDF;
use Auth;
use Dompdf\Dompdf;

class InvoiceController extends Controller
{
	public function index(Request $request)
	{

		$tab = basename(Route::getFacadeRoot()->current()->uri);
// dd($tab);
		$tabs = [
			'invoice' => [
				'title' => 'ทั้งหมด',

			],
			'confirm' => [
				'title' => 'อนุมัติ',
				'options'=>[
					'status'=> 1
				]
			],

			'verify' => [
				'title' => 'รอตรวจสอบ',
				'options'=>[
					'status'=> 2
				]
			],

			'cancel' => [
				'title' => 'ไม่อนุมัติ',
				'options'=>[
					'status'=> 0
				]
			],
		];


		if( in_array($tab, array_keys($tabs)) ){
			// dd($tab);
			$ops = $tabs[$tab];
			$ops['url'] = '/invoice/find/'.$tab;
			
			// $ops['current'] = '/invoice'.($tab != 'invoice'?"/{tab}":'');

			return view('pages.invoice.index')->with(InvoiceController::_init( $request, $ops ) );
		}
		else{

			throw new AuthorizationException('You do not have permission to view this page');
		}  
	}


	public static function _init ($request, $ops=[] )
	{
				return [
			'title' => '',

			'navleft' => InvoiceController::_leftMenu($request),

			'datatable' => [
				'title' => isset($ops['title'])? $ops['title']: 'ตะกร้า',

				'options' => [
					'limit' => 24
				],
				"url" => $ops['url'],

				'filters' => InvoiceController::_filters( $ops ),
			],
		];
	}

	public static function _leftMenu($request)
  {
      return [
          [
              "name" => "สถานะ",
              "items" => [
                  [
                      "id"=> "/invoice",
                      "name" => "ทั้งหมด",
                      'count' => InvoiceModel::
                              count()
                  ],
                  [
                      "id"=> "/invoice/confirm",
                      "name" => "อนุมัติแล้ว",
                      'count' => InvoiceModel::
                          where([
                              ['status', 1],
                              // ['company_id', $request->user()->company->id]
                          ])
                          ->count()
                  ],
                  [
                      "id"=> "/invoice/verify",
                      "name" => "รอตรวจสอบ",
                      'count' => InvoiceModel::
                          where([
                              ['status', 2],
                              // ['company_id', $request->user()->company->id]
                          ])
                          ->count()
                  ],

                  [
                    "id"=> "/invoice/cancel",
                    "name" => "ไม่อนุมัติ",
                    'count' => InvoiceModel::
                        where([
                            ['status', 0],
                            // ['company_id', $request->user()->company->id]
                        ])
                        ->count()
                ],
              ]
          ],
        
      ];
  }

	public static function _filters( $ops=[] )
	{
		$ops = array_merge( [
			'status' => 1,
			// 'state' => '',
		], $ops );


		$filters = [];


        // selectbox
		$filters[] = [ 'position' => 'topLeft', 'type' => 'selectbox', 'items'=> array_merge([['id'=>'', 'name'=>'ทั้งหมด']], InvoiceModel::status()), 'name' => 'status'];

        // : searchbox ค้นหา

		$filters[] = [ 'position' => 'topLeft', 'type' => 'searchbox', 'name' => 'q',];


		$filters[] = [
			'position' => 'topRight',
			'type' => 'link',

			'style' => 'primary',

			'url' => '/invoice/create',

			'attr' => [
				'data-url' => '/invoice/create',
			],

			'label' => '<i class="fa fa-plus"></i><span class="ml-1"> ใบสำคัญจ่าย</span>'
		];


		return $filters;
	}

	public function find(Request $request,$tab='')
  {
  	// dd($tab);
      $ops = [
          'sort' => isset($request->sort)? $request->sort: 'updated_at',
          'dir' => isset($request->dir)? $request->dir: 'desc',

          'limit' => isset($request->limit)? $request->limit: 1,
          'page' => isset($request->page)? $request->page: 1,

          'ts' =>  isset($request->ts)? $request->ts: time(),
      ];

      $where = [];

      if( $request->has('status') ){
          if( $request->status!='' ){
              $where[] = ['status', '=', $request->status];
          }
      }

       if (!empty($request->q)) {
            $where[] = ['name', 'LIKE', "{$request->q}%"];
        }

      // $where[] = ['company_id', '=', $request->user()->company->id ];
      	if($tab =='confirm'){
			$where[] = ['status',1];
		}

		if($tab =='verify'){
			$where[] = ['status',2];
		}

		if($tab =='cancel'){
			$where[] = ['status',0];
		}

      $results = InvoiceModel::where($where)

          ->orderby( $ops['sort'], $ops['dir'] )

          ->skip( ($ops['page']*$ops['limit'])-$ops['limit'])
          ->take( $ops['limit'] )

          ->paginate( $ops['limit'] );

      $res = [
          'options' => $ops,
          'total' => $results->total(),
          'data' => $results->items(),
      ];


      $res['code'] = 200;
      $res['info'] = 'Results successfully';
      $res['message'] = 'The request has succeeded.';

      // dd($res);
      $res['items'] = $this->ui->item('InvoiceDatatable')->init( $res['data'], $res['options'] );

      return response()->json($res, 200);
  }

  public function create(){
  		return view('pages.invoice.create');

  }

  public function pdfpercent($id){
    // return view('pages.invoice.create');
    $acc = Auth::user();
    $ldate = date('d/m/Y');
     $pdf = PDF::loadView('pages.invoice.percentpdfa3',['acc'=>$acc,'ldate'=>$ldate])->setPaper('a3','horizontal');
        // dd($pdf);
      $filename = $id;
      return $pdf->stream($filename . '.pdf');
  }

  public function show(){

  }
}
