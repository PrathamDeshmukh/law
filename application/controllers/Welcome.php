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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$page_data['page_name'] = 'home';
		$this->load->view('front/template', $page_data);
	}
	
	public function contact()
	{
		
        $page_data['page_name'] = 'contact';
		$this->load->view('front/template', $page_data);

	}
	public function consultant()
	{
		$page_data['page_name'] = 'consultant';
		$this->load->view('front/template', $page_data);

	}
	public function family()
	{
		$page_data['page_name'] = 'family';
		$this->load->view('front/template', $page_data);

	}
	public function contract()
	{
		$page_data['page_name'] = 'contract';
		$this->load->view('front/template', $page_data);

	}
	public function about()
	{
		$page_data['page_name'] = 'about';
		$this->load->view('front/template', $page_data);

	}
}
