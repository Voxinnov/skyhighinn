<?php

class RecordDelete extends MySql{
		


			function deleteTestimonial($id){
				$query="SELECT * FROM `testi` WHERE `testi_id`='".$id."'";
					$rec=$this->fetchAll($query);
					
					
					$this->delete('testi','`testi_id`='.$id);
					
					
				
			}

			function deleteNearest($id){
				$query="SELECT * FROM `nrst_plce` WHERE `nr_id`='".$id."'";
					$rec=$this->fetchAll($query);
					
					
					$this->delete('nrst_plce','`nr_id`='.$id);
					
					
				
			}
			private function removeFile($folder, $filename){
				if(empty($filename)) return;
				$paths = array(
					'upload/'.$folder.'/'.$filename,
					'sh_admin/upload/'.$folder.'/'.$filename,
					(defined('CONST_BASEDIR') ? CONST_BASEDIR.'/sh_admin/upload/'.$folder.'/'.$filename : '')
				);
				foreach($paths as $path){
					if(!empty($path) && file_exists($path)){
						@unlink($path);
						break;
					}
				}
			}

			function deleteSlider($id){
				$query="SELECT * FROM `sky_sldr` WHERE `sldr_id`='".$id."'";
				$rec=$this->fetchAll($query);
				if(!empty($rec[0]['sldr_img'])){
					$this->removeFile('slider', $rec[0]['sldr_img']);
				}
				$this->delete('sky_sldr','`sldr_id`='.$id);
			}

			function deleteGaltyp($id){
				$query="SELECT * FROM `galtyp` WHERE `galtyp_id`='".$id."'";
				$rec=$this->fetchAll($query);
				$this->delete('galtyp','`galtyp_id`='.$id);
			}

			function deleteGallery($id){
				$query="SELECT * FROM `gallery` WHERE `gal_id`='".$id."'";
				$rec=$this->fetchAll($query);
				if(!empty($rec[0]['gal_image'])){
					$this->removeFile('Gallery', $rec[0]['gal_image']);
				}
				$this->delete('gallery','`gal_id`='.$id);
			}

			function deleteAbtimg($id){
				$query="SELECT * FROM `abt_img` WHERE `abt_img_id`='".$id."'";
				$rec=$this->fetchAll($query);
				if(!empty($rec[0]['abt_img_image'])){
					$this->removeFile('About', $rec[0]['abt_img_image']);
				}
				$this->delete('abt_img','`abt_img_id`='.$id);
			}

			function deleteAcimg($id){
				$query="SELECT * FROM `acmdtn_img` WHERE `acmdtn_img_id`='".$id."'";
				$rec=$this->fetchAll($query);
				if(!empty($rec[0]['acmdtn_img_photo'])){
					$this->removeFile('Accomodation', $rec[0]['acmdtn_img_photo']);
				}
				$this->delete('acmdtn_img','`acmdtn_img_id`='.$id);
			}

			function deleteActivity($id){
				$query="SELECT * FROM `activity` WHERE `activity_id`='".$id."'";
				$rec=$this->fetchAll($query);
				if(!empty($rec[0]['activity_img'])){
					$this->removeFile('Activity', $rec[0]['activity_img']);
				}
				$this->delete('activity','`activity_id`='.$id);
			}

}