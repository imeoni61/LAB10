<?php
// Set the content type to PNG
header("Content-Type: image/png");

// Create image canvas
$image = imagecreate(400, 100);

// Background and text color
$blue = imagecolorallocate($image, 0, 0, 255); // Blue background
$white = imagecolorallocate($image, 255, 255, 255); // White text

// Write text
imagestring($image, 5, 50, 40, "Welcome to Our Shop!", $white);

// Output image
imagepng($image);
imagedestroy($image);
?>
