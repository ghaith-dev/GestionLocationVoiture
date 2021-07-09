<?php

if(isset($_GET['Model'])){
$Model=$_GET['Model'];}
else{
$Model="Client";}
if(isset($_GET['Action'])){
$Action=$_GET['Action'];}
else{
$Action="Afficher";}
if($Model=="Client"){
switch($Action){
case "Afficher":
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$Clients = $object->Afficher();
require_once __DIR__ . "/View/Client/$Model.php";

break;
case  "Ajouter":
require_once __DIR__ . "/XML/$Model.php";


$param=array(
'nom' =>$_POST['nom'],
'prenom' =>$_POST['prenom'],
'cin' =>$_POST['cin'],
 'adresse' =>$_POST['addr'],
'telephone' =>$_POST['tel']);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Ajouter($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Msg=erreur");
}


break;

case "Modifier":
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$param=array(
	'id' => $id,
	'nom' =>$_POST['nom'],
'prenom' =>$_POST['prenom'],
'cin' =>$_POST['cin'],
 'adresse' =>$_POST['addr'],
'telephone' =>$_POST['tel'] );
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Modifier($param);
if ($retour){
header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
	
	
}else{
	header("Location: ../Location/index.php?Msg=erreurm");

	
		
	
}
}else{
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->GetInfo($param);

require_once __DIR__ . "/View/Client/$Action.php";}
break;


/*---------------------------------------*/

case "Supprimer":
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Supprimer($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Msg=erreurs");
}
break;
}
/*------------------------------------------Voiture--------------------------------------------*/
}elseif($Model=="Voiture"){
	
switch($Action){
case "Afficher":
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Afficher();
require_once __DIR__ . "/View/$Model/$Model.php";

break;
case  "Ajouter":



$param=array(
'marque' =>$_POST['marque'],
'modele' =>$_POST['modele'],
'matricule' =>$_POST['mtr'],
 'nbrvoiture' =>$_POST['nbrvoit'],
'prixparjour' =>$_POST['prix']);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Ajouter($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher&Msg=erreur");
}


break;

case "Modifier":
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$param=array(
'id' =>$id,
'marque' =>$_POST['marque'],
'modele' =>$_POST['modele'],
'matricule' =>$_POST['mtr'],
 'nbrvoiture' =>$_POST['nbrvoit'],
'prixparjour' =>$_POST['prix']);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Modifier($param);
if ($retour){
header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
	
	
}else{
	//header("Location: ../Location/index.php?Model=$Model&Action=Afficher&Msg=erreurm");
echo $retour;
	
		
	
}
}else{
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->GetInfo($param);

require_once __DIR__ . "/View/$Model/$Action.php";}
break;


/*---------------------------------------*/

case "Supprimer":
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Supprimer($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Model=$Model&Action=Affiche&Msg=erreurs");
}
break;
}	
/*-----------------------------------------------------Location-----------------------------*/
}elseif($Model=="Location"){
	
	switch($Action){
case "Afficher":
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Afficher();
$retourv = $object->getVoiture();
$retourc = $object->getClient();
require_once __DIR__ . "/View/$Model/$Model.php";

break;
case  "Ajouter":

$id=explode(".",$_POST['voiture']);
$prix=$_POST['duree']*$id['1'];
$param=array(
'duree'=>$_POST['duree'],
'prix'=>$prix,
'date'=>date("d/m/Y"),
'idclt'=>$_POST['client'],
'idvoit'=>$id['0']

);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Ajouter($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher&Msg=erreur");

}


break;

case "Modifier":
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$data=explode(".",$_POST['voiture']);
$prix=$_POST['duree']*$data['1'];
$param=array(
'id'=>$id,
'duree'=>$_POST['duree'],
'prix'=>$prix,
'date'=>date("d/m/Y"),
'idclt'=>$_POST['client'],
'idvoit'=>$data['0']

);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Modifier($param);
if ($retour){
header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
	
	
}else{
header("Location: ../Location/index.php?Model=$Model&Action=Afficher&Msg=erreurm");
echo $retour;

	
		
	
}
}else{
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->GetInfo($param);
$retourc = $object->getClient($param);
$retourv = $object->getVoiture($param);
require_once __DIR__ . "/View/$Model/$Action.php";}
break;


/*---------------------------------------*/

case "Supprimer":
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->Supprimer($param);
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Model=$Model&Action=Affiche&Msg=erreurs");

}
break;
case "Imp":
$param=array(
'id' =>$_POST['select'],
);
require_once __DIR__ . "/Model/$Model.php";
$object = new $Model();
$retour = $object->getContrat ($param);
require_once __DIR__ . "/XML/Contratxml.php";
$xml=file_get_contents('http://127.0.0.1/Location/index.php?Model=Location&Action=Imp');
$retourx=SimpleXMLElement($xml);
require_once __DIR__ . "/View/Client/Contrat.php";
break;
case "ViewContrat":




$xml=file_get_contents();
if($retour){
	header("Location: ../Location/index.php?Model=$Model&Action=Afficher");
}else{
	header("Location: ../Location/index.php?Model=$Model&Action=Affiche&Msg=erreurs");

}
break;
}	
}
?>