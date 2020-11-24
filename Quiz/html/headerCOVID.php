    <?php

	require_once($_SERVER['DOCUMENT_ROOT'].'/Project/src/database.php');

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Vertical Navbar</title>
		<link href="../css/header.css">	
		<script hre="../js/menuAction.js"></script>	
	</head>
	<header>
		
		<div id="slidebtn" onclick="closeNav(this)">&#x2261;</div>
		<nav id="header_menu">
			<ul>
				<li><a href="../Index/index.php">Home</a></li>
				<li><a href="../Quiz/html/howitworks.php">Learn About COVID-19</a></li>
				<li><a href="../Comments/article.php">Entertainment While Social Distancing</a></li>
				<li><a href="../News/newsCOVID.php">News &amp Updates</a></li>
				<li><a href="../Symptoms/symptoms.php">Contact Tracing</a></li>
			</ul>
		</nav>
	</header>
</html>