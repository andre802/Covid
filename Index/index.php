<?php require_once('../src/database.php');
            $query = 'Select firstName from profiles where loggedIn = True';
            $statement = $db->prepare($query);
            $statement->execute();
            $name = $statement->fetch();
            $statement->closeCursor();
            include('../News/headerCOVID.php');
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../News/header.css">
    <script href="../News/menuAction.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Things Covid</title>
</head>
<body>
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
    <header>
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../Index/index.php" id="current">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li id="loginLink">
                <?php
            if ($name != NULL) {
                ?><a title="Logout?" href="../Login/logout.php">
                <?php echo "Hello $name[0]";?>
                </a>
            <?php } else { 
                ?><a href="../Login/loginForm.php">
                <?php echo 'Log In'; }?>
                </a></li>
            </ul>
        </nav>
    </header>
    <aside id="fiveThings">
        <h3>Five Things To <span>Remember!</span></h3>
        <ol>
        <li>Wear a Mask!</li>
        <li>Wash Your Hands!</li>
        <li>Social Distance!</li>
        <li>Stay Safe!</li>
        <li>Look Out For One Another!</li>
        </ol>
    </aside>
    <main class="background">
        <h1>All Things Covid</h1>
        <h2>Stay Informed</h2>
        <p>COVID-19 is a disease called SARS-CoV-2. With a vaccine still months away and the number of cases continuing to rise across the United States, it is important to stay aware. Misinformation floats around seemingly easier than the virus, so it is imperative to stay focused on the facts and listen to those who gain the least. COVID-19 seems to cause a number of symptoms with the specificity and intensity of the symptoms often ranging considerably between people. Despite this, there are three that are the most prevalent, a fever, coughing, and shortness of breath. If you wish you take a symptom assessment and track your symptoms, you can do so <a href="../Symptoms/symptoms.php">here.</a></p>
        <br>        
    </p>
        <h2>Stay Healthy</h2>
    <p>Despite the alarming number of cases, it is imperative that we do our part to slow the spread of COVID-19 and protect the ones around us. This is achieved by washing our hands with soap and warm water, wearing a mask, and staying at least 6 feet away from people you don't live with, whenever possible. While some of us may catch this virus and not develop symptoms, that is all the more reason to do the minimum and protect ourselves and others.
    </p>
        <h2>Stay Hopeful</h2>
        <p>With time creeping towards a year since we were informed of the disease, our knowledge has improved. A number of vaccines are in their third phase of development, meaning they are being tested on a significantly large number of people to certify its safety and efficiency. While these announcements shouldn't give us a false sense of security and cause a lax in our precautions, it provides hope and for that it is important Click <a href="../Quiz/html/howitworks.php">here</a> to learn more.        
        </p>
    </main>
</body>
<?php include('../News/footerCovid.php'); ?>

</html>
