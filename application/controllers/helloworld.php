<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helloworld extends CI_Controller {

	public function index(){
		$this->load->view('hello_world');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
