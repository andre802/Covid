<?php
	include ('../src/database.php');
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>News</title>
		<link rel="browser icon" href="faviconCOVID.ico" />
		<link rel="stylesheet" href="virusCSS.css" /> 
		<!--separate CSS header footer etc.-->
	</head>
	<body class="background">
		<header>
			<?php include 'headerCOVID.php' ;?>
			<nav id="nav_menu">
				<ul>
					<li><a href="../Index/index.php">Home</a></li>
					<li><a href="../Quiz/html/howitworks.php">Learn About COVID-19</a></li>
					<li><a href="../Comments/article.php">Bored? [U] Special</a></li>
					<li><a class="selected" href="newsCOVID.php">News &amp Updates</a></li>
					<li><a href="../Symptoms/symptoms.php">Contact Tracing</a></li>
					
				</ul>
			</nav>
			<nav id="header_menu">
				<ul>
					<li><a class="selected"  href="newsCOVID.php">News</a></li>
				</ul>
			</nav>	
		</header>
		<main>
			<h1 class="bigTitle">News</h1>
			<p class="info"> It's important to be well informed of any news pertaining to the virus.
			All over the world developments are happening, and some news stations cover
			geographical regions or political updates better than others. Since there are many
			news channels to choose from, we here at Coronavirus [U] have compiled the list of
			some of the biggest news stations you can choose from. Stay safe, and stay informed!
			<h2 class="sTitle">Syndication List</h2>
			<table>
				<thead>
					<tr>
						<th class="onespaceMove">Organization</th>
						<th class="Move">Link</th>
						<th class="Move">Target Region</th>
					</tr>
				</thead>
				<tr>
					<th class="onespace">CNN</th>
					<td>
						<a href="https://www.cnn.com/world/live-news/coronavirus-pandemic-11-20-20-intl/h_8abb6cb00cab6e0c942cc0c2d5a739cf">
							Live coverage of COVID-19
						</a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">MSNBC</th>
					<td>
						<a href="https://www.msnbc.com/msnbcanswers"> MSNBC Answers </a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">CBC</th>
					<td>
						<a href="https://www.cbc.ca/news/covid-19"> COVID-19 Top Stories </a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">NBCNews</th>
					<td>
						<a href="https://www.nbcnews.com/health/coronavirus"> COVID-19 Latest Articles </a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">Washington Post</th>
					<td>
						<a href="https://www.washingtonpost.com/coronavirus/"> Free Coverage on Coronavirus </a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">Fox News</th>
					<td>
						<a href="https://www.foxnews.com/category/health/infectious-disease/coronavirus"> Coronavirus </a>
					</td>
					<td>United States</td>
				</tr>
				<tr>
					<th class="onespace">BBC News</th>
					<td>
						<a href="https://www.bbc.com/news/coronavirus"> Coronavirus Pandemic </a>
					</td>
					<td>United Kingdom</td>
				</tr>
				<tr>
					<th class="onespace">Euronews</th>
					<td>
						<a href="https://www.euronews.com/special/coronavirus"> Coronavirus </a>
					</td>
					<td>Europe</td>
				</tr>
				<tr>
					<th class="onespace">World Health Organization</th>
					<td>
						<a href="https://www.euronews.com/special/coronavirus">  Coronavirus Disease (COVID-19) News  </a>
					</td>
					<td>World</td>
				</tr>
			</table>
		</main>
		<footer>
			<?php include('footerCOVID.php'); ?>
		</footer>
	</body>
</html>