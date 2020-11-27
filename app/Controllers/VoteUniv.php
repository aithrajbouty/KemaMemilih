<?php namespace App\Controllers;

class VoteUniv extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Voting page Kema Universitas - Kema Memilih',
			'back' => 'voteU'
		];
        echo view('templates/header', $data);
        echo view('templates/navbar1', $data);
		echo view('v_voteUniv');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
