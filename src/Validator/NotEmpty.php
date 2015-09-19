<?php

namespace MickaelBaudoin\SimpleForm\Validator;

class NotEmpty extends AbsctractValidator{

	protected $message = "Cette valeur est obligatoire";

	protected $name = "NotEmpty";

	public function isValid($value)
	{
		if(!empty($value)){
			return true;
		}

		return false;
	}
}