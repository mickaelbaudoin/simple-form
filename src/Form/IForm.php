<?php 

namespace MickaelBaudoin\SimpleForm\Form;

interface IForm{

	public function bind(array $params = array());

	public function isValid();
}