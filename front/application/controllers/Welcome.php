<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Welcome extends CI_Controller {
	
	public function index()
	{
		$client = new Client([
			'base_uri' => 'http://localhost:8080',
			'timeout'  => 2.0,
		]);
		$res = $client->request('GET', '/users');
		$data["users"] = json_decode(($res->getBody())->getContents());
		$this->load->view('welcome_message', $data);
	}
}
