<?php
class chat extends CI_controller{
	function index(){
		$data['res']='';
		$data['err']='';
		$this->load->view('jowl.php',$data);
	}

	public function order_now(){
		$this->load->view('order_view.php');
	}
	public function feedback_submit(){
			$this->load->library('form_validation');
		$this->form_validation->set_rules('feedback','Feedback','required|max_length[2000]|min_length[3]');
		if($this->form_validation->run()==FALSE){
		$data['res']='';
			$data['err']=validation_errors();
		$this->load->view('jowl.php',$data);
		}
		else{
				if($this->mhome->feed()){
					$data['err']='';
					$data['res']='Thank You For Your Feedback';
					$this->load->view('jowl.php',$data);
				}
				else{
					$data['res']='';
					$data['err']='Feedback Could Not Be Submitted';
					$this->load->view('jowl.php',$data);
				}}
	}
}
?>