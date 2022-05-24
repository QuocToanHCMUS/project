<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuNews()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'news');
		$dl = $this->db->get('allvalue');
		$dl = $dl->result_array();

		foreach ($dl as $value) {
			$temp = $value['giatrithuoctinh'];
		}
		return $temp;
	}
	public function updateDuLieuNews($dulieucanupdate)
	{
		//lay du lieu can update
		$dldangmang = array(
			'tenthuoctinh' => 'news',
			'giatrithuoctinh' => $dulieucanupdate );
		$this->db->where('tenthuoctinh', 'news');
		return $this->db->update('allvalue',$dldangmang);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */