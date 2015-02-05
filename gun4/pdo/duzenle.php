<?php

require "baglan.php";

$id = $_GET["id"];

if(isset($_POST["ad"])){
	$guncelle = $db->prepare("UPDATE kisiler SET yas = ?, cinsiyet = ?, ad = ?, soyad = ?, il = ? WHERE id = ?");
	$guncelle->execute(
		array(
			$_POST["yas"],
			$_POST["cinsiyet"],
			$_POST["ad"],
			$_POST["soyad"],
			$_POST["sehir"],
			$id
		)
	);
	
	$hatalar = $guncelle->errorInfo();
	
	if(empty($hatalar[2])){
		echo "başarıyla güncellendi";
	}else{
		echo "hatan var! $hatalar[2]";
	}
}

$sorgu = $db->prepare("Select * from kisiler WHERE id = ? ");
$sorgu->execute(array($id));
$bilgi = $sorgu->fetch();

?>

<form action="duzenle.php?id=<?php echo $id; ?>" method="post">
	
	Ad : <input type="text" name="ad" value="<?php echo $bilgi["ad"]; ?>" /><br />
	Soyad : <input type="text" name="soyad" value="<?php echo $bilgi["soyad"]; ?>" /><br />
	Yas <input type="number" name="yas" value="<?php echo $bilgi["yas"]; ?>" /><br />
	Cinsiyet <br />
	
	<?php
	if($bilgi["cinsiyet"]=="erkek"){
		$erkek = "checked";
		$kadin = "";
	}else{
		$erkek = "";
		$kadin = "checked";
	}
	
	?>
	
	Kadın <input type="radio" name="cinsiyet" value="kadin" <?php echo $kadin; ?>/>
	Erkek <input type="radio" name="cinsiyet" value="erkek" <?php echo $erkek; ?>/><br />
	
	Şehir <br />
	
	<?php
	$sorgu2 = $db->prepare("SELECT * FROM iller ORDER BY ilinadi ASC");
	$sorgu2->execute();
	$iller = $sorgu2->fetchAll();
	// var_dump($iller);
	?>
	<select name="sehir">
		<?php
		foreach($iller AS $il){
			if($bilgi["il"]==$il["id"]){
				echo "
			<option value='$il[id]' selected>$il[ilinadi]</option>
			";
			}else{
				echo "
			<option value='$il[id]'>$il[ilinadi]</option>
			";
			}
			
			
		}
		?>
	</select>
	
	<br />
	<br />
	<input type="submit" value="formumu gönder" />
</form>

<?php

$db = null;
?>