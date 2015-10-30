<?php
// Create a blank image
$image = imagecreate(1100, 500);

$add_y=100;

$x0=50;
$y0=50;

$panjang_jalan=900;
$lebar_jalan=100;




//------------------------------------//

//Awal inisialisasi poligon 1
$valueJalan1=array(
        $x0+50,$y0,
        $panjang_jalan+50,$y0,
        $panjang_jalan,$lebar_jalan,
        $x0,$lebar_jalan);

$valuePenutupJalan1=array(
		$panjang_jalan+50,50,
		$panjang_jalan+50,70,
		$panjang_jalan,$lebar_jalan+20,
		$panjang_jalan,$lebar_jalan);
//akhir inisialisasi ukuran poligon 1




//inisialisasi warna
$white = imagecolorallocate($image, 255, 255, 255);
$blue = imagecolorallocate($image, 0, 0,255);
$red=imagecolorallocate($image, 255,0, 0);
$green=imagecolorallocate($image, 0, 255,0);
$black=imagecolorallocate($image, 0, 0,0);
$gray=imagecolorallocate($image, 204, 204,204);
$gray_=imagecolorallocate($image, 204, 204,153);

//warna canvas
imagefill($image, 0, 0, $white);

//bidang jalan warna abu-abu

//imagefilltoborder($image, 50, 50, $border, $fill);

//-----------------------Jalan 1 ----------------------------------//
imagefilledpolygon($image,$valueJalan1,4,$gray);

//TROTOAR
$a=0; //variabel untuk nambah koordinat, pewarnaan
for ($i = 1; $i <= ($panjang_jalan/100); $i++) {
    imagefilledrectangle($image, $x0+$a, $lebar_jalan, $x0+50+$a, $lebar_jalan+20, $black);
	if($i!=($panjang_jalan/100)){
		imagefilledrectangle($image, $x0+50+$a, $lebar_jalan, $x0+100+$a, $lebar_jalan+20, $gray_);
	}
	$a=$a+100;
}

//PENUTUP JALAN
imagefilledpolygon($image,$valuePenutupJalan1,4,$black);

//-----------------------Jalan 1 ----------------------------------//

//---------------------------------Truk 1
		$w1 = imagecolorallocate ($image, 227, 57, 9);
		$w2 = imagecolorallocate ($image, 0, 0, 0);
		$w3 = imagecolorallocate ($image, 255, 255, 255);
		$w4 = imagecolorallocate ($image, 149, 123, 45);
		$w5 = imagecolorallocate ($image, 175, 249, 157);
		$w6 = imagecolorallocate ($image, 204, 204, 153);
		$angkot=imagecolorallocate ($image, 0, 102, 0);

	imagefill($image, 0, 0, $w3); // warna backgroud belakang
	imagefilledrectangle($image, 200, 70, 550, 250, $angkot); // bak truk
http://localhost/gpc/test.php
		// koordinat titik cap depan
		$coordinatex = array ();
		$coordinatex[0] = 750; // x1
		$coordinatex[1] = 150; // y1
		$coordinatex[2] = 750; // x2
		$coordinatex[3] = 150; // y2
		$coordinatex[4] = 650; // x3
		$coordinatex[5] = 70; // y3
		$coordinatex[6] = 550; // x4
		$coordinatex[7] = 50; // y4
		$coordinatex[8] = 550; // x5
		$coordinatex[9] = 250; // y5
		$coordinatex[10] = 750; // x6
		$coordinatex[11] = 250; // y6
	imagefilledpolygon($image, $coordinatex, 6, $w5); // warna buat cap depan truk

		$c = array ();
		$c[0] = 650; // x1
		$c[1] = 90; // y1
		$c[2] = 725; // x2
		$c[3] = 150; // y2
		$c[4] = 570; // x3
		$c[5] = 150; // y3
		$c[6] = 570; // x4
		$c[7] = 90; // y4

	imagefilledpolygon($image, $c, 4, $w2); // warna untuk jendela truk 
	//imagefilledellipse($image, 1000, 560, 20, 75, $w6); // buat lampu depan
	//imagefilledrectangle($image, 300, 200, 100, 300, $w6); // untuk bemper belakang truk
	imagefilledellipse($image, 300, 250, 100, 100, $w2); // roda belakang
	imagefilledellipse($image, 650, 250, 100, 100, $w2); // roda depan
	imagestring($image,32,230,150,"Angkutan Kota - Cicaheum Cileunyi",$black);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>


