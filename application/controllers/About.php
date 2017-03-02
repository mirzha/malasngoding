<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "Pangestu Nur Mirzha",
				'nim'  => "1541180028",
				'alamat' => "Dusun Kesiman Desa Sukoreno Kecamatan Prigen, Pasuruan",
				'no_telp' => '085755214080',
				'hobby' => 'Travelling',
			);
		$this->load->view('about',$data);		
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

 ?>