<?php
	include "modules/config.php";
?>
<link rel="stylesheet" href="css/style.css">
<h1>Полное изображение</h1>
<a class="back-link" href="<?= $_SERVER['HTTP_REFERER']?>">Вернуться на главную</a>
<div class="img-wrp">
  <img src="<?= IMAGE.'/'.$_GET['img']?>" alt="full photo" class="full-img">
</div>