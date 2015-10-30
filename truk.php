<?php
	header ("Content-type: image/jpeg");
		$img = imagecreate (1100, 1100);
		// warna semua bangun
		$w1 = imagecolorallocate ($img, 227, 57, 9);
		$w2 = imagecolorallocate ($img, 0, 0, 0);
		$w3 = imagecolorallocate ($img, 255, 255, 255);
		$w4 = imagecolorallocate ($img, 149, 123, 45);
		$w5 = imagecolorallocate ($img, 175, 249, 157);
		$w6 = imagecolorallocate ($img, 204, 204, 153);

	imagefill($img, 0, 0, $w3); // warna backgroud belakang
	imagefilledrectangle($img, 150, 280, 700, 600, $w4); // bak truk

		// koordinat titik cap depan
		$coordinatex = array ();
		$coordinatex[0] = 1000; // x1
		$coordinatex[1] = 400; // y1
		$coordinatex[2] = 920; // x2
		$coordinatex[3] = 400; // y2
		$coordinatex[4] = 820; // x3
		$coordinatex[5] = 300; // y3
		$coordinatex[6] = 700; // x4
		$coordinatex[7] = 300; // y4
		$coordinatex[8] = 700; // x5
		$coordinatex[9] = 600; // y5
		$coordinatex[10] = 1000; // x6
		$coordinatex[11] = 600; // y6
	imagefilledpolygon($img, $coordinatex, 6, $w5); // warna buat cap depan truk

		$c = array ();
		$c[0] = 820; // x1
		$c[1] = 320; // y1
		$c[2] = 900; // x2
		$c[3] = 400; // y2
		$c[4] = 710; // x3
		$c[5] = 400; // y3
		$c[6] = 710; // x4
		$c[7] = 320; // y4

	imagefilledpolygon($img, $c, 4, $w2); // warna untuk jendela truk 
	imagefilledellipse($img, 1000, 560, 20, 75, $w6); // buat lampu depan
	//imagefilledrectangle($img, 300, 200, 100, 300, $w6); // untuk bemper belakang truk
	imagefilledellipse($img, 300, 600, 170, 170, $w2); // roda belakang
	imagefilledellipse($img, 800, 600, 170, 170, $w2); // roda depan
	imagejpeg($img);
?>