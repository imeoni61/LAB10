<?php
header("Content-Type: image/png");

$image = imagecreatetruecolor(400, 100);
$gray = imagecolorallocate($image, 211, 211, 211);
$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $gray);

// Path to your font file
$font = __DIR__ . "/arial.ttf";  // Make sure arial.ttf is in the same folder

// Add text using TTF
imagettftext($image, 20, 0, 50, 60, $black, $font, "Hello, User!");

imagepng($image);
imagedestroy($image);
?>
