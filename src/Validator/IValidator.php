<?php

namespace MickaelBaudoin\SimpleForm\Validator;

interface IValidator{

	public function getMessage();

	public function isValid($value);

}