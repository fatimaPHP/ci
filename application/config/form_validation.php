<?php

$config = array(
	'books' => array(
		array(
			'field' => 'books',
			'label' => 'Book Title',
			'rules' => 'trim|required|check_book',
		)
	),
);
