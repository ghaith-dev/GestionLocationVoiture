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
<form id="form1"  method="post" action="/Location/index.php?Model=Client&Action=Ajouter">
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

<input  id="nom" type="textbox"  name ="nom" class="input" placeholder="Nom" "/>
</td>
</tr>
<br>
<tr>
<td>

<input  id="prenom" type="textbox" name="prenom" class="input" placeholder="Prénom" "/>
</td>
</tr>

<tr>
<td>

<input  id="CIN" type="textbox" name="cin" class="input" placeholder="N° CIN" "/>
</td>
</tr>

<tr>
<td>

<input  id="adre" type="textbox" name="addr"class="input" placeholder="Adresse" " />
</td>

</tr>

<tr>
<td>

<input  id="tel" type="textbox" name="tel" class="input"  placeholder="Téléphone" "/>
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
           <legend style="font-size:20px;font-weight: 300;">Les Clients</legend>
        <?php





           
    ?>

  <table id =tab1>
        <tr class=tab1>
            <th class=tab1>Nom</th>
            <th class=tab1>Prenom</th>
            <th class=tab1>CIN</th>
            <th class=tab1>Adresse</th>
            <th class=tab1>Téléphone</th>
            <th class=tab1>Select</th>
        </tr>
        
           <?php 
		   
      foreach($Clients as $client)
           {
      ?>
        <tr class=tab1>
        <td class=tab1> <?php  echo $client['Nom']?></td>
            <td class=tab1><?php  echo $client['Prenom']?></td>
            <td class=tab1><?php  echo $client['CIN']?></td>
            <td class=tab1><?php  echo $client['Adresse']?></td>
            <td class=tab1><?php  echo $client['Telephone']?></td>
            <td class=tab1>
            
            <input type="radio" name="select" value="<?php  echo $client['IdClt']?>">
            
        
            </td>
            
   
        </tr>
          <?php 
           }
      ?>
       </table>
  
       
     
        



     
     <input type="submit" id="btn" name="ModifierClient" value="Modifier" formaction="/Location/index.php?Model=Client&Action=Modifier">
	 
           <input type="submit" id="btn" name="SupprimerClient" value="Supprimer" formaction="/Location/index.php?Model=Client&Action=Supprimer" >  

           
     </fieldset>
           </form>
    </section>
  
    </body>
    </html>