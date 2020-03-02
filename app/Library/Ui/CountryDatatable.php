<?php

use App\Library\Fn;

class CountryDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public $path = 'countries';

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
        // $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');
        
    	$key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');
    	$key[] = array('id'=>'name', 'label'=>'ชื่อ', 'cls'=>'td-name', 'type'=>'groupName');
    	
    	$key[] = array('id'=>'updated_at', 'label'=>'แก้ไขข้อมูลล่าสุด', 'cls'=>'td-date td-light', 'type'=>'livedate');
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

    public function groupName($data)
    {

        $picture = !empty($data->image)
            ? '<img src="'. asset("storage/{$data->image}").'" alt="" />'
            : '';

    	return '<div class="media">'.
			'<div class="pic-wrap mr-2" style="width: 150px;"><div class="pic" ref="image_url" data-type="image">'.$picture.'</div></div>'.
            '<div class="media-body">'.
            
                '<a href="'.asset($this->path.'/'.$data->id).'/edit" data-plugin="lightbox">'.
                    '<strong ref="name">'.$data->name.'</strong>'.
                '</a>'.
                '<span class="ml-2 text-muted" ref="name_th">'.$data->name_th.'</span>'.
                
				'<div class="y-ellipsis clamp-2 fs-13 text-muted"><span ref="description">'. $data->description .'</span></div>'.
			'</div>'.
		'</div>';
    }

    public function status($data)
    {
    	$val = '';

    	if( is_array($data->status) ){
    		$val = '<div class="ui-status" style="background-color:'.$data->status->color.';color:#fff" data-ref="status_arr" data-type="status">'.$data->status->name.'</div>';

    	}
    	else{

	    	switch ($data->status) {
                case 0:
	    			$val = '<div class="ui-status" data-ref="status" data-type="status">แบบร่าง</div>';
                    break;

	    		case 1:
	    			$val = '<div class="ui-status primary" data-ref="status" data-type="status">ใช้งาน</div>';
	    			break;

	    		case 2:
	    			$val = '<div class="ui-status danger" data-ref="status" data-type="status">ระงับ</div>';
	    			break;
	    	}
    	}

    	return $val;
    }


    public function action($data)
    {
        $btn = '';

        $btn .= '<a href="'.asset( $this->path. '/'.$data->id).'/edit" data-plugin="lightbox" class="btn btn-sm btn-primary ml-1" title="แก้ไข"><i class="fa fa-pencil"></i></a>';

		return $btn;
    }
}
