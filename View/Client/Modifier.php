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
<form id="form1"  method="post" action="/Location/index.php?Model=Client&Action=Modifier&id=<?php echo $param['id']?>">
    <fieldset id="field1">
        <legend style="font-size:20px;font-weight: 300;">Modifier Client</legend>
        
<table>

<tr>
<td>
<?php
foreach($retour as $client){

?>

<input  id="nom" type="textbox"  name ="nom" class="input" placeholder="Nom"  value="<?php echo $client['Nom']; ?>"/>
</td>
</tr>
<br>
<tr>
<td>

<input  id="prenom" type="text" name="prenom" class="input" placeholder="Prénom" value="<?php echo $client['Prenom']; ?>" "/>
</td>
</tr>

<tr>
<td>

<input  id="CIN" type="textbox" name="cin" class="input" placeholder="N° CIN"  value="<?php echo $client['CIN']; ?>""/>
</td>
</tr>

<tr>
<td>

<input  id="adre" type="textbox" name="addr"class="input" placeholder="Adresse" value="<?php echo $client['Adresse']; ?>" " />
</td>

</tr>

<tr>
<td>

<input  id="tel" type="textbox" name="tel" class="input"  placeholder="Téléphone" value="<?php echo $client['Telephone']; ?>" "/>
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