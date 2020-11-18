<?php namespace App\Controllers;

class Mainpage extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mainpage - Kema Memilih'
		];
		echo view('templates/header', $data);
		echo view('v_mainpage');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
