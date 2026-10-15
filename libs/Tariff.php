<?php	 	

	class Tariff extends MySql{
	
	
	
	function deleteList($list){
					for($i=0;$i<count($list);$i++){
							$this->delete('testimonials','`t_id`='.$list[$i]);
					}
			}	
			
			
	
	
	/*
			 * Edit Testimonials
			*/			
		function editTariff($inputs){
		$insert	=	array('tarrif_dscrptn'=>$inputs['dscrptn'],
										'tarrif_stus'=>$inputs['status']
										
										
										
							);
							//print_r($insert); exit;	
				$this->update($insert,"tarrif",'`tarrif_id`='.$inputs['id']);		
				return true;
			}
	


	function getTariff(){
		$query	=	"SELECT * FROM `tarrif`";

		$rec		=	$this->fetchAll($query);
		return $rec;
	}

	function getAllTariffDetails()
	{
		$query = "SELECT * FROM tarrif where tarrif_stus=1";
		$rec = $this->fetchAll($query);
		return $rec;	
	}
	
}
?>