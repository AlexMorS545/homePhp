<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery Photo</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1 class="title">Наша галерея фото</h1>
  <div class="image-wrp">
    <?php
    include "modules/config.php";
		include "modules/server.php";
    for ($i = 0; $i < count($files); $i++):?>
      <a href="full_image.php?img=<?= $files[$i]?>" class="img-link">
        <img width="300" height="270" class="photo" src="<?=IMAGE_SMALL.'/'.$files[$i]?>" alt="photo travel">
      </a>
    <?php endfor;?>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <h3>Вы можете загрузить свои фото</h3>
    <input type="file" accept="image/*" name="photo">
    <button type="submit" name="send">Загрузить</button><br>
		<span><?= $message?></span>
  </form>
</body>
</html>
