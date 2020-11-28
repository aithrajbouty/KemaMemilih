<?php namespace App\Controllers;

class MainpageFak extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Mainpage Fakultas - Kema Memilih',
			'page' => 'mainpage'
		];
		echo view('templates/header', $data);
		echo view('templates/navbar1');
		echo view('templates/navbar2', $data);
		echo view('v_mainpagefak');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
