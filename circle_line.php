<?php
header("Content-Type: image/png");

$image = imagecreate(300, 200);
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 128, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Draw circle
imageellipse($image, 150, 100, 100, 100, $green);

// Draw line
imageline($image, 50, 50, 250, 150, $purple);

imagepng($image);
imagedestroy($image);
?>
