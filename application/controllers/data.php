<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function convert() {
		
		$inFilename = '/home/sriranga/Desktop/0001.txt';
		$prajaText = file_get_contents($inFilename);

		$unicodeText = $this->model->praja2Unicode($prajaText);

		echo '
		<!DOCTYPE html>
		<html lang="en">
		<head>
		    <meta charset="utf-8">
		</head>
		';
		var_dump($unicodeText);
	}
}

?>