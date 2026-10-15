<?php	 	

	class About extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	
	/*
			 * Edit Testimonials
			*/			
		function editAbout($inputs){
		$insert	=	array('abt_title'=>$this->addFilter($this->escapeHtml($inputs['title'])),
										'abt_dscrpn'=>$inputs['dscrptn'],
										'abt_stus'=>$inputs['status']
										
										
										
							);
							//print_r($insert); exit;	
				$this->update($insert,"about",'`abt_id`='.$inputs['id']);		
				return true;
			}
	


	function getAbout(){
		$query	=	"SELECT * FROM `about`";

		$rec		=	$this->fetchAll($query);
		return $rec;
	}

	function getAllAboutDetails()
	{
		$query = "SELECT * FROM about where abt_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}
	
}
?>