<?php
class Latihan1 extends CI_controller
{
	public function index()
	{
		echo "Selamat Datang.. selamat belajar Web Programing";
		//$this->load->view('view-latihan1');
	}
	
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('model_latihan1');
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->model_latihan1->jumlah($n1, $n2);
		
		$this->load->view('view-latihan1', $data);
	}
	
}
?>