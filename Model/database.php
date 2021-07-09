<?php
class database{
	public $cnx;
	 public function __construct(){
		 $this->cnx= new PDO("mysql:host=127.0.0.1;dbname=location","root","");
	 }
	public function query($sql, $param=array()){
		if(count($param)==0){
			
			$retour=$this->cnx->query($sql);
			return $retour->fetchAll();
			
		}else{
			$statment=$this->cnx->prepare($sql);
			$retourn=$statment->execute($param);
			return $retourn;
		}
	}
}

?>