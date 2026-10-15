<?php	 	

	class Gallery extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	function listGallery(){
		
		
		


		$query = "SELECT * FROM `gallery` c WHERE c.`gal_id`!='' ORDER BY `gal_id` DESC";
	
		$rec	=	$this->fetchAll($query);
	
		
		return $rec;		
		
		
	  }
	 /* Add Testimonials
			*/			
			function addGallery($inputs){
		$insert	=	array('gal_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),					
										'gal_typ_cata'=>$inputs['catogory'],
										'gal_image'=>$inputs['photo'],
										'gal_stus'=>$inputs['status']
										
							);
				//print_r($insert);exit;
				$this->insert($insert,"gallery");	
				
				return true;
				
				
			}


		function getInsert(){
		return $this->lastId;
	}
	/*
			 * Edit Testimonials
			*/			
			function editGallery($inputs){
	$insert	=	array('gal_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),					
										'gal_typ_cata'=>$inputs['catogory'],
										'gal_image'=>$inputs['photo'],
										'gal_stus'=>$inputs['status']
										
							);
				$this->update($insert,"gallery",'`gal_id`='.$inputs['id']);		
				return true;
			}

	function updateGalleryImage($id,$image){
		 $this->update(array('gal_image'=>$image),'gallery','`gal_id`='.$id);
	}
	 function getGallery($id){
		$query	=	"SELECT * FROM `gallery` WHERE `gal_id`='$id'";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	 function getGallerycat($id){
		$query	=	"SELECT * FROM `gallery` WHERE `gal_typ_cata`='$id'";
		$rec		=	$this->fetchAll($query);
		return $rec;
	}
	function getAllGalleryDetails()
	{
		$query = "SELECT * FROM gallery where gal_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}

}
?>