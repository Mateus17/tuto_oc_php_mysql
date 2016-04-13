<?php
header ("Content-type: image/jpeg");
$image = imagecreatefromjpeg('couchersoleil.jpg');
imagejpeg($image); // 4 : on a fini de faire joujou, on demande à afficher l'image
?>