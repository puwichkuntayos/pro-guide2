<?php

use App\Library\Fn;
use Illuminate\Support\Facades\Auth;

class HistoryDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
        $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');
        
        // $key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');
        
    	$key[] = array('id'=>'first_name', 'label'=>'ชื่อ', 'cls'=>'td-name');
        $key[] = array('id'=>'last_name', 'label'=>'นามสกุล');
        $key[] = array('id'=>'email', 'label'=>'อีเมล');
    	// $key[] = array('id'=>'company_name', 'label'=>'บริษัท');
    	// $key[] = array('id'=>'position_name', 'label'=>'ตำแหน่ง');
        $key[] = array('id'=>'updated_at', 'label'=>'แก้ไขล่าสุด', 'cls'=>'td-date td-light', 'type'=>'date');
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

   
  

    public function action($data)
    {
		
        $val ='';
        
        $val .= '<a href="'.asset('/register/'.$data->id).'/edit" class="btn btn-sm btn-primary ml-1" title="แก้ไข"><i class="fa fa-pencil"></i></a>';

        
		return $val;
    }
}