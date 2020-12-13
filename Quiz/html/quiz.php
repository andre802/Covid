<?php
	include ('../../src/database.php');
	include("./headerCOVID.php");
?>

<html>
	<head>
		<title>SARS-CoV-2 Quiz!</title>
		<link rel="browser icon" href="../css/faviconCOVID.ico" />
		<link rel="stylesheet" href="../css/quiz.css">
		<script src="../js/quiz.js"></script>
	</head>
	<body>
		<header>
			<nav id="nav_menu">
				<ul>
					<li><a href="../../Index/index.php">Home</a></li>
					<li><a class="selected" href="./howitworks.php">Learn About COVID-19</a></li>
					<li><a href="../../Comments/article.php">Bored? [U] Special</a></li>
					<li><a href="../../News/newsCOVID.php">News &amp Updates</a></li>
					<li><a href="../../Symptoms/symptoms.php">Contact Tracing</a></li>
				</ul>
			</nav>
			<nav id="header_menu">
				<ul>
					<li><a href="howitworks.php">Coronavirus [U]: Learn</a> </li>
					<li><a class="selected" href="quiz.php">Coronavirus [U]: Quiz</a> </li>
				</ul>
			</nav>	
		</header>  
		<main>
			<h2 id="progress"></h2>
			<div id="test"></div>
		</main>
		<footer>
			<?php include('../../News/footerCOVID.php'); ?>
		</footer>
	</body>
</html>