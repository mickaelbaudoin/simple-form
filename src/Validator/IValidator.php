<?php

namespace MickaelBaudoin\SimpleForm\Validator;

interface IValidator{

	public function getMessage();

	public function setMessage($message);

	public function getName();

	public function isValid($value);

	public function setActive($active = true);

	public function getActive();

}