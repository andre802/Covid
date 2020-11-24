    <?php

	include ('../src/database.php');
	$title = 'News';
	
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>News</title>
		<link rel="browser icon" href="faviconCOVID.ico" />
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="virusCSS.css" />
		<!--separate CSS header footer etc.-->
	</head>
	<body>
		<header>
			<?php require("headerCOVID.php");?>
		</header>
		<main>
			<h1 class="bigTitle">Updates</h1>
			<h2 class="sTitle">News Syndication List</h2>
			<table>
				<thead>
					<tr>
						<th class="onespaceMove">Organization</th>
						<th class="Move">Description</th>
						<th class="Move">Date Published</th>
					</tr>
				</thead>
				<tr>
					<th class="onespace">CNN</th>
					<td>
						<a href="https://www.cnn.com/world/live-news/coronavirus-pandemic-11-20-20-intl/h_8abb6cb00cab6e0c942cc0c2d5a739cf">
							Live coverage of COVID-19
						</a>
					</td>
					<td>Continuously Updated</td>
				</tr>
				<tr>
					<th class="onespace">MSNBC</th>
					<td>
						<a href="https://www.msnbc.com/msnbcanswers"> MSNBC Answers </a>
					</td>
					<td>Continuously Updated</td>
				</tr>
				<tr>
					<th class="onespace">CBC</th>
					<td>
						<a href="https://www.cbc.ca/news/covid-19"> COVID-19 Top Stories </a>
					</td>
					<td>Continuously Updated</td>
				</tr>
				<tr>
					<th class="onespace">NBCNews</th>
					<td>
						<a href="https://www.nbcnews.com/health/coronavirus"> COVID-19 Latest Articles </a>
					</td>
					<td>Continuously Updated</td>
				</tr>
				<tr>
					<th class="onespace">Washington Post</th>
					<td>
						<a href="https://www.washingtonpost.com/coronavirus/"> Free Coverage on Coronavirus </a>
					</td>
					<td>Continuously Updated</td>
				</tr>
			</table>
			<h2 class="sTitle">Important Annoucements</h2>
			<p>
				Today, the U.S. Food and Drug Administration issued
				an emergency use authorization (EUA) for the first COVID-19 diagnostic test for
				self-testing at home and that provides rapid results. [FDA, November 17, 2020]
			</p>
		</main>
		<footer>
			<?php require("footerCOVID.php");?>
		</footer>
	</body>
</html>