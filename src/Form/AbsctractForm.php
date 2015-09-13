<?php 

namespace MickaelBaudoin\SimpleForm\Form;

absctract class AbsctractForm implements IForm{

	protected $elements = array();

	protected $params = array();

	public function __construct()
	{
		$this->init();
	}

	absctract public function init();

	public function bind($params)
	{
		if(count($params) > 0){
			foreach($params as $name => $value){
				if(isset($this->elements[$name])){
					$this->elements[$name]->setValue($value);
				}
			}
		}
	}

	public function generateInput($name, $validator = null)
	{
		$this->elements[$name] = new MickaelBaudoin\Element\Input($name, $validator);
		return $this->elements[$name];
	}

	public function generateTextarea()
	{

	}

	public function generateCheckBox()
	{

	}

	public function generateSelect()
	{

	}

	public function getElement($name)
	{
		if(isset($this->elements[$name]) && !empty($this->elements[$name])){
			return $this->elements[$name];
		}

		return null;
	}

	public function getValues()
	{
		return $this->params;
	}

	public function isValid()
	{
		foreach($this->params as $name => $value){
			if(isset($this->elements[$name])){
				$this->params[$name] = $value;
			}
		}
	}
}