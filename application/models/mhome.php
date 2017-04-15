<?php
class mhome extends CI_Model{
	public function feed(){
		$data=array(
			'feed'=>$this->input->post('feedback')
			);
	$this->db->insert('feedback',$data);
	return TRUE;
	}
}
?>