<?php

require_once 'abstract_table_model.php';

class videos extends abstract_table_model {

	function __construct() {
		parent::__construct('videos', 'id');
	}
}