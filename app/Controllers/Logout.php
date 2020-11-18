<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Mainpage extends BaseController
{
	public function index()
	{
		if(session()->get('npm')==''){
			session()->setFlashdata('gagal','Login terlebih dahulu!');
			return redirect()->to(base_url('Login'));
		}
		echo view('v_mainpage');
	}

	//--------------------------------------------------------------------

}