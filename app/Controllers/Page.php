<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about(){
		echo "Halaman About";
	}
	
	public function contact(){
		echo "Halaman Contact";
	}
	
	public function faqs(){
		echo "Halaman Faqs";
	}
}