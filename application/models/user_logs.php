<?php

require_once 'abstract_table_model.php';

class user_logs extends abstract_table_model {

	function __construct() {
		parent::__construct('user_logs', 'id');
	}
}