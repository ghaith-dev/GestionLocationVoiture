<!DOCTYPE HTML>
<html>
<head>

<style>
<?php
 require __DIR__ ."/Style.css" ;
 ?>
</style>

<meta charset="utf-8"/>
</head>

 <body>   
<?php
require_once __DIR__ .( "\Header.php");
?>
<aside id="div1" >
<form id="form1"  method="post" action="/Location/index.php?Model=Location&Action=Ajouter">
    <fieldset id="field1">
        <legend style="font-size:20px;font-weight: 300;">Ajouter Contrat</legend>
        
<table>
<?php 
if(isset($_GET['Msg'])){
$Msg=$_GET['Msg'];}else{
	$Msg="ok";
}
if($Msg=="erreur"){?>
<H2 class="erreur" > Erreur d'insertion</H3>
<?php }else{
	if($Msg=="erreurm"){?>
	<H2 class="erreur" > Erreur de Modification </H3>
	<?php
	}
} ?>
<tr>
<td>

<input  id="nom" type="textbox"  name ="duree" class="input" placeholder="Durée" />
</td>
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
</select>

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

<input  id="sub" type="submit" name="ajouter" value="Ajouter" class="input" />

</td>
</tr>
</table>

 
        </fieldset>
    </form>
    

    </aside>
   <section id="sec1">
       <form method="post">
       <fieldset id="field2">
           <legend style="font-size:20px;font-weight: 300;">Les Contrats</legend>
   

  <table id =tab1>
        <tr class=tab1>
            <th class=tab1>Durée</th>
            <th class=tab1>Prix</th>
            <th class=tab1>Date</th>
            <th class=tab1>Client</th>
            <th class=tab1>Voiture</th>
            <th class=tab1>Select</th>
        </tr>
        
           <?php 
		   
      foreach($retour as $Contrat)
           {
      ?>
        <tr class=tab1>

        <td class=tab1> <?php  echo $Contrat['Duree']." Jours"?></td>
            <td class=tab1><?php  echo $Contrat['Prix']." DT"?></td>
            <td class=tab1><?php  echo $Contrat['Prix']." "?></td>
            <td class=tab1><?php  echo $Contrat['Date']?></td>
            <td class=tab1><?php  echo $Contrat['Nom'].' '.$Contrat['Prenom']?></td>
            <td class=tab1><?php  echo $Contrat['Matricule']?></td>
            <td class=tab1>
            
            <input type="radio" name="select" value="<?php  echo $Contrat['IdLoc']?>">
            
        
            </td>
            
   
        </tr>
          <?php 
           }
      ?>
       </table>
  
       
     
        



     
     <input type="submit" id="btn" name="ModifierClient" value="Modifier" formaction="/Location/index.php?Model=Location&Action=Modifier">
	 
           <input type="submit" id="btn" name="SupprimerClient" value="Supprimer" formaction="/Location/index.php?Model=Location&Action=Supprimer" >  
		   <input type="submit" id="btn" name="SupprimerClient" value="Imprimer Contrat" formaction="/Location/index.php?Model=Location&Action=Imp" >
		   <input type="submit" id="btn" name="SupprimerClient" value="Profit" formaction="/Location/index.php?Model=Location&Action=Supprimer" >

           
     </fieldset>
           </form>
    </section>
  
    </body>
    </html>