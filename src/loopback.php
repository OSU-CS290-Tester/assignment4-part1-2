<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Form {
	public $inputMethod
	public $formData = array();
};

//Got from canvas discussion board. Sets variable to form method
$input = $_SERVER['REQUEST_METHOD'];

//These are simply checking whether the form is submitting via post or get
//The key/value pairs are pushed to the array. The object
//holds all this data in order to more easily json encode it.
if($input == 'GET') {
	$formSize = count($_GET);
	$newForm = new Form;
	$newForm->inputMethod = $input;

	if($formSize == 0) {
		$newForm->formData = null;
	} else {
		$newForm->formData = $_GET;
	}
}
elseif($input == 'POST') {
	$formSize = count($_POST);
	$newForm = new Form;
	$newForm->inputMethod = $input;

	if($formSize == 0) {
		$newForm->formData = null;
	} else {
		$newForm->formData = $_POST;
	}
}

$jsonTemp = json_encode($newForm);

print_r($newForm);