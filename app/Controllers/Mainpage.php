<?php namespace App\Controllers;

class Mainpage extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mainpage - Kema Memilih',
			'page' => 'mainpage'
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('templates/navbar2', $data);
		echo view('v_mainpage');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
