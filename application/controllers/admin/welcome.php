<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

   public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		if($this->form_validation->run('books') == TRUE) {
			echo "ok";
		}

		$data['books'] = $this->books_model->find();
		$this->load->view('books/index',$data);
	}

}

