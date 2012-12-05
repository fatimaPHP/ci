<?php

class Books_model extends CI_Model 
{
	public function find($book_id = FALSE) 
	{
		return $this->db->get('books')->result();
	}
}

?>
