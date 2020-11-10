<?php
$salt = date("YmdHis");
$path = "images/".$_FILES['photo']['name']."_$salt";
$file = move_uploaded_file($_FILES['photo']['tmp_name'], $path);
  if($file) {
    header("Location: images.php");
  }

