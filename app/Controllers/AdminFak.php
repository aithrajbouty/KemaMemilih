<?php namespace App\Controllers;

class AdminFak extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Admin - Fakultas',
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('v_adminfak');
	}

	//--------------------------------------------------------------------

}
