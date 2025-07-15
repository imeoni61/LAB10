<?php
header("Content-Type: image/png");

$image = imagecreate(300, 100);
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Add text
imagestring($image, 5, 70, 40, "100 Items Sold", $black);

imagepng($image);
imagedestroy($image);
?>
