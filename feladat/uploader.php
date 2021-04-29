<?php

$target_dir = "feltoltottkepek/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Ez a fajl egy kep - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Ez a fajl nem egy kep.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Ez a file mar letezik.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpeg") {
  echo "Csak JPG, JPEG, PNG vagy GIF fajl toltheto fel.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "A fajl nem toltodott fel.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " feltoltes sikeres.";
  } else {
    echo "Feltoltes kozbeni hiba.";
  }
}
header('Location: '."http://localhost/feladat/?oldal=galeria");
?>