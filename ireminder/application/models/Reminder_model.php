<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reminder_model extends CI_Model {

    public function getUsers() {
    	$query = $this->db->get('test_table'); 

    	return $query->result_array();
    }
}
