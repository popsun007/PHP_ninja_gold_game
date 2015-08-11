<?php
session_start();
date_default_timezone_set("America/Los_Angeles");
$golds = 0;
if ((isset($_POST['action']))&&($_POST['action'] === 'farm')){
	$golds = rand(10,20);
	$_SESSION['total'] += $golds; 
}
else if ((isset($_POST['action']))&&($_POST['action'] === 'cave')){
	$golds = rand(5,10);
	$_SESSION['total'] += $golds; 
}
else if ((isset($_POST['action']))&&($_POST['action'] === 'house')){
	$golds = rand(2,5);
	$_SESSION['total'] += $golds; 
}
else if ((isset($_POST['action']))&&($_POST['action'] === 'casino')){
	
	if(rand(0,1)){
		$golds = rand(0,50);
		$_SESSION['total'] += $golds;
	}
	else {
		$golds = rand(0, 50) - 50;
		$_SESSION['total'] += $golds;
	}
}
else {
	session_destroy();
	header("location:index.php");
}

$_SESSION['action'] = $_POST['action'];
$_SESSION['golds'] = $golds;
if($_SESSION['golds'] >= 0) {
	$_SESSION['activities'] .= "<span style=\"color: green\">You entered a " . $_SESSION['action'] . " and earned " . $_SESSION['golds'] . " golds. (". date('Y/m/d') ." " . date('h:i:sa') . ")</span><br>";
}
else {
	$_SESSION['activities'] .= "<span style=\"color: red\">You entered a " . $_SESSION['action'] . " and lost " . $_SESSION['golds'] . " golds. (". date('Y/m/d') ." " . date('h:i:sa') . ")</span><br>";
}
header("location: index.php");
?>