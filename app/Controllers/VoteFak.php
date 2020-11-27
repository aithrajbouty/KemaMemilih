<?php namespace App\Controllers;

class VoteFak extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Voting page Kema Fakultas - Kema Memilih'
		];
        echo view('templates/header', $data);
        echo view('templates/navbar1');
		echo view('v_voteFak');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
