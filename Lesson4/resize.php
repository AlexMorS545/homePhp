<?php

$image = "./images/travel2.jpg";

function resizeImage($image) {
  header("Content-Type: image/jpeg");

//  $percent = 0.5;

  list($width, $height) = getimagesize($image);

  $newWidth = 300; //$width * $percent;
  $newHeight = 270; //$height * $percent;

  $newImage = imagecreatetruecolor($newWidth, $newHeight);
  $source = imagecreatefromjpeg($image);

  imagecopyresized($newImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
  imagejpeg($newImage);
}

resizeImage($image);