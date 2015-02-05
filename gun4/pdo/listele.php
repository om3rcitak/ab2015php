<?php
require "baglan.php";

$sorgu = $db->prepare("Select * from kisiler");
$sorgu->execute();

$kisiler = $sorgu->fetchAll();

// var_dump($kisiler);

echo '
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Yaşı</td>
			<td>Cinsiyeti</td>
			<td>Adı</td>
			<td>Soyadı</td>
			<td>Şehri</td>
			<td>Düzenle</td>
			<td>Sil</td>
		</tr>
';

foreach($kisiler AS $kisi){
	$sorgu2 = $db->prepare("Select * from iller WHERE id = ? ");
	$sorgu2->execute(array($kisi[5]));
	$il = $sorgu2->fetch();
	// var_dump($il);
	echo "
			<tr>
				<td>$kisi[0]</td>
				<td>$kisi[1]</td>
				<td>$kisi[2]</td>
				<td>$kisi[3]</td>
				<td>$kisi[4]</td>
				<td>
				$il[ilinadi]
				</td>
				<td>
				<a href='duzenle.php?id=$kisi[0]'>düzenlemek için tıklayın</a>
				</td>
				<td>
				<a href='sil.php?id=$kisi[0]'>silmek için tıklayın</a>
				</td>
			</tr>
	";
}

echo "</table>";

$db = null;
?>