<?php	 	

	class Slider extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listSlider(){
		
		
		


		$query = "SELECT * FROM `sky_sldr` c WHERE c.`sldr_id`!='' ORDER BY `sldr_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	}
	
	 /* Add Testimonials
			*/			
			function addSlider($inputs){
					$insert	=	array('sldr_ttl'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'sldr_cptn'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'sldr_img'=>$inputs['photo'],
										'sldr_stus'=>$inputs['status'],
										);
				
				$this->insert($insert,"sky_sldr");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editSlider($inputs){
					$insert	=	array('sldr_ttl'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'sldr_cptn'=>$this->addFilter($this->escapeHtml($inputs['caption'])),
										'sldr_img'=>$inputs['photo'],
										'sldr_stus'=>$inputs['status'],
										'sldr_id'=>$inputs['id']
							);
				$this->update($insert,"sky_sldr",'`sldr_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('sldr_img'=>$image),'sky_sldr','`sldr_id`='.$id);
	}
	 function getSlider($id){
		$query	=	"SELECT * FROM `sky_sldr` WHERE `sldr_id`='$id'  ";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllSliderDetails()
	{
		$query = "SELECT * FROM sky_sldr where  sldr_stus=1";
		$rec = $this->fetchAll($query);
		//print_r($rec);exit;
		return $rec;	
	}

}
?>