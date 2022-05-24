<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuProduct()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'top_products');
		$dl = $this->db->get('allvalue');
		$dl = $dl->result_array();

		foreach ($dl as $value) {
			$temp = $value['giatrithuoctinh'];
		}
		return $temp;
	}
	public function updateDuLieuProduct($dulieucanupdate)
	{
		//lay du lieu can update
		$dldangmang = array(
			'tenthuoctinh' => 'top_products',
			'giatrithuoctinh' => $dulieucanupdate );
		$this->db->where('tenthuoctinh', 'top_products');
		return $this->db->update('allvalue',$dldangmang);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */