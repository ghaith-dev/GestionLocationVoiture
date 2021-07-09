<DOCTYPE HTML>
<html>
<head>

<style>
<?php
 require __DIR__ ."/ModifierStyle.css" ;
 ?>
</style>

<meta charset="utf-8"/>
</head>

 <body>   
<?php
require_once __DIR__ .( "\Header.php");
?>
<aside id="div1" >
<form id="form1"  method="post" action="/Location/index.php?Model=Location&Action=Modifier&id=<?php echo $param['id']?>">
    <fieldset id="field1">
        <legend style="font-size:20px;font-weight: 300;">Modifier Contrat</legend>
        
<table>

<tr>
<?php
foreach($retour as $contrat){
?>
<td>


<input  id="nom" type="textbox" name="duree"class="input" placeholder="Nom" value="<?=$contrat['Duree']?>"/>


</td>
<?php }?>
</tr>

<br>
<tr>
<td>
<select class="input" name="client">
<?php

foreach($retourc as $client){
?>
<option value="-1">Choisir Client</option>
<option value="<?=$client['IdClt']?>"><?php echo $client['Nom'].' '.$client['Prenom']?></option>
<?php }?>
</td>
</tr>

<tr>
<td>

<select  class="input" name="voiture">
<option value="-1">Choisir Voiture</option>
<?php
foreach($retourv as $Voiture){
?>

<option value="<?=$Voiture['Idvoit'].'.'.$Voiture['PrixParJour']?>">
<?php echo$Voiture['Marque'].$Voiture['Modele'].' '.$Voiture['Matricule'];?>
</option>
<?php }?>
</select>
</td>
</tr>

<tr>
<td>

<input  id="sub" type="submit" name="ajouter" value="Modifier" class="input"  />

</td>
</tr>
</table>

 
        </fieldset>
    </form>
	</body>
	</html>