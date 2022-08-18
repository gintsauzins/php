<?php
$img = imagecreate(500, 300);
$bgcolor = imagecolorallocate($img, 150, 200, 180);
$fontcolor = imagecolorallocate($img, 120, 60, 200);
imagestring($img, 12, 150, 120, "Demo Text1", $fontcolor);
header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);