<?php 

namespace MickaelBaudoin\SimpleForm\Element;

class Input extends AbstractElement{

	public function __construct($name, $validator = null)
	{
		$this->name = $name;
		if($validator != null){
			$this->validators[$name] = $validator;
		}
	}
}