<?php

use App\Library\Fn;
use Illuminate\Support\Facades\Auth;

class GuideInviteDatatable extends Ui
{
	function __construct() {
        parent::__construct();

        $this->fn = new Fn;
    }

    public $path = '/guides';
    public $primaryKey = 'id';

    public function keys()
    {
    	$key = array();

    	$key[] = array('label'=>'#', 'cls'=>'td-index', 'type'=>'index');
        // $key[] = array('id'=>'created_at', 'label'=>'สร้าง', 'cls'=>'td-date', 'type'=>'date');

    	$key[] = array('id'=>'status', 'label'=>'สถานะ', 'cls'=>'td-status', 'type'=>'status');
    	$key[] = array('id'=>'name', 'label'=>'ชื่อ', 'cls'=>'td-name', 'type'=>'groupName');
    	$key[] = array('id'=>'email', 'label'=>'อีเมลล์', 'cls'=>'td-email');

    	$key[] = array('id'=>'updated_at', 'label'=>'แก้ไขข้อมูลล่าสุด', 'cls'=>'td-date td-light', 'type'=>'livedate');
        $key[] = array('id'=>'action', 'cls'=>'td-actions', 'type'=>'action');
        

    	return $key;
    }


    public function init(array $data,array &$ops=[])
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

        $ops['last_item_title'] = isset($ops['last_item_title'])? $ops['last_item_title']: null;

		foreach ($data as $key => $item) {
			$seq ++;
			// $item = json_decode( json_encode($item), 1);

            // if($ops['last_item_title']!=$item->region_id){
            //     $ops['last_item_title'] = $item->region_id;

            //     $tr .= $this->geTitle($item);
            // }

            $tr .= $this->getItem($seq, $item);
		}

    	return $tr;
    }

    public function geTitle($data)
    {
        return '<tr><td class="td-head" colspan="'.count($this->keys()).'">'.$data->region_name.'</td></tr>';
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

        $name = !empty($data->name)? $data->name: '';
        $description = !empty($data->summary)? $data->summary: '';

        $picture = !empty($data->image)
            ? '<img class="img-h" src="'. asset("storage/{$data->image}"). '" alt="" />'
            : '';


       $desc = '';
        if( $data->status==3 ){

            
            $countdown = $this->fn->q('time')->countdown($data->exp);

            $desc = 'เชิญเมื่อ '. $this->fn->q('time')->live($data->created_at);

            if( $countdown['minutes']>0 ){

                $desc .= ' - จะหมดอายุภายใน';

                if( $countdown['days']>0 ){
                    $desc .= " {$countdown['days']} วัน";
                }

                if( $countdown['hours']>0 ){
                    $desc .= " {$countdown['hours']} ชม.";
                }

                $desc .= " {$countdown['minutes']} นาที";

            }
        }


        if( in_array($data->status, [0,1,2,4]) == 3 ){
            $name = '<a href="'. asset( "/guides/{$data->id}" ) .'"><strong ref="name">'.$name.'</strong></a>';
        }
        else{
            $name = '<strong ref="name">'.$name.'</strong>';
        }

        // dd($categoryName);

    	return '<div class="media">'.
			// '<div class="pic-wrap mr-2" style="width: 150px;"><a href="'.asset($this->path.'/'.$data->{$this->primaryKey}).'/edit" data-plugin="lightbox" class="pic" ref="image_url" data-type="image">'.$picture.'</a></div>'.
            '<div class="media-body">'.                
                $name.
                '<div class="fs-13 text-muted">'.$desc.'</div>'.
			'</div>'.
		'</div>';
    }

    public function status($data)
    {
        $val = '';
        
        if( time() > strtotime($data->exp) && $data->status==3 ){
            $val = '<div class="ui-status secondary" data-ref="status" data-type="status">หมดอายุ</div>';
        }
        else{
            switch ($data->status) {
                case 0:
                    $val = '<div class="ui-status danger" data-ref="status" data-type="status">ปฎิเสธ</div>';
                    break;
    
                case 1:
                    $val = '<div class="ui-status success" data-ref="status" data-type="status">ใช้งาน</div>';
                    break;
    
                case 2:
                    $val = '<div class="ui-status warning" data-ref="status" data-type="status">รอตรวจสอบ</div>';
                    break;
    
                case 3:
                    $val = '<div class="ui-status info" data-ref="status" data-type="status">กำลังเชิญ</div>';
                    break;

                case 4:
                    $val = '<div class="ui-status danger" data-ref="status" data-type="status">รอแก้ไข</div>';
                    break;
            }
        }
    	

    	return $val;
    }


    public function toggleSwitch($data, $name='status')
    {
        $val = isset($data->{$name})? $data->{$name}: '';
        $id = isset($data->{$this->primaryKey})? $data->{$this->primaryKey}:null;



        $checked = $val==1 ? ' checked': '';
        return '<label class="switch">'.
            '<input type="checkbox"'.$checked.' name="'.$name.'" value="'.$val.'" data-plugin="switch" data-options="'.htmlentities(json_encode([
                'url' => asset( "{$this->path}/switch" ),
                'data' => [
                    'id' => $id,
                ]
            ])).'">'.
            '<span class="slider round"></span>'.
        '</label>';
    }

    public function action($data)
    {
        $btn = '';
        $id = isset($data->{$this->primaryKey})? $data->{$this->primaryKey}:null;


        if( time() > strtotime($data->exp) && $data->status==3 ){
            $btn .= '<a href="'.asset( "{$this->path}/reinvite/{$id}" ).'" data-plugin="lightbox" class="btn btn-sm btn-primary ml-1" title=""><i class="fa fa-paper-plane-o" aria-hidden="true"></i> เชิญใหม่</a>';
        }

        if( $data->status==2 ){
            $btn .= '<a href="'.asset( "/guides/{$id}" ).'"  class="btn btn-sm btn-warning ml-1" title=""><i class="fa fa-circle-o"> ตรวจสอบข้อมูล</i></a>';
        }
		return $btn;
    }
}
