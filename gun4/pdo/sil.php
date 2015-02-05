<?php

require "baglan.php";

$id = $_GET["id"];

$sorgu = $db->prepare("DELETE FROM kisiler WHERE id = ? ");

$sorgu->execute(array($id));

$hatalar = $sorgu->errorInfo();

if(empty($hatalar[2])){
	echo "başarıyla silindi";
}else{
	echo "hatan var! $hatalar[2]";
}

$db = null;
?>