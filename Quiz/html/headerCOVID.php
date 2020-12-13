    <?php

	require_once($_SERVER['DOCUMENT_ROOT'].'/Project/src/database.php');

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Vertical Navbar</title>
		<script src="../js/menuAction.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/header.css">	
	</head>
	<header>
		
		<div id="slidebtn" onclick="closeNav(this)">&#x2261;</div>
		<nav id="header_menu">
			<ul>
					<li><a href="../../Index/index.php">Home</a></li>
					<li><a class="selected" href="../css/howitworks.css">Learn About COVID-19</a></li>
					<li><a href="../../Comments/article.php">Entertainment</a></li>
					<li><a href="../../News/newsCOVID.php">News &amp Updates</a></li>
					
				</ul>	
		</nav>
	</header>

</html>