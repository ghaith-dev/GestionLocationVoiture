<DOCTYPE HTML>
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
<form id="form1"  method="post" action="/Location/index.php?Model=Voiture&Action=Ajouter">
    <fieldset id="field1">
        <legend style="font-size:20px;font-weight: 300;">Ajouter Client</legend>
        
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

<input  id="nom" type="textbox"  name ="marque" class="input" placeholder="Marque" />
</td>
</tr>
<br>
<tr>
<td>

<input  id="prenom" type="textbox" name="modele" class="input" placeholder="Modele" />
</td>
</tr>

<tr>
<td>

<input  id="CIN" type="textbox" name="mtr" class="input" placeholder="Matricule" />
</td>
</tr>

<tr>
<td>

<input  id="adre" type="textbox" name="nbrvoit"class="input" placeholder="NbrVoiture"  />
</td>

</tr>

<tr>
<td>

<input  id="tel" type="textbox" name="prix" class="input"  placeholder="Prix Par Jour" />
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
           <legend style="font-size:20px;font-weight: 300;">Les Voitures</legend>
        <?php





           
    ?>

  <table id =tab1>
        <tr class=tab1>
            <th class=tab1>Marque</th>
            <th class=tab1>Modele</th>
            <th class=tab1>Matricule</th>
            <th class=tab1>NbrVoiture</th>
            <th class=tab1>Téléphone</th>
            <th class=tab1>Select</th>
        </tr>
        
           <?php 
		   
      foreach($retour as $voiture)
           {
      ?>
        <tr class=tab1>

        <td class=tab1> <?php  echo $voiture['Marque']?></td>
            <td class=tab1><?php  echo $voiture['Modele']?></td>
            <td class=tab1><?php  echo $voiture['Matricule']?></td>
            <td class=tab1><?php  echo $voiture['NbrVoiture']?></td>
            <td class=tab1><?php  echo $voiture['PrixParJour']?></td>
            <td class=tab1>
            
            <input type="radio" name="select" value="<?php  echo $voiture['Idvoit']?>">
            
        
            </td>
            
   
        </tr>
          <?php 
           }
      ?>
       </table>
  
       
     
        



     
     <input type="submit" id="btn" name="ModifierClient" value="Modifier" formaction="/Location/index.php?Model=Voiture&Action=Modifier">
	 
           <input type="submit" id="btn" name="SupprimerClient" value="Supprimer" formaction="/Location/index.php?Model=Voiture&Action=Supprimer" >  

           
     </fieldset>
           </form>
    </section>
  
    </body>
    </html>