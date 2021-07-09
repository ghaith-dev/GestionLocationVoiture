<?php
require_once __DIR__ .( "/database.php");

class Client extends database{
	
	public function Afficher (){
		
		           
$sql="SELECT * FROM Client ";
         
		   return  $this->query($sql);
	}
	public function Ajouter($param){
		
		   
		   $sql="INSERT INTO client (Nom,Prenom,CIN,Adresse,Telephone) VALUES(:nom,:prenom,:cin,:adresse,:telephone)";
		
		return  $this->query($sql,$param);
	}
	
	public function Supprimer($param){
		
		$sql="DELETE FROM client WHERE IdClt=:id";
		
				   return $this->query($sql,$param);

		
	}
	public function Modifier($param){
		$sql="UPDATE  client SET Nom=:nom,Prenom=:prenom,CIN=:cin,Adresse=:adresse,Telephone=:telephone WHERE IdClt=:id";
		
				   return $this->query($sql,$param);
	}
		public function GetInfo($param){
			$id=$param['id'];
		$sql="SELECT * FROM Client WHERE IdClt=$id";
		
				   return $this->query($sql);
				   
	}
	
	
	
}

?>