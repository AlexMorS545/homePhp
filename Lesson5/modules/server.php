<?php

function translited($string) {
  $newStr = transliterator_transliterate("Russian-Latin/BGN", $string);
  return str_replace(" ", "_", $newStr);
}

function changeImage($h, $w, $src, $newsrc, $type) {
  $newimg = imagecreatetruecolor($h, $w);
  switch ($type) {
    case 'jpeg':
      $img = imagecreatefromjpeg($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagejpeg($newimg, $newsrc);
      break;
    case 'png':
      $img = imagecreatefrompng($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagepng($newimg, $newsrc);
      break;
    case 'gif':
      $img = imagecreatefromgif($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagegif($newimg, $newsrc);
      break;
  }
}

if (isset($_POST['send'])) {
  if($_FILES['photo']['error']) {
    $message = 'Ошибка загрузки!';
  } elseif ($_FILES['photo']['size'] >= 10000000) {
      $message = 'Максимальный размер файла 10 мб';
  } elseif ($_FILES['photo']['type'] == 'image/jpeg'||
            $_FILES['photo']['type'] == 'image/png' ||
            $_FILES['photo']['type'] == 'image/gif') {
    $salt = date("YmdHis");
    if (copy($_FILES['photo']['tmp_name'], IMAGE.'/'.translited($_FILES['photo']['name']."_$salt"))) {
        $path = IMAGE_SMALL.'/'.translited($_FILES['photo']['name']."_$salt");
        $type = explode('/', $_FILES['photo']['type'])[1];
        changeImage(300, 270, $_FILES['photo']['tmp_name'], $path, $type);
    } else {
      $message = 'Ошибка загрузки файла!';
    }
  } else {
    $message = 'Не правильный тип файла!';
  }
}
$files = array_slice(scandir(IMAGE_SMALL), 2);
