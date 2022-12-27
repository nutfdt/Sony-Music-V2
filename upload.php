<?php
$today = date("Ymd"); 
$target_dir="images/artiste/";
$targetfile = $target_dir . basename( $today."_".$_POST['images']['name']);
echo ($targetfile);
$uploadOk = 1;
$imagesFileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
// Check Si l'images est une images ou un fake
 
  $check = getimagessize($_FILES["images"]["tmp_name"]);
  if($check !== false) {
    echo "Le fichier est une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Le fichier n'est pas une image";
    $uploadOk = 0;
  }


 //Taille autorisé
if ($_FILES["images"]["size"] > 500000) {
  echo "Désolé votre image est trop grande";
  $uploadOk = 0;
}


// Check Si $uploadOk mettre 0 si en erreur
if ($uploadOk == 0) {
  echo "Désolé,votre fichier n'a pas été chargé";
// Si tout est bon on essaye de charger l'images
} else {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $targetfile)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
  } else {
    echo "Désolé,il y a eu un probléme pour enregistrer votre image.";
  }
}
echo($targetfile);
?>