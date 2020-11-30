<?php
    //Récupération de l'id de la photo choisi
    if(isset($_GET['id']))
    {
        $idPhoto = (int)$_GET['id'] ;
    }
    //Appel du model
    require_once(PATH_MODELS.$page.'.php');
    
    //Appel de la vue
    require_once(PATH_VIEWS.$page.'.php'); 