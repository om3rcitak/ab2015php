<form action="kaydet.php" method="post">
	
	Ad : <input type="text" name="ad" /><br />
	Soyad : <input type="text" name="soyad" /><br />
	Yas <input type="number" name="yas" /><br />
	Cinsiyet <br />
	Kadın <input type="radio" name="cinsiyet" value="kadin" />
	Erkek <input type="radio" name="cinsiyet" value="erkek"><br />
	
	Şehir <br />
	
	<?php
	require "baglan.php";
	$sorgu = $db->prepare("SELECT * FROM iller ORDER BY ilinadi ASC");
	$sorgu->execute();
	$iller = $sorgu->fetchAll();
	// var_dump($iller);
	?>
	<select name="sehir">
		<?php
		foreach($iller AS $il){
			echo "
			<option value='$il[id]'>$il[ilinadi]</option>
			";
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