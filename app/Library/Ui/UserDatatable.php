<?php

use App\Library\Fn;
use Illuminate\Support\Facades\Auth;

class UserDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
        // $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');
        if(Auth::user()->role_id < 3 ){
          $key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');  
        }
    	
    	$key[] = array('id'=>'name', 'label'=>'ชื่อ', 'cls'=>'td-name');
        
    	$key[] = array('id'=>'role_id', 'label'=>'บทบาท' ,'type'=>'roleid');
    	// $key[] = array('id'=>'company_name', 'label'=>'บริษัท');
    	// $key[] = array('id'=>'position_name', 'label'=>'ตำแหน่ง');
    	$key[] = array('id'=>'last_login_at', 'label'=>'เข้าใช้งานล่าสุด', 'cls'=>'td-date td-light', 'type'=>'livedate');
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
			'<div class="pic-wrap mr-2 pic-x" style="width: 150px;"><div class="pic" ref="image_url" data-type="image">'.$picture.'</div></div>'.
            '<div class="media-body">'.
            
                '<a href="'.asset($this->path.'/'.$data->id).'/edit" data-plugin="lightbox">'.
                    '<strong ref="name">'.$data->name.'</strong>'.
                '</a>'.

				'<div class="y-ellipsis clamp-2 fs-13 text-muted"><span ref="description">'. $data->description .'</span></div>'.
			'</div>'.
        '</div>';
    }

    public function status($data)
    {
    	$val = '';

	    	switch ($data->status) {
                case 0:
	    			$val = '<div class="custom-control custom-switch" data-plugin="status" data-options="'.htmlentities(json_encode(['id'=> $data->id])).'">
                    <input type="checkbox" class="custom-control-input" id="'.$data->id.'" value="'.$data->status.'">
                    <label class="custom-control-label" for="'.$data->id.'"></label>
                    </div>';
                    break;

	    		case 1:
	    			$val = '<div class="custom-control custom-switch" data-plugin="status" data-options="'.htmlentities(json_encode(['id'=> $data->id])).'">
                    <input type="checkbox" class="custom-control-input" id="'.$data->id.'"  value="'.$data->status.'" checked>
                    <label class="custom-control-label" for="'.$data->id.'"></label>
                    </div>';
	    			break;
	    	}


    	return $val;
    }


    public function roleid($data)
    {
        $val = '';

            switch ($data->role_id) {
                case 1:
                    $val = '<label>ผู้ดูแลระบบ</label>';
                    break;

                case 2:
                    $val = '<label>บัญชี</label>';
                    break;

                     case 3:
                    $val = '<label>หัวหน้าทัวร์</label>';
                    break;

                    case 4:
                    $val = '<label>ไกด์</label>';
                    break;            }


        return $val;
    }


    public function action($data)
    {
        $btn = '';

        if( $data->is_owner ){

            $btn = '<span><i class="fa fa-lock"></i><span class="ml-1">owner</span></span>';
        }
        else{

            $btn .= '<a href="'.asset('/users/'.$data->id).'/reset_password" data-plugin="lightbox" class="btn btn-sm btn-primary" title="เปลี่ยนรหัสผ่าน"><i class="fa fa-lock"></i></a>';

            if(Auth::user()->role_id < 3){
                 $btn .= '<a href="'.asset('/users/'.$data->id).'/edit" data-plugin="lightbox" class="btn btn-sm btn-primary ml-1" title="แก้ไข"><i class="fa fa-pencil"></i></a>';
            }
           
            
            if( Auth::user()->is_owner ){
                $btn .= '<a href="'.asset('/users/'.$data->id.'/delete').'" data-plugin="lightbox" class="btn btn-sm btn-danger ml-1" title="ลบ"><i class="fa fa-remove"></i></a>';
            }
        }
    
		return $btn;
    }
}
