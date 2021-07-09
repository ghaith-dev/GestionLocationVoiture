<?php
require_once __DIR__ ."/database.php";
class Location extends database{
	
	
	public function Afficher (){
		
		           
$sql="SELECT * FROM location l , client  c ,voiture  v WHERE l.IdClt=c.IdClt AND l.Idvoit=v.Idvoit ";
         
		   return  $this->query($sql);
	}
	public function Ajouter($param){
		
		   
		   $sql="INSERT INTO location (Duree,Prix,Date,IdClt,Idvoit) VALUES(:duree,:prix,:date,:idclt,:idvoit)";
		
		return  $this->query($sql,$param);
	}
	
	public function Supprimer($param){
		
		$sql="DELETE FROM Location WHERE Idvoit=:id";
		
				   return $this->query($sql,$param);

		
	}
	public function Modifier($param){
		$sql="UPDATE  Location SET Duree=:duree,Prix=:prix,Date=:date,IdClt=:idclt,Idvoit=:idvoit WHERE IdLoc=:id";
		
				   return $this->query($sql,$param);
	}
		public function GetInfo($param){
			$id=$param['id'];
		$sql="SELECT * FROM location WHERE IdLoc=$id";
		
				   return $this->query($sql);
				   
	}
	
	public function GetClient(){
			
		$sql="SELECT * FROM Client ";
		
				   return $this->query($sql);
	
}
public function GetVoiture(){
		
		$sql="SELECT * FROM Voiture ";
		
				   return $this->query($sql);
	
}
public function getContrat ($param){
		
		          $id=$param['id'];
$sql="SELECT * FROM location l , client  c ,voiture  v WHERE l.IdLoc=$id ";
         
		   return  $this->query($sql);
	}
}


?>