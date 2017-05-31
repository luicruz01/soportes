<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search_by($line, $brand, $model, $year) {

	}

	public function get_brand($line){
		$result = array();
		if (isset($line) AND is_numeric($line)) {
			$this->db->select('DISTINCT B.*', false);
			$this->db->join('Items AS I', 'I.brand_id = B.brand_id', 'inner');
			$this->db->join('Line AS L', 'L.line_id = I.line_id', 'inner');
			$this->db->where('L.line_id', $line);
			$query = $this->db->get('Brands AS B');

			if ($query->num_rows() > 0) {
				$result = $query->result();
			}
			var_dump($result);
		}
	}

	public function _remap($method){
		var_dump($method);
	}
}
