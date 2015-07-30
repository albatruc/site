<html>

<head>
  <title>Association</title>
  <meta charset:"utf-8">
  <link rel="stylesheet" type="text/css" href="CSS/CSS.css">

  <script type="text/javascript">
  function redirectMe(id){
    if (confirm("voulez-vous supprimer l'Adherent avec ID"+id)){
      window.location = 'adherent.php?action=supprimer&id='+id;
    }
  }
  </script>

</head>

<body>
<div id="fond">
  <header>

   <?php

   $date = date("d-m-Y H:i:s");
   echo "<p>nous sommes le ". $date ."</p>";
   ?>

    <NAV>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="adherents.php">Adhérant</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </NAV>
  </header>

