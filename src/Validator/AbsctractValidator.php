<?php 

namespace MickaelBaudoin\SimpleForm\Validator;

abstract class AbsctractValidator implements IValidator{

	protected $message;

	public function getMessage()
	{
		return $this->message;
	}

	public function setMessage($message)
	{
		$this->message = $message;
	}

	abstract public function isValid($value);
}