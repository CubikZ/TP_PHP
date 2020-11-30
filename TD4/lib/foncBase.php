<?php
//Pour les alertes
function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'query' :
      $alert['messageAlert'] = ERREUR_QUERY;
      break;
    case 'url_non_valide' :
      $alert['messageAlert'] = TEXTE_PAGE_404;
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}

//Pour la selection par défaut
function selectionDefaut($selection,$listeSelection)
{
  
  // Parcourt de la liste k=clé v=valeur
  //Donnée selectionné en 1er
  foreach ($listeSelection as $k=>$v)
  {
    if($k == $selection)
    {
        ?>
        <option value="<?=$k?>"> <?=$v?> </option>
        <?php
    break;
    }
  }
  //La suite
  foreach ($listeSelection as $k=>$v)
  {
    if($k != $selection)
    {
        ?>
        <option value="<?=$k?>"> <?=$v?> </option>
        <?php
    }
  }
}
