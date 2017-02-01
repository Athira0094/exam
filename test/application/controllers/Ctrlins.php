<?php 
class Ctrlins extends CI_Controller
{
	public function ins()
	{
		if(isset($_REQUEST['submit']))
		{
			
			$user['name']=$this->input->get_post('name');
			$user['phone']=$this->input->get_post('mobile');
			$user['email']=$this->input->get_post('email');
			$user['gender']=$this->input->get_post('r');
			$user['hobbies']=$this->input->get_post('a[]');
			
			$user['country']=$this->input->get_post('country');

			$val=array('name'=>$user['name'],'phone'=>$user['phone'],'email'=>$user['email'],'gender'=>$user['gender'],'country'=>$user['country']);
			$this->load->model('Insert');
			$data=$this->Insert->ins($val);
			// $n=$data['name'];
			// print_r($data);
		$this->load->view('Display',$data);	
		}
		
	}
public function del()
{
	// echo "hai";
	if(isset($_REQUEST['id']))
	{
		$id=$this->input->get_post('id');
		
		$this->load->model('Insert');
		$this->Insert->del($id);
	
	// $this->db->delete(*)
	// 		->from('employee')
	// 		->where('id',$id);
}}
public function edit()
{
	if(isset($_REQUEST['id']))
	{
		$id=$this->input->get_post('id');
		$this->load->model('Insert');
		$this->Insert->edit($id);
	}
}
}




 ?>