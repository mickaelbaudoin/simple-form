<?php 

namespace MickaelBaudoin\SimpleForm\Element;

use MickaelBaudoin\SimpleForm\Validator\IValidator;

abstract class AbstractElement implements IElement{

	protected $validators = array();

	protected $name;

	protected $value;

	protected $errors = array();

	/**
	 * @param string $name input name
	 * @param IValidator|null $validator validateur
	 */
	public function __construct($name, IValidator $validator = null)
	{
		$this->name = $name;

		if($validator != null){
			$validators[] = $validator;
		}
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function getName()
	{
		return $this->name;
	}

	public function addValidator(IValidator $validator)
	{
		$this->validators[] = $validator;
	}

	public function getValidators()
	{
		return $this->validators;
	}

	/**
	 * Retourne tout les erreurs détecter par les validators
	 * 
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 * Vérifie que la valeur de l'element est valid pour tout les validators associer
	 * 
	 * @return boolean 
	 */
	public function isValid()
	{
		if(count($this->validators) > 0){
			foreach($this->validators as $validator){
				if(!$validator->isValid($this->value)){
					$this->errors[$this->name] = array(
						'value' => $this->value, 
						'message' => $validator->getMessage()
					);
				}
			}

			if(count($this->errors) > 0){
				return false;
			}
		}

		return true;
	}
}