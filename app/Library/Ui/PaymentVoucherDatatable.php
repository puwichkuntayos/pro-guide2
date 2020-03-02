<?php

use App\Library\Fn;
use Illuminate\Support\Facades\Auth;

class PaymentVoucherDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
      $key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');
			$key[] = array('id'=>'name', 'label'=>'ชื่อ', 'cls'=>'td-name','type'=>'groupName');
			$key[] = array('id'=>'', 'label'=>'ประเภทใบสำคัญจ่าย','type'=>'category');
			$key[] = array('id'=>'', 'label'=>'เลขที่ใบสำคัญจ่าย','type'=>'nos');
      $key[] = array('id'=>'total','label'=>'จำนวนเงินรวม(บาท)','type'=>'total' );
      $key[] = array('id'=>'', 'label'=>'หมายเหตุ','type'=>'notes');
			$key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date td-light', 'type'=>'date');
    	$key[] = array('id'=>'action', 'cls'=>'td-action', 'type'=>'action');

    	return $key;
    }


    public function init(array $data,array $ops=[])
    {

    	$tr = '';
    	$keys = $this->keys();

    	$seq = ($ops['page'] * $ops['limit']) - $ops['limit'];


    	// title
    	if( $ops['page']==1 ){
	    	$ths = '';
	    	foreach ($keys as $key => $value) {

	    		$label = isset($value['label']) ?$value['label']: '';

	    		$ico = isset($value['icon']) ? '<i class="mr-1 icon-'.$value['icon'].'"></i>':'';
	    		$cls = isset($value['cls']) ? ' class="'.$value['cls'].'"':'';
                $ths .= '<th'.$cls.'>'.$ico.'<span>'.$label.'</span></th>';

				//  data-col="'.$key.'"
			}
			$tr .= '<tr role="table__fixed">'.$ths.'</tr>';
		}



		foreach ($data as $key => $item) {
			$seq ++;
			// $item = json_decode( json_encode($item), 1);
            $tr .= $this->getItem($seq, $item);

		}

    	return $tr;
    }


    public function getItem($seq, $data)
    {
        $tds = '';
        foreach ($this->keys() as $label) {

            $type = isset($label['type'])? $label['type']: 'text';
            $val = '';
						// dd($pv);
            if( $type=='index' ) {
                $val = $seq;
            }else if( method_exists($this, $type) ){
                $val = $this->{$type}( $data, isset($label['id'])? $label['id']: '' );
            }
            else if( !empty( $label['id'] ) ){
                $val = !empty($data->{$label['id']})? $data->{$label['id']}: '';
            }

            $cls = isset($label['cls']) ? ' class="'.$label['cls'].'"':'';
            $tds .= '<td'.$cls.'>'.$val.'</td>';
        }
				// dd($tds);
        return '<tr>'.$tds.'</tr>';
    }


    public function livedate($data, $key)
    {
        $val = '';
        if( !empty($data->{$key}) ){
            $val = $this->fn->q('time')->live($data->{$key});
        }

        return '<span ref="'.$key.'">'.$val.'</span>';
    }

		public function groupName($data)
    {



    	return '<div class="media">'.

            '<div class="media-body">'.

                '<a href="'.asset('/paymentvouchers/'.$data->id).'/edit" data-plugin="lightbox">'.
                    '<strong ref="name">'.$data->users['name'].'</strong>'.
                '</a>'.

			'</div>'.
		'</div>';
    }

		public function status($data)
		{
				$val = '';

						switch ($data->status) {
								case 1:
										$val = '<div class="ui-status warning text-white" data-ref="status" data-type="status">รอการตรวจสอบ</div>';
										break;

								case 2:
										$val = '<div class="ui-status secondary" data-ref="status" data-type="status">ยกเลิก</div>';
										break;
								case 3:
										$val = '<div class="ui-status info" data-ref="status" data-type="status">อนุมัติเรียบร้อย</div>';
										break;

						}


			return $val;
		}

		public function category($data)
		{
				$val = '';

						switch ($data->category_id) {
							case 1:
									$val = '<span>ค่าเบ็ดเตล็ด</span>';
									break;

								case 2:
										$val = '<span">ค่าจ้าง (หัก ณ ที่จ่าย 3%)</span>';
										break;
						}



			return $val;
		}
		public function nos($data)
		{
			$no='-';
				if(!empty($data->no)){
			$no = $data->no;
		}
			return '<span>'.$no.'</span>' ;
		}
		public function notes($data)
		{
				$remark = '-';
				// dd($data->remark);
				if(!empty($data->note)){
					$remark = $data->note;
				}else if($data->remark){
					$remark = $data->remark;
				}
				// dd($ramark);
			return '<span>'.$remark.'</span>' ;
		}



		public function total($data)
		{
			return '<strong>'. number_format($data->total,2).'</strong>';
		}

    public function action($data)
    {
        $val ='';

				if($data->status !== 4 && $data->status !== 3 && $data->status !== 2){
					$val .= '<a href="'.asset('/paymentvouchers/'.$data->id).'/edit" data-plugin="lightbox" class="btn btn-sm btn-primary" title="ตรวจสอบข้อมูล"><i class="fa fa-pencil"></i></a>';
					$val .= '<a href="'.route('cancelpayments',$data->id).'" data-plugin="lightbox" class="btn btn-secondary btn-sm m-1" title="ยกเลิกใบสำคัญจ่าย"><i class="fa fa-remove"></i></a>';

				}elseif ($data->status !== 2 ) {
					$val .= '<a href="'.route('pdf.totalpayments',$data->id).'" target="_blank" class="btn btn-secondary btn-sm " ><i class="fa fa-file"></i></a>';

				}

        // $val .= '<a href="'.asset('/paymentvouchers/'.$data->id).'/edit" class="btn btn-sm btn-primary ml-1" title="ตรวจสอบข้อมูล"><i class="fa fa-pencil"></i></a>';
		return $val;
    }


}
