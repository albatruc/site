<?php
  require('includes/config.inc.php');
  include('includes/header.inc.php');
  include('includes/fonction.inc.php');
?>

<?php

// gérer les actions voir, modifier, supprimer

if(isset($_GET['action'])){
   // Si l'action est égale à voir

  switch($_GET['action']){

    case 'voir':
    if (!empty($_GET["id"]) && is_numeric($_GET["id"])){ // si j'ai un ID valide dans l'url sous forme numérique et non vide
          $id = str_replace(" ", "", $_GET["id"]);
          // id de l'adherent à afficher sur la page adherent.php , formaté avec supression des espace dans la valeur de l'id
          showAdherent($id , $conn);
          }
          break;

   case 'modifier':
    if (!empty($_GET["id"]) && is_numeric($_GET["id"])){ // si j'ai un ID valide dans l'url sous forme numérique et non vide
          $id = str_replace(" ", "", $_GET["id"]);
          // id de l'adherent à afficher sur la page adherent.php , formaté avec supression des espace dans la valeur de l'id
          updateAdherent($id , $conn);
          }
        break;

     case 'supprimer':
    if (!empty($_GET["id"]) && is_numeric($_GET["id"])){ // si j'ai un ID valide dans l'url sous forme numérique et non vide

          $id = str_replace(" ", "", $_GET["id"]);
          // id de l'adherent à afficher sur la page adherent.php , formaté avec supression des espace dans la valeur de l'id
          delateAdherent($id , $conn);
          }
      break;
    }
}
?>

<?php  include('includes/footer.inc.php'); ?>

