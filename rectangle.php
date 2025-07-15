<?php
header("Content-Type: image/png");

$image = imagecreate(300, 150);
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Draw red rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add label
imagestring($image, 5, 120, 70, "Sale!", $black);

imagepng($image);
imagedestroy($image);
?>
