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
<form id="form1"  method="post" action="/Location/index.php?Model=Voiture&Action=Modifier&id=<?php echo $param['id']?>">
    <fieldset id="field1">
        <legend style="font-size:20px;font-weight: 300;">Modifier Client</legend>
        
<table>

<tr>
<td>
<?php
foreach($retour as $voiture){

?>

<input  id="nom" type="textbox"  name ="marque" class="input" placeholder="Nom"  value="<?php echo $voiture['Marque']; ?>"/>
</td>
</tr>
<br>
<tr>
<td>

<input  id="prenom" type="text" name="modele" class="input" placeholder="Prénom" value="<?php echo $voiture['Modele']; ?>" />
</td>
</tr>

<tr>
<td>

<input  id="CIN" type="textbox" name="mtr" class="input" placeholder="N° CIN"  value="<?php echo $voiture['Matricule']; ?>"/>
</td>
</tr>

<tr>
<td>

<input  id="adre" type="textbox" name="nbrvoit"class="input" placeholder="Adresse" value="<?php echo $voiture['NbrVoiture']; ?>"  />
</td>

</tr>

<tr>
<td>

<input  id="tel" type="textbox" name="prix" class="input"  placeholder="Téléphone" value="<?php echo $voiture['PrixParJour']; ?>" "/>
</td>
</tr>

<tr>
<td>
<?php }?>
<input  id="sub" type="submit" name="ajouter" value="Modifier" class="input"  />

</td>
</tr>
</table>

 
        </fieldset>
    </form>
	</body>
	</html>