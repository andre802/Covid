<?php 
require_once('../../src/database.php');
$loggedInQuery = 'Select firstName from profiles where loggedIn = True';
    $statement = $db->prepare($loggedInQuery);
    $statement->execute();
    $name = $statement->fetch();
	$statement->closeCursor();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>How does it work?</title>
        <link rel="shortcut icon" href="../../News/faviconCOVID.ico">
		<link rel="stylesheet" href="../css/howitworks.css" />
    </head>
    <body>
		<header>
			<?php include 'headerCOVID.php' ;?>
			<nav id="nav_menu">
			
				<ul>
					<li><a class="selected" href="howitworks.php">Coronavirus [U]: Learn</a> </li>
					<li><a href="quiz.php">Coronavirus [U]: Quiz</a> </li>
				</ul>
			</nav>
			<nav id="header_menu">
				
			</nav>	
		</header>         
        <main class="background">
			<h1>How does it work?</h1>
			<img src="../images/sarscovid2.gif" alt="sars covid 2 gif" class="movepicright" width="270">
			<h2>Where does the virus get it's name?</h2>
			<ul>
				<li>SARS-CoV-2 is the successor of the SARS-CoV-1 virus which caused the 2002-2004 outbreak.</li>
				<li>It is far more transmitable than SARS-1 because of the spikes on it's envelop which make for easier acceptance into the epithelial cells of the lung.</li>
				<li>COVID-19 is the name of the disease which was first discovered in the year 2019 and not the name of the actual virus.</li>
			</ul><br>
			
			<img src="../images/virusstruct.gif" alt="sars covid 2 structure gif" class="movepicleft" width="270">
			<h2>What are viruses?</h2>
			<ul>
				<li>Viruses are not alive. Unlike bacteria which are killed by antibiotics, you can't kill something that's not living.</li> 
				<li>Viruses can only replicate by entering a living cell and using the cell's mechanisms to multiply.</li>
				<li>The only way to combat virus infections is to teach the body to recognize and label the virus for termination, or disable the viruses absorbtion and or replication process.</li>
				<li>SARS-CoV-2 is the seventh member of the coronavirus family which infects humans. Other members include MERS and the original SARS.</li>
				<li>All coronaviruses are marked by a positive-sense single-strand RNA (+ssRNA) which is very infectious to humans.</li>
			</ul><br>
			
			<img src="../images/virusdroplets.gif" alt="sars covid 2 spread" class="movepicright" width="270">
			<h2>How does the virus spread?</h2>
			<ul>
				<li>Viruses usually can not survive outside a living organism.</li>
				<li>SARS-CoV-2 spread via droplets which contain infected living cells and bodily fluid.</li>
				<li>The virus is contracted by inhilation of droplets or if infected body fluid is mechanically inserted into orifices of the body.</li>
			</ul><br><br><br>

			<img src="../images/infectepithelialcells.gif" alt="sars covid 2 infects epithelial cells gif" class="movepicleft" width="270">
			<h2>Where does it infect?</h2>
			<ul>
				<li>SARS-CoV-2 infects the epithelial cells of the lungs, intenstines, and spleen.</li> 
				<li>Epithelial cells are the boarder cells forming the mucosal linings of organs.</li>
				<li>When epithelial cells are damaged the primary layer of defense becomes compromised, leaving the organ susceptible to opportunistic pathogens.</li>
			</ul><br><br>
			
			<img src="../images/injectsRNA.gif" alt="sars covid 2 injects +ssRNA" class="movepicright" width="270">
			<h2>How does the virus enter epithelial cells?</h2>
			<ul>
				<li>The protein spikes on SARS-CoV-2's outter memberane attach to the angiotensin-converting enzyme 2 receptor of epithelial cells (ACE-2).</li>
				<li>The ACE-2 receptor is designed to help regulate blood pressure and inflammation by cutting up the larger protein angiotensinogen into angiotensin.</li>
				<li>This type of receptor is very abundant in pneumocytes which line the small air sacks of the lung known as alveoli.</li>
				<li>SARS-CoV-2 uses it's spikes to hook onto this receptor while injecting it's genetic material into the unsusspecting epithelial cell.</li>
			</ul><br><br>
			
			<img src="../images/virusmultiply.gif" alt="sars covid 2 uses cell to multiply gif" class="movepicleft" width="270">
			<h2>What does it do when it enters the cell?</h2>
			<ul>
				<li>All viruses use the mechanisms of their host cells to multiply.</li> 
				<li>SARS-CoV-2 uses the ribosomes of the endoplasmic reticulum of the cell to copy it's genetic material piece by piece.</li>
				<li>These piece are then assembled into new viruses and packaged using exocytosis.</li>
				<li>Exocytosis is how larger proteins produced by cells are normally transported to the cell surface and released.</li>
			</ul><br><br><br>
			
			<img src="../images/infectionexponential.gif" alt="sars covid 2's infection goes exponential" class="movepicright" width="270">
			<h2>How does the infection spread?</h2>
			<ul>
				<li>The infection begins to grow exponentially with each infected cell infecting more cells.</li>
				<li>After approximately ten days, millions of body cells are infected and billions of virus particles are produced.</li>
				<li>The distress by the cells who's normal mechanisms are commandeered by the virus is detected by the body's immune system and an immune reaction is triggered.</li>
			</ul><br>
			
			<img src="../images/infectsimmunecells.gif" alt="sars covid 2 infects immune cells gif" class="movepicleft" width="270">
			<h2>How does the body react?</h2>
			<ul>
				<li>As immune cells enter the fray, they too are infected by the virus and become confused.</li> 
				<li>This confusion by messanger immune cells sends out powerful distress which trigger the full force of the body's immune system.</li>
				</ul><br><br><br><br>
				
			<img src="../images/cytokines.gif" alt="cytokines bring the whole immune system over" class="movepicright" width="270">
			<h2>Why is this reaction bad?</h2>
			<ul>
				<li>The immune cells of the human body don't have eyes or ears; they communicate with one another using signaling molecules called cytokines.</li>
				<li>Immune cells that are infected by SARS-CoV-2 release large amounts of cytokines which attract granulocytes and lymphocytes of all types to the area.</li>
				<li>In addition to sending the immune system into a frenzy, the immuno reaction by SARS-CoV-2 exhausts the immune system in other parts of the body which can be very dangerous to people with pre-existing conditions.</li>
			</ul><br>
			
			<img src="../images/neutrophiles.gif" alt="sars covid 2 granulocytes gif" class="movepicleft" width="270">
			<h2>How do granulocytes react to distress signals?</h2>
			<ul>
				<li>Neutrophiles are one type of granulocyte that arrive due to the disress signals.</li>
				<li>When granulocytes like neutrophiles detect distress, they release granules which destroy the entire area around affected cells.</li>
				<li>This carpet bombing approach to fighting an infection the body does not recognize is brutal as it destroys both infected and non-infected cells.</li>
				<li>This immune response of the host destroys both regular and immune cells in the process</li>
			</ul><br><br>
			
			<img src="../images/NKTcells.gif" alt="sars covid 2 lymphocytes gif" class="movepicright" width="270">
			<h2>How do lymphocytes react to distress signals?</h2>
			<ul>
				<li>Natural Killer T cells (NKT) are one type of lymphocyte that arrive due to the disress signals.</li>
				<li>NKT cells trigger a cells controled suicide mechanism.</li>
				<li>Due to the confusion generated by the SARS-CoV-2 virus they begin activating both infected and non-infected cells, further adding to the destruction of surrounding tissue.</li>
				<li>This kind of reaction generates a positive feedback loop, and as more and more immune cells arrive the more damage they do and the more healthy lung tissue they destroy.</li>
			</ul><br><br><br>
			
			<img src="../images/fibrosis.gif" alt="sars covid 2 scarring gif" class="movepicleft" width="270">
			<h2>How does this immune attack affect the lungs?</h2>
			<ul>
				<li>When a great deal of lung cells are destroyed at once, the affected area does not have enough time to replace the missing cells.</li>
				<li>What transpires is permanent damage called fibrosis.</li>
				<li>This irreversable scarring can lead to life long disabilities.</li>
			</ul><br><br><br><br>
			
			<img src="../images/alveoli.gif" alt="sars covid 2 bacterial infection gif" class="movepicright" width="270">
			<h2>What happens to the damaged areas of the lungs?</h2>
			<ul>
				<li>In most cases, the immune system regains control through developing antibodies to label and eliminate the virus.</li>
				<li>In other cases where millions of epithelial cells have died, the lungs protective lining is gone.</li>
				<li>This is when opportunistic pathogens, such as bacteria that are usually not a problem, take advantage of the situation and attack.</li>
				<li>The alveoli, or air sacks, of the lungs become susceptible to the bacteria and the host develops pneumonia.</li>
				<li>Respiration becomes difficult, or fails all together, and patients require ventilators to survive.</li>
			</ul><br><br>
			
			<img src="../images/bacterialdeath.gif" alt="sars covid 2 death by bacterial infection gif" class="movepicleft" width="270">
			<h2>How does this infection cause death?</h2>
			<ul>
				<li>The immune system has now fought at full strength and is now exhausted.</li>
				<li>The reaction generated against the viral foe has killed both immune and regular cells in its blanketed destructive process.</li>
				<li>The bacterial infection of the respiratory system now enters the blood and overwhelms the bodys remaining immune system.</li>
				<li>Once this occurs, death is very likely.</li>
			</ul><br><br>
			
			<img src="../images/soap.gif" alt="sars covid 2 soap gif" class="movepicright" width="270">
			<h2>What can we do while waiting for a vaccine?</h2>
			<ul>
				<li>While the world waits for vaccines to become available for wide-spread use, we can develope a social vaccine to help combat the virus.</li>
				<li>There are two very easy ways to help socially vaccinate the public against the virus:</li>
					<ol>
						<li>Wears a mask to help prevent the spread of the virus both to you, and from you.</li>
						<li>Wash your hands to destroy any virus you may have come in contact with</li>
					</ol>
				<li>The outer membrate of the virus is made up by lipids.</li>
				<li>Lipids are fats that are connected by disulfied bonds, and regular soap break disulfied bonds and denatures lipids.</li>
				<li>In addition to destroying the viruses fatty envelop, the mechanical washing rips away the virus from the surface of your hands.</li>
			</ul>
			
		</main>
		<footer>
			<?php include('../../News/footerCOVID.php'); ?>
		</footer>
    </body>
</html>