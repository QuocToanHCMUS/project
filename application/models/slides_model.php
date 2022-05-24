<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl = $this->db->get('allvalue');
		$dl = $dl->result_array();

		foreach ($dl as $value) {
			$temp = $value['giatrithuoctinh'];
		}
		return $temp;
	}
	public function updateDuLieuSlide($dulieucanupdate)
	{
		//lay du lieu can update
		$dldangmang = array(
			'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh' => $dulieucanupdate );
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		return $this->db->update('allvalue',$dldangmang);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */