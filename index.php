<?php
session_start();
if (!isset($_SESSION['total'])){
	$_SESSION['total'] = 0;
	$_SESSION['farm'] = 0;
	$_SESSION['cave'] = 0;
	$_SESSION['house'] = 0;
	$_SESSION['activities'] = '';
}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Make Money!!!</title>
	</head>
	<style type="text/css">
		body {
			width: 970px;
			margin: 0 auto;
		}
		.places {
			width: 200px;
			height: 200px;
			text-align: center;
			border: 1px solid black;
			display: inline-block;
		}
		.activities {
			width: 700px;
			height: 200px;
			border: 1px solid black;
		}
		.score {
			margin-left: 20px;
			width: 50px;
			height: 30px;
			border: 1px solid black;
			display: inline;
		}

	</style>
	<body>
		<h2>Your Gold<div class='score'><?= $_SESSION['total']  ?></div></h2>
		<div class='places'>
			<form action='process.php' method='post'>
				<h2>Farm</h2>
				<p>(earns 10-20 golds)</p>
				<input type='hidden' name='action' value='farm'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='process.php' method='post'>
				<h2>Cave</h2>
				<p>(earns 5-10 golds)</p>
				<input type='hidden' name='action' value='cave'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='process.php' method='post'>
				<h2>House</h2>
				<p>(earns 2-5 golds)</p>
				<input type='hidden' name='action' value='house'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='process.php' method='post'>
				<h2>Casino!</h2>
				<p>(earns/takes 0-50 golds)</p>
				<input type='hidden' name='action' value='casino'>
				<input type='submit'>
			</form>
		</div>
		<p class='act'>Activities:</p>
		<div class='activities'>

			<?= $_SESSION['activities']?>
		</div>
		<form action='process.php'>
		 <input type='submit' value='reset'>
		</form>
		
	</body>
</html>