<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class HomeController extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('common/index.html');
            $this->load->view('common/home.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>