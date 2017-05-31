<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function _remap($method){

		include('application/libraries/Soportes_Api.php');
		$api = new Soportes_api;
		$api->execute_call($method);
	}

}
