<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Edit extends CI_Controller {
    
    public function index($id)
	{
		$client = new Client([
			'base_uri' => 'http://localhost:8080',
			'timeout'  => 2.0,
		]);
		$res = $client->request('GET', '/users/' . $id);
		$data["user"] = json_decode(($res->getBody())->getContents());
		$this->load->view('edit', $data);
	}
    
}