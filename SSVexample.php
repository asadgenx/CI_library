<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SSVexample extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		
		$this->load->library('SSVparser');
		
	}
	
	public function index()
	{	 
		$csv_data = $this->ssvparser->parser("|","\n","d:/xampp/htdocs/ssvfile.csv",false);
		print_r($csv_data);
	}
	
}

?>
