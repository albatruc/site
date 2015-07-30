<?php  include('includes/header.inc.php');
?>


<form action="" method="POST">
  <fieldset>
    <legend> Contact </legend>

  <label>Civilité</label><br>
  <select name="civilite">
    <option value="0">choisissez</option>
      <option value="1">M.</option>
      <option value="2">Mme</option>
      <option value="3">Mlle</option>
  </select>
  <br> <br>

  <label> nom : </label><br>
  <input type="text" name="nom">
  <br> <br>

  <label> prenom: </label><br>
  <input type="text" name="prenom">
  <br> <br>

  <label> email : </label><br>
  <input type="text" id="email" name="email">
  <br> <br>

  <label> sujet : </label><br>
  <textarea name="subjet"></textarea>
  <br> <br>


    <input type="submit" name="submit" value="Envoyer">
</fieldset>
</form>

<?php

if(isset($_POST["submit"])){
  if (($_POST["civilite"] !== "0") and !empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["subjet"])){

    $to = "admin@monassoc.fr";
    $civilite = $_POST["civilite"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $subjet = $_POST["subjet"];
    $message = "vous avez reçu un mail de : "."\n";

     if ($civilite == "1"){
      $message .= "M. $nom $prenom ";

          } else if ($civilite == "2") {
            $message .= "Mme $nom $prenom ";

              }else {
                $message .= "Mlle $nom $prenom ";
              }

    $message .= "avec le message suivant : $subjet";

    mail($to, "message de contact", $message);

    echo $message;

    } else {
      echo "vous devez renseignez les éléments obligatoires";
    }
}

?>



<?php  include('includes/footer.inc.php'); ?>
