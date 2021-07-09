<?xml version="1.0" encoding="utf-8"?>

<?php
foreach($retour as $contrat){
	
?>
<contrat id="<?=$contrat['IdLoc']?>">
<Nom><?=$contrat['Nom']?></Nom>
<Prenom><?=$contrat['Prenom']?></Prenom>
<Voiture idvoit="<?=$contrat['Idvoit']?>">
<Modele><?=$contrat['Marque']?></Modele>
<Matricule><?=$contrat['Matricule']?></Matricule>
</Voiture>
<Duree><?=$contrat['Duree']?></Duree>
<Prix><?=$contrat['Prix']?></Prix>
</contrat>
<?php }?>