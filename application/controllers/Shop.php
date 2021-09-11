<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	var $api1 ="";
	var $api2 ="";

	function __construct() {
        parent::__construct();
    	$this->api1="http://www.themealdb.com/api/json/v1/1/random.php";
		$this->api2="http://www.themealdb.com/api/json/v1/1/categories.php";
		$this->load->library('curl');
	}
	
	public function index()
	{
		$data['produk'] = json_decode($this->curl->simple_get($this->api1));		
		$data['kategori'] = json_decode($this->curl->simple_get($this->api2));		
		$this->load->view('index', $data);
	}

	public function detail()
	{
		$data['produk'] = json_decode($this->curl->simple_get($this->api1));		
		$data['kategori'] = json_decode($this->curl->simple_get($this->api2));		
		$this->load->view('detail_produk', $data);
	}
}
