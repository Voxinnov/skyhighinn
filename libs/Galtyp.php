<?php	 	

	class Galtyp extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listGaltyp(){
		
		
		


		$query = "SELECT * FROM `galtyp` c WHERE c.`galtyp_id`!='' ORDER BY `galtyp_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	  }
	 /* Add Testimonials
			*/			
			function addGaltyp($inputs){
		$insert	=	array('galtyp_name'=>$this->addFilter($this->escapeHtml($inputs['name'])),
										
										'galtyp_stus'=>$inputs['status'],
										);
				//print_r($insert);exit;
				$this->insert($insert,"galtyp");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editGaltyp($inputs){
	$insert	=	array('galtyp_name'=>$this->addFilter($this->escapeHtml($inputs['name'])),

										'galtyp_stus'=>$inputs['status']
										);
	//print_r($insert);exit;
				$this->update($insert,"galtyp",'`galtyp_id`='.$inputs['id']);		
				return true;
			}

	
	 function getGaltyp($id){
		$query	=	"SELECT * FROM `galtyp` WHERE `galtyp_id`='$id'";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	
	function getAllGaltypDetails()
	{
		$query = "SELECT * FROM galtyp where galtyp_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}

}
?>