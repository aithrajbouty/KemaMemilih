<?php namespace App\Controllers;

class MainpageUniv extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mainpage Universitas - Kema Memilih',
			'page' => 'mainpage'
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('templates/navbar2', $data);
		echo view('v_mainpageuniv');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
