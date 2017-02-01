<?php
class Insert extends CI_Model{
	public function ins($data)
	{
		$this->db->insert('employee',$data);
		
		$query=$this->db->select('*')
					->from('employee')
					->get();
					
	if($query)
	{
		if($query->num_rows()>0)
		{
			// echo "hai";
			// while($rows=mysqli_fetch_assoc($query))
			// {
			foreach($query->result_array() as $rows)
			{
				// echo "hai";
				
				$response['id']=$rows['id'];
				$response['name']=$rows['name'];
				$response['phone']=$rows['phone'];
				$response['email']=$rows['email'];
				$response['gender']=$rows['gender'];
				$response['country']=$rows['country'];
						$result=array('id'=>$response['id'],'name'=>$response['name'],'phone'=>$response['phone'],'email'=>$response['email']);
							return $response;

			}
			// echo "hai";
			// if(result_array($query) as $rows)
			// {
			
			// 	echo "hai";
			// }

		}

		
	
// }
		// print_r($query);
		// $response=result_array($query['name']);
		// echo $response;

		// $response=result_array($query);
		// $response=$query['name'];
		// echo $response;
		// echo "hai";

	}

					
	}


	public function del($data1)
	{
		$this->db->delete('*')
	 		->from('employee')
	 		->where('id',$id);

	}
	public function edit($data1)
	{
		$query1=$this->db->select('*')
				->from('employee')
				->where('$id',$data)
				->get();
		
	}
}


?>


