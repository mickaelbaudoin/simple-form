<?php

namespace MickaelBaudoin\SimpleForm\Validator;

class Integer extends AbsctractValidator{

	protected $message = "Cette valeur n'est pas un entier";

	protected $name = "Integer";

	public function isValid($value)
	{
		if(is_numeric($value)){
			return true;
		}

		return false;
	}
}