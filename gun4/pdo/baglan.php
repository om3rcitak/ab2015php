<?php

try{
	$db = new PDO('mysql:host=localhost;dbname=ab2015php;charset=utf8', 'root', '');
}catch(PDOException $e){
	echo $e->getMessage();
}

?>
