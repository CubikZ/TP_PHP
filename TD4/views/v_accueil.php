<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
    <!--Selection Alert-->
    <div class="alert alert-success">
        <strong><?= "$nbrSelection Photo(s) selectionnée(s)"?></strong>
    </div>
    <!--Selection Formulaire-->
    <div>
        <form action="index.php" method="get">
        <label> Quelles photos souhaitez-vous afficher ?
            <select name="categorie" >
                <?php selectionDefaut($selection,$listeSelection)?>
            </select>
        </label>
        <input type="submit" value="Valider">
        </form>
    </div>
    <!--Selection Titre-->
    <?php
        $titre = "Les photos de la catégorie ";
        if($selection != 0)
        {
            foreach($listeSelection as $k => $v)
            {
                if($k == $selection)
                {
                    //Concaténation
                    $titre .= $v;
                break;
                }
            }
        }  
        else
            $titre="Toutes les photos";
        
        
    ?>
    <h1><?= $titre?></h1>
<!--Affichage photos -->
<?php
    foreach($resultat as $p)
    {
        ?> 
        <a title="<?=$p['nomFich']?>" href="index.php?page=photo&id=<?=$p['photoId']?>">
            <img src="<?= PATH_IMAGES.$p['nomFich'] ?>" alt="<?= $p['description'] ?>"/>
        </a>
        <?php
    }
?>
<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
