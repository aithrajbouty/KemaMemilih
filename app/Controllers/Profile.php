<?php namespace App\Controllers;

class Profile extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mainpage - Kema Memilih',
			'page' => 'profile'
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('templates/navbar2', $data);
		echo view('v_profile');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
