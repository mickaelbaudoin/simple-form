<?php

namespace MickaelBaudoin\SimpleForm\Element;

use MickaelBaudoin\SimpleForm\Validator\IValidator;

interface IElement{

	public function setValue($value);

	public function getValue();

	public function addValidator(IValidator $validator);

	public function getValidators();

	public function isValid();
	
}