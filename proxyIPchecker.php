<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProxyIPchecker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		@session_start();
		$this->load->library('ipinfodb');
	}
	
	public function getLocation($ip)
	{		
				$this->ipinfodb->setKey('14c838db12a1d7bef15e140a854161b6f8b3430a6a37549e57a2cbceaxxxxxxx');
	 
	//Get errors and locations
	$locations = $this->ipinfodb->getGeoLocation($ip);
	$errors =$this->ipinfodb->getError();

	return $locations;

	}
	


}
