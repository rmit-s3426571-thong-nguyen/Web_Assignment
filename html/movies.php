<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.4.2"></script>
		<script type="text/javascript" src="../js/calculation.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>Assignment 1</title>
		<style type="text/css"></style>
		<script>
		</script>
		
		
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="logo">
					<h1><a href="index.php" title="home">Silverado Cinema</a></h1>
				</div>
				<?php include 'nav.php'; ?>
			</header>
				<?php include 'movies_page.php'; ?>
		</div>
		<footer>
			<?php include 'footer.php'; ?>
			<?php include_once ("/home/eh1/e54061/public_html/wp/debug.php"); ?>
		</footer>
		
	</body>
</html>
