<?php

namespace App\Library\Form;

class Create_Form
{
	private $_url = null;
	private $_method = "get"; // type: get or post

	public function url($url="#"){
		$this->attr('action', $url);
		return $this;
	}

	function method($type="get"){
		$this->attr('method', $type);
		return $this;
	}

	private $_currentField = "__form";
	private $_field = null;
	private $_attr = null;
	private $_style = "vertical";
	private $_elem = "form";

	private function reset(){
		$this->_currentField = "__form";
		$this->_field = null;
		$this->_attr = null;
		$this->_style = "vertical";
	}

	public function _config(){
		$this->_currentField = "__form";
		$this->_field[$this->_currentField]['elem'] = "form";
		return $this;
	}

	public function style($style="vertical"){
		$this->_style = $style;
		return $this;
	}

	public function elem($elem){
		$this->_elem = $elem;
		return $this;
	}

	public function field($name){
		$this->_currentField = $name;
		$this->attr('id', $name);
		return $this;
	}

	public function hr($text=null){
		$this->_field[ '$hr_'.count($this->_field) ]['text'] = $text;
		return $this;
	}

	public function name($name){
		$this->attr('name', $name);
		return $this;
	}

	public function label($text){
		$this->_field[$this->_currentField]['label'] = $text;
		return $this;
	}
	public function items($str)
	{
		$this->_field[$this->_currentField]['items'] = $str;
		return $this;
	}
	public function checked($str)
	{
		$this->_field[$this->_currentField]['checked'] = $str;
		return $this;
	}

	public function notify($text){		
		$this->_field[$this->_currentField]['notify'] = $text;
		return $this;
	}

	public function sidetip( $options ) {
		$this->_field[$this->_currentField]['sidetip'] = $options;
		return $this;
	}

	public function value($value){
		$this->attr('value', $value);
		return $this;
	}

	public function placeholder($text){
		$this->attr('placeholder', $text);
		return $this;
	}

	public function autocomplete($name="off"){
		$this->attr('autocomplete', $name);
		return $this;
	}

	public function id($name="off"){
		$this->attr('id', $name);
		return $this;
	}

	public function type($type){
		$this->attr('type', $type);
		return $this;
	}

	public function required($req = true){
		$this->_field[$this->_currentField]['attr']['required'] = $req;
		// $this->attr('required', $req);
		return $this;
	}
	public function note($text){
		$this->_field[$this->_currentField]['note'] = $text;
		return $this;
	}
	public function hind($text) {
		$this->_field[$this->_currentField]['hind'] = $text;
		return $this;
	}
	public function cls($class){
		$this->_field[$this->_currentField]['cls'] = $class;
		return $this;
	}

	public function select($data=array(),$keyval='id', $keyname='name', $frist_option='-'){
		$this->_field[$this->_currentField]['select'] = array(
			'data' => $data,
			'keyval' => $keyval,
			'keyname' => $keyname,
			'frist_option' => $frist_option
		);

		return $this;
	}

	public function attr($attr=null, $value=null){
		if(is_string($attr)){
			if( $value ){

	            $this->_field[$this->_currentField]['attr'][$attr] = $value;
                return $this;
                
            }else{

                if( isset($this->_field[$this->_currentField]['attr'][$attr]) )
                return $this->_field[$this->_currentField]['attr'][$attr];
                    
            }

		}elseif(is_array($attr)){
            $this->_field[$this->_currentField]['attr'] = $attr;
            return $this;
        }
	}

	public function addClass($class){
		$this->attr('class', $class);
		return $this;
	}

	

	public function button(){
		// $this->_field[ '$hr_'.count($this->_field) ]['text'] = $text;
		$this->_currentField = '$button_'.count($this->_field);
		return $this;
	}

	public function submit(){
		$this->_currentField = "__submit";
		return $this;
	}

	public function maxlength($length){
		$this->attr('maxlength', $length);
		return $this;
	}

	public function autofocus(){
		$this->attr('autofocus', "");
		return $this;
	}

	public function text($string){
		$this->_field[$this->_currentField]['__text'] = $string;
        return $this;
	}

	private function getAttr($data){

		if( empty($data) ) return "";
		$attr="";
		foreach ($data as $key => $value) {
			$attr.=" {$key}=\"{$value}\"";
		}
		return $attr;
	}

	public function html(){

		$field_str = ""; $actions = "";
		foreach ($this->_field as $key=>$value) {
			$string = '';

			$keyx = explode("_", $key);
			if( $keyx[0] === '$hr' ){

				if(!empty($value['text'])){
					$field_str.=$value['text'];
				}
				else{
					$field_str.='<hr>';
				}
				
				continue;
			}

			if( $key == "__form" ){
				$value['attr']['class']  = isset($value['attr']['class'])
					? "{$value['attr']['class']} form-{$this->_style}"
					: "form-{$this->_style}";
					
				$form_attribute = $value['attr'];
				continue;
			}

			$value['attr']['type'] = (isset($value['attr']['type']))
				? $value['attr']['type']
				: "text";

			if( $key == "__submit" ){

				$attr = $value['attr'];
				$value = $attr['value']; unset($attr['value']);
				$actions.='<button type="submit"'.$this->getAttr( $attr ).'>'.$value.'</button>';
				continue;
			}
			elseif( $keyx[0] === '$button' ){

				$attr = $value['attr'];
				$value = $attr['value']; unset($attr['value']);
				
				$attr_str = $this->getAttr( $attr );

				$actions.= '<a'.$attr_str.'>'.$value.'</a>';
				continue;
			}
			else{

				$value['attr']['name'] = isset($value['attr']['name'])
					? $value['attr']['name']
					: $value['attr']['id'];
			}


			$id = "";
			if( isset($value['attr']['id']) ){
				$id = $value['attr']['id'];

			}else if( isset($value['attr']['name']) ){
				$id = $value['attr']['name'];
			}


			$fieldId = isset($value['attr']['id'])
				? ' id="'.$value['attr']['id'].'_fieldset"'
				: "";

			$label = isset($value['label'])
				? '<label for="'.$value['attr']['id'].'" class="control-label">'.$value['label'].'</label>'
				: "";


			if( isset( $value['__text']) ){
				$string = $value['__text'];
			}
			elseif( isset($value['select']) ){

				$_v = "";
				if( isset($value['attr']['value']) ){
					$_v = $value['attr']['value'];
					unset($value['attr']['value']);
				}

				$option = '';
				if( !empty($value['select']['frist_option']) ){
					$option .= '<option value="">'.$value['select']['frist_option'].'</option>';
				}

				foreach ($value['select']['data'] as $i => $val) {

					if( is_object($val) ){

						$t = isset($val->{$value['select']['keyname']}) ? $val->{$value['select']['keyname']}:'';
						$v = isset($val->{$value['select']['keyval']}) ? $val->{$value['select']['keyval']}: $t;
					}


					if( is_array($val) ){

						$t = isset($val[ $value['select']['keyname'] ]) ? $val[ $value['select']['keyname'] ]:'';
						$v = isset($val[ $value['select']['keyval'] ]) ? $val[ $value['select']['keyval'] ]: $t;
					}

					
					$s = $_v==$v ? ' selected="1"':'';
					$option .= '<option'.$s.' value="'.$v.'">'.$t.'</option>';
				}

				if( isset($value['attr']['type']) ){
					unset($value['attr']['type']);
				}

				$string = '<select'.$this->getAttr( $value['attr'] ).'>'.$option.'</select>';
			}
			elseif( $value['attr']['type'] === "textarea" ){

				$val = "";
				if( isset($value['attr']['value']) ){

					$val = $value['attr']['value'];
					unset($value['attr']['value']);
				}

				unset($value['attr']['type']);

				$string = '<textarea'.$this->getAttr( $value['attr'] ).'>'.$val.'</textarea>';
			}
			elseif( $value['attr']['type']==="checkbox" || $value['attr']['type']==='radio' ){

				if( isset($value['items']) ){

					$checked = isset( $value['checked'] ) ? $value['checked']: '';

					$txt = '';
					foreach ($value['items'] as $i => $val) {

						if( is_array($val) ){
							$is_checked = false;
							$v = !empty($val['id']) ? $val['id']: $i;
							$value['attr']['id'] = $id.'_'. strtolower($v);

							$values = !empty($value['attr']['value']) ? $value['attr']['value']: array();
							if( !is_array($values) ) $values = array($values);

							$value['attr']['value'] = $v;

							if( in_array($v, $values) ){
								$is_checked = true;
							}elseif( ($value['attr']['type']==="radio" && $checked == $v) || ($value['attr']['type']==="checkbox" && !empty($val['checked'])) ){
								$is_checked = true;
							}
							
							$txt .= '<label class="'.$value['attr']['type'].'" for="'.$value['attr']['id'].'"><input'.$this->getAttr( $value['attr'] ). ( $is_checked? ' checked':'' ). '><span>'.(!empty($val['name']) ? $val['name']: '').'</span></label>';
						}
						else{
							$is_checked = false;

							if( $value['attr']['type']==="checkbox" ){
								$value['attr']['name'] = strtolower($val);
								$value['attr']['id'] = strtolower($val);
							}
							else{
								$value['attr']['id'] = $id.'_'. strtolower($val);
								$value['attr']['value'] = $val;

								if( is_array($value['value']) ){

								}
								else if( $val==$checked ){
									$is_checked = true;
								}

							}
							
							$txt .= '<label class="'.$value['attr']['type'].'" for="'.$value['attr']['id'].'"><input'.$this->getAttr( $value['attr'] ). ($is_checked? ' checked':'' ).'><span>'.$val.'</span></label>';
						}
					}

					$string = $txt;
				}
				else{

				}
			}
			else{
				$string = '<input'.$this->getAttr( $value['attr'] ).'>';
			}

			$cls = 'control-group';
			$error = '';
			if( !empty($value['notify']) ){
				$cls .= !empty($cls)? ' ':'';
				$cls .= 'has-error';
			}

			$sidetip = '';
			if( !empty($value['sidetip']) ){
				$ps = '';
				foreach ($value['sidetip']['options'] as $val) {
					$ps .= '<p data-name="'.$value['sidetip']['keys']['name'].'" data-value="'.$val[ $value['sidetip']['keys']['value'] ].'">'.$val[ $value['sidetip']['keys']['text'] ].'</p>';
				}

				$sidetip = '<div class="sidetip">'.$ps.'</div>';
			}

			# hind
			$hind = '';
			if( !empty($value['hind']) ){

				$cls .= !empty($cls)? ' ':'';
				$cls .= 'has-hind';

				$hind = '<div class="hind">'.$value['hind'].'</div>';
			}

			if( isset($value['cls']) ){
				$cls .= !empty($cls)? ' ':'';
				$cls .= $value['cls'];
			}
			

			$cls = !empty($cls)? ' class="'.$cls.'"':'';
			$field_str.='<div'.$fieldId.$cls.'>'.
				
				$label.

				$hind.
				
				'<div class="controls">'.
					$string.
					$sidetip.
					(!empty($value['note'])? '<div class="note">'.$value['note'].'</div>': '').
					'<div class="notification">'.(!empty($value['notify'])? $value['notify']: "").'</div>'.
				'</div>'.

			'</div>';
		}

		if( isset( $form_attribute ) && $this->_elem=="form"){
			$form_attribute['method'] = (in_array('post', $form_attribute))
				? "post"
				: "get";
		}

		$actions = !empty($actions)?'<div class="form-actions">'.$actions.'</div>':"";

		$this->reset();

		return '<'.$this->_elem.$this->getAttr( isset( $form_attribute )?$form_attribute:""  ).'>'.$field_str.$actions.'</'.$this->_elem.'>';
	}

}