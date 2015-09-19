<?php 

namespace MickaelBaudoin\SimpleForm\Form;

use MickaelBaudoin\SimpleForm\Element\Input;
use MickaelBaudoin\SimpleForm\Element\IElement;

abstract class AbstractForm implements IForm{

	protected $elements = array();

	protected $params = array();

	protected $errors = array();

	public function __construct()
	{
		$this->init();
	}

	abstract public function init();

	public function bind(array $params = array())
	{
		if(count($params) > 0){
			foreach($params as $name => $value){
				if(isset($this->elements[$name])){
					$this->elements[$name]->setValue($value);
					$this->params[$name] = $value;
				}
			}
		}
	}

	public function generateInput($name, $validator = null)
	{
		$this->elements[$name] = new Input($name, $validator);
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

	public function addElement(IElement $element)
	{
		$this->elements[$element->getname()] = $element;
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

	public function getErrors()
	{
		return $this->errors;
	}

	public function isValid()
	{
		if(count($this->elements) > 0){
			foreach($this->elements as $element){
				if(!$element->isValid()){
					$this->errors[$element->getName()] = $element->getErrors()[$element->getName()];
				}
			}

			if(count($this->errors) > 0){
				return false;
			}
		}

		return true;
	}
}