<?php
// koordinas

$values = array(
            260,  20,  // Point 1 (x, y)
            50,  220, // Point 2 (x, y)
            470,  220  // Point 3 (x, y)
            );//atap

// create image
$image = imagecreatetruecolor(600, 600);

//warna
$black = imagecolorallocate($image, 0, 0, 0);
$brown = imagecolorallocate($image, 165, 42, 42);
$white = imagecolorallocate($image, 255, 255, 255);
$blue = imagecolorallocate($image, 0, 0, 255);
$green = imagecolorallocate($image, 0, 255, 0);
//corong asap
imagefilledrectangle($image, 320, 50, 380, 200, $white);

// atap
imagefilledpolygon($image, $values, 3, $blue);

//dinding
imagefilledrectangle($image, 50, 220, 470, 500, $green);

//jendela
imagefilledrectangle($image, 90, 240, 240, 410, $black);//border
imagefilledrectangle($image, 100, 250, 230, 400, $white);
imagefilledrectangle($image, 90, 325, 240, 335, $black);

//pintu
imagefilledrectangle($image, 300, 250, 450, 500, $black);//border
imagefilledrectangle($image, 310, 260, 440, 500, $brown);//pintu
imagefilledrectangle($image, 420, 360, 430, 380, $black);//gagang
// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>