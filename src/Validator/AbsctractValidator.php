<?php 

namespace MickaelBaudoin\SimpleForm\Validator;

abstract class AbsctractValidator implements IValidator{

	protected $message;

	protected $name;

	protected $active;

	public function __construct($active = true)
	{
		$this->active = $active;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setMessage($message)
	{
		$this->message = $message;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getActive()
	{
		return $this->active;
	}

	public function setActive($active = true)
	{
		$this->active = $active;
		return $this;
	}

	abstract public function isValid($value);
}