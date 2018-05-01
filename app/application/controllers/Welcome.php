<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('kubo');
	}

	public function get($title)
	{
		$this->load->model('welcome_model');

		$data['title'] = $this->welcome_model->get();;
		$this->load->view('welcome_message', $data);
	}

	public function push()
	{
		$data['testkubo'] = 'ごめんなさい';
		$this->load->view('kubokubokubo', $data);
	}
}
