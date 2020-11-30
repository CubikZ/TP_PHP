<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_PHOTO_TOUS ?></h1>
<!--Recuperation des données de la photo choisi-->
<?php
    $p = $resultat[0]
?>

<div id="photoBlock">
    <p><img src="<?= PATH_IMAGES.$p['nomFich'] ?>" alt="<?= $p['description'] ?>"/></p>
    <table class="table table-bordered">
        <tr>
            <td>Description</td>
            <td><?=$p['description']?></td>
        </tr>
        <tr>
            <td>Nom du fichier</td>
            <td><?=$p['nomFich']?></td>
        </tr>
        <tr>
            <td>Catégorie</td>
            <td> <a title="<?=$p['nomFich']?>" href="index.php?&categorie=<?=$p['catId']?>"> <?=$p['nomCat']?> </a></td> 
        </tr>
    </table>
</div>
<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
