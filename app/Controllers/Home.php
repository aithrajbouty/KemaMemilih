<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Homepage - Kema Memilih'
		];
		echo view('templates/header', $data);
		echo view('v_home');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
