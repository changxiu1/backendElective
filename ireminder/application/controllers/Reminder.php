<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reminder extends CI_Controller {

	public function __construct() {
        
        // then execute the parent constructor anyway
        parent::__construct();

        // first do something important
       	$this->load->model('Reminder_model');
    }

    public function index()
    {
    	$this->test();
    }

    public function test() {
    	echo json_encode($this->Reminder_model->getUsers());
    }
}
