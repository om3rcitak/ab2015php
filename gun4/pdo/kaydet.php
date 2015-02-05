<?php
require "baglan.php";

$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$yas = $_POST['yas'];
$cinsiyet = $_POST['cinsiyet'];
$sehir = $_POST['sehir'];

//$db->quote();

echo $ad;
echo "<br />";

if(empty($ad)){
	echo "hata! ad boş olamaz";
	die();
}

if(empty($soyad)){
	echo "hata! soyad boş olamaz";
	die();
}

$sorgu = $db->prepare("INSERT INTO kisiler VALUES (?, ?, ?, ?, ?, ?)");
$sorgu->execute(
	array(
		NULL,
		$yas,
		$cinsiyet,
		$ad,
		$soyad,
		$sehir
	)
);

$hatalar = $sorgu->errorInfo();

if(empty($hatalar[2])){
	echo "basariyla eklendi";
}else{
	echo "hatan var! $hatalar[2]";
}


// echo "<pre>";
// var_dump($sorgu->errorInfo());
// echo "</pre>";

$db = null;

?>
