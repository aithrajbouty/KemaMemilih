<?php namespace App\Controllers;

class Statistik extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Statistik - Kema Memilih',
			'page' => 'statistik'
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('templates/navbar2', $data);
		echo view('v_statistik');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
