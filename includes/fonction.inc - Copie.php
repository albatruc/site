<?php

function formatDatas($id, $civilite, $nom, $prenom, $date, $email, $activite){
  if ($activite =="0"){
    return false;
  }else {
  return $id.";".$civilite.";".$nom.";".$prenom.";".$date.";".$email.";".$activite;
  }
}

function returnLastId($filename){

  $rows = file($filename); // resultat sous forme de tableau indéxés
  $last = $rows[count($rows)-1]; // end($last) fonction qui renvoit au dernier élément d'un tableau
  $elements = explode(";", $last); // donne un tableau indexé qui tous les éléments délimité par ;
  return $elements[0];
  };

function validMail ($email){
$part1 = strstr($email, "@");
$part2 = strstr($email, "@", true);

if (!empty($part1) and !empty($part2) and !strpos($part1, "@") and !strpos($part2 , "@")){
    return true;
  } else {
    return false;
  }
}

function calculAge($date){ // argument $date au format "yyyy-mm-dd"

$timestamp = strtotime($date); // en seconde
return ceil((time() - $timestamp) / (60 * 60 * 24 * 365)); //calcul de l'age en arrondit
}

function listingAdherents($filename){
  $output="";
  $rows= file($filename); // resultat sous forme de tableau indéxé
    foreach($rows as $rows){
    $elements = explode(";", $rows); // subdivise la chaine de caractere en plusieurs élémentsstocké dans un tb indx
    if (count($elements) === 7){
      $output .= "<tr>
                      <td>".$elements[1]."</td>
                      <td>".$elements[2]."</td>
                      <td>".$elements[3]."</td>
                      <td>".calculAge($elements[4])."</td>
                      <td>".$elements[5]."</td>
                      <td>".$elements[6]."</td>
                      <tr>";
    }
    }
    return $output;
}


function formatHTML($content, $lien){
  $content = str_replace('{lien}', $lien, $content); // fonction qui remplace mon tag {lien} par la valeur de $lien
  return $content;
}

function listingFichier($dir = null){
chdir($dir);
$files = glob("*.html"); // récupere tous les fichiers .html dans le répertoire en cours
foreach ($files as $files) { //boucle sur tous les fichiers
    $lien = "pages.php?page=".substr($files, 0 , strlen($files)-5);// je créé un lien dynamiquement avec substr et sublen
    $content = file_get_contents(__dir__."/$dir/".$files); // __dir__ chemin absolu
    $content = formatHTML($content, $lien);// j'obtiens ds valeurs == aux différents liens dans les pages
    echo $content; // affiche le contenu de la page
    }
};
