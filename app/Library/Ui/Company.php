<?php

class Company extends Ui
{
	function __construct() {
        parent::__construct();
    }

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
    	// $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');
    	$key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');
    	$key[] = array('id'=>'name', 'label'=>'หัวข้อ', 'cls'=>'td-name');
    	$key[] = array('id'=>'updated_at', 'label'=>'แก้ไขล่าสุด', 'cls'=>'td-date td-light', 'type'=>'date');
    	$key[] = array('id'=>'action', 'cls'=>'td-action', 'type'=>'action');

    	return $key;
    }

    public function init( $data, $ops=array() )
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
			$item = json_decode( json_encode($item), 1);

			$tds = '';
			foreach ($keys as $label) {

				$type = isset($label['type'])? $label['type']: 'text';
				$val = '';
				if( $type=='text' ){

					$val = !empty($item[$label['id']])? $item[$label['id']]: '';

					if( $label['id']=='name' ){

						$val = $this->_groupname( $item );
					}

				} else if($type=='index'){
					$val = $seq;

				} else if($type=='date'){
					 if( !empty($item[$label['id']]) ){
			            $val = date('Y/m/d H:s', strtotime($item[$label['id']]));
			        }

			        $val = '<span ref="updated_str">'.$val.'</span>';

				} else if($type=='move'){
					$val = '<div class="handle"></div>';

				} else if($type=='status'){
					$val = $this->_status( $item );
				} else if($type=='action'){
					$val = $this->_action( $item );;

				}


	    		$cls = isset($label['cls']) ? ' class="'.$label['cls'].'"':'';
				$tds .= '<td'.$cls.'>'.$val.'</td>';
			}

			$tr .= '<tr wholesale-id="'.$item['id'].'">'.$tds.'</tr>';
		}

    	return $tr;
    }


    public function _groupname($data)
    {

        $picture = !empty($data['logo'])
            ? '<img src="'. asset("storage/{$data['logo']}").'" alt="" />'
            : '';

    	return '<div class="media">
			<div class="pic-wrap mr-2" style="width: 72px;"><div class="pic" style="padding-top: 100%;" ref="logo_url" data-type="image">'.$picture.'</div></div>
			<div class="media-body">'.
				'<a href="'.asset('/business/'.$data['id']).'/edit" data-plugin="lightbox"><strong ref="name">'.$data['name'].'</strong></a>'.
				'<div class="y-ellipsis clamp-2"><span ref="description">'. $this->fn->q('text')->more($data['description']).'</span></div>'.
			'</div>
		</div>';
    }

    public function _status($data)
    {
    	$val = '';

    	if( !empty($data['status_arr']) ){
    		$val = '<div class="ui-status" style="background-color:'.$data['status_arr']['color'].';color:#fff" data-ref="status_arr" data-type="status">'.$data['status_arr']['name'].'</div>';

    	}
    	else{
	    	switch ($data['status']) {
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


    public function _action($data)
    {
    	$val = '<a href="'.asset('/business/'.$data['id']).'/edit" data-plugin="lightbox" class="btn btn-sm btn-primary" title="แก้ไข"><i class="fa fa-pencil"></i></a>';
		$val .= '<a href="'.asset('/business/'.$data['id'].'/delete').'" data-plugin="lightbox" class="btn btn-sm btn-danger ml-2" title="ลบ"><i class="fa fa-remove"></i></a>';

		return $val;
    }
}
