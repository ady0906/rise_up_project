<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewUser extends CI_Controller {
    
    public function index()
	{
		// $client = new Client([
		// 	'base_uri' => 'http://localhost:8080',
		// 	'timeout'  => 2.0,
		// ]);
		// $res = $client->request('GET', '/users/' . $id);
		// $data["user"] = json_decode(($res->getBody())->getContents());
		$this->load->view('new_user');
	}
    
}