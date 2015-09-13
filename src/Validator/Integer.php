<?php

namespace MickaelBaudoin\SimpleForm\Validator;

class Integer extends AbsctractValidator{

	protected $message = "Cette valeur n'est pas un entier";

	public function isValid($value)
	{
		if(is_int($value)){
			return true;
		}

		return false;
	}
}