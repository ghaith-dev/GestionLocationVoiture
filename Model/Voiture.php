<?php
require_once __DIR__ ."/database.php";
class Voiture extends database{
	
	
	public function Afficher (){
		
		           
$sql="SELECT * FROM voiture ";
         
		   return  $this->query($sql);
	}
	public function Ajouter($param){
		
		   
		   $sql="INSERT INTO voiture (Marque,Modele,Matricule,NbrVoiture,PrixParJour) VALUES(:marque,:modele,:matricule,:nbrvoiture,:prixparjour)";
		
		return  $this->query($sql,$param);
	}
	
	public function Supprimer($param){
		
		$sql="DELETE FROM voiture WHERE Idvoit=:id";
		
				   return $this->query($sql,$param);

		
	}
	public function Modifier($param){
		$sql="UPDATE  Voiture SET Marque=:marque,Modele=:modele,Matricule=:matricule,NbrVoiture=:nbrvoiture,PrixParJour=:prixparjour WHERE Idvoit=:id";
		
				   return $this->query($sql,$param);
	}
		public function GetInfo($param){
			$id=$param['id'];
		$sql="SELECT * FROM voiture WHERE Idvoit=$id";
		
				   return $this->query($sql);
				   
	}
	
	
	
}
	
	


?>