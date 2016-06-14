<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>Assignment 1</title>
		<style type="text/css"></style>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="logo">
					<h1><a href="index.php" title="home">Silverado Cinema</a></h1>
				</div>
				<?php include 'nav.php'; ?>
			</header>
				<?php include 'main.php'; ?>
			<footer>
				<?php include 'footer.php'; ?>			
				<?php include_once ("/home/eh1/e54061/public_html/wp/debug.php"); ?>
		</footer>
	</body>
</html>


		