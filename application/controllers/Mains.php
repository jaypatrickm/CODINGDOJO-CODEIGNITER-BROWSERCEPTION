<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function get_page()
	{
		echo 'inside get_page';
		require('application/libraries/simple-form-dom.php');
		$html = file_get_html($this->input->post('url'));
		foreach ($html->find('body') as $element) {
			echo $element;

		}
	}
}

//end of main controller