<?php session_start();

echo '<a href="?islem=ust">yukarı</a><br />';
echo '<a href="?islem=alt">aşağı</a><br /><br /><br />';

if(!isset($_SESSION['y'])){
	$_SESSION['y'] = 3;
}

if(isset($_GET['islem'])){
	$islem	= $_GET['islem'];
	if($islem=="ust"){
		if($_SESSION['y']==1){
			$_SESSION['y'] = 5;
		}else{
			$_SESSION['y']--;
		}
	}else if($islem=="alt"){
		if($_SESSION['y']==5){
			$_SESSION['y'] = 1;
		}else{
			$_SESSION['y']++;
		}
	}
}

echo '<table border="1">';
for($satir=1; $satir<=5; $satir++){
	echo "<tr>";
		echo "<td style='width:40px; height:40px;'>";
		if($_SESSION['y']==$satir){
			echo "<img src='ball.jpg' />";
		}
		echo "</td>";
	echo "</tr>";
}
echo '</table>';
?>