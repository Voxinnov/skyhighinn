<?php	 	

	class Acimg extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listAcimg(){
		
		
		


		$query = "SELECT * FROM `acmdtn_img` c WHERE c.`acmdtn_img_id`!='' ORDER BY `acmdtn_img_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addAcimg($inputs){
					$insert	=	array('acmdtn_img_photo'=>$this->addFilter($this->escapeHtml($inputs['photo'])),
										'acmdtn_img_stus'=>$inputs['status']
										);
				
				$this->insert($insert,"acmdtn_img");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editAcimg($inputs){
					$insert	= array('acmdtn_img_photo'=>$this->addFilter($this->escapeHtml($inputs['photo'])),
										'acmdtn_img_stus'=>$inputs['status'],	
										'acmdtn_img_id'=>$inputs['id']
							);
				$this->update($insert,"acmdtn_img",'`acmdtn_img_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('acmdtn_img_photo'=>$image),'acmdtn_img','`acmdtn_img_id`='.$id);
	}
	 function getAcimg($id){
		$query	=	"SELECT * FROM `acmdtn_img` WHERE `acmdtn_img_id`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllAcimgDetails()
	{
		$query = "SELECT * FROM acmdtn_img where  acmdtn_img_stus=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>