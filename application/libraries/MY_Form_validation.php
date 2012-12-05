<?php

class MY_Form_validation extends CI_Form_validation {

	public function __construct($config = array()) 
	{
		parent::__construct($config);
		$this->CI =& get_instance();
	}
	
	function check_book($id)
	{
		$book = $this->CI->db->limit(1)->get_where('books', array('book_id' => $id))->row();
		if(count($book) == 1) {
			return TRUE;
		} else {
			$this->CI->form_validation->set_message('check_book','Book does not exists!');
			return FALSE;
		}
	}
}
