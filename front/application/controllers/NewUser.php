<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewUser extends CI_Controller {
    
    public function index()
	{
		$this->load->view('new_user');
	}
    
}