<?php
    //Si une categorie a ete chosis
    if (isset($_GET['categorie']))
    {
        $selection = (int)$_GET['categorie'];
    }
    else
        $selection = 0;
        
    //Appel du model
    require_once(PATH_MODELS.$page.'.php');
    $nbrSelection = count($resultat);
    
    //Fonction selection
    require_once(PATH_LIB.'foncBase.php');

    //Appel de la vue
    require_once(PATH_VIEWS.$page.'.php'); 