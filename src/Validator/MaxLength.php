<?php

namespace MickaelBaudoin\SimpleForm\Validator;

class MaxLength extends AbsctractValidator{

	protected $message = "Cette valeur est trop grande";

	protected $name = "MaxLength";

	protected $len;

	public function __construct($len, $active = true)
	{
		$this->len = $len;
		parent::__construct($active);
	}

	public function isValid($value)
	{
		$nbr = strlen($value);

		return $nbr == $this->len;
	}
}