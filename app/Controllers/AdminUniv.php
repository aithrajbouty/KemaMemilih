<?php namespace App\Controllers;

class AdminUniv extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Admin - Universitas',
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('v_adminuniv');
	}

	//--------------------------------------------------------------------

}
