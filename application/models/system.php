<?php

require_once 'abstract_table_model.php';

class system extends abstract_table_model {

	function __construct() {
		parent::__construct('system', 'id');
	}
}