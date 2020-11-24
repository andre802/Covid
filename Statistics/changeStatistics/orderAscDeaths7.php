<?php 
    require('../../src/database.php');

   
    $cases7Ascending = 'select `State/Territory`, `Total Cases`, `Cases in Last 7 Days`, `Total Deaths`, `Deaths in Last 7 Days` from united_states_covid19_cases_and_deaths_by_state__1_ order by `Cases in Last 7 Days`';
    $statement5 = $db->prepare($cases7Ascending);
    $statement5 -> execute();
    $cases7AscendingSorted = $statement5 -> fetchAll();
    $statement5 -> closeCursor();


    $loggedInQuery = 'Select firstName from profiles where loggedIn = True';
    $statement2 = $db->prepare($loggedInQuery);
    $statement2->execute();
    $name = $statement2->fetch();
    $statement2->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Things Covid</title>
</head>
<body>
    <header>
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../../Index/index.php">Home</a></li>
                <li><a href="../../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../statistics.php" id="current">Statistics</a></li>
                <li><a href="#">Shop</a></li>
                <li>
                     <?php
            if ($name != NULL) {
                ?><a href="../../Login/logout.php">
                <?php echo "Hello $name[0]";?>
                </a>
            <?php } else { 
                ?><a href="../../Login/loginForm.php">
                <?php echo 'Log In'; }?>
                </a>
                </li>
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
    <main id="statistics">
        <table id="statisticsTable">
            <tr>
                 <th><button id="stateOrder">
                     State/Territory</button></th>
                <th><button id="casesOrder">Total Cases</button></th>
                <th><button id="cases7DaysOrder">Cases in Last 7 Days</button></th>
                <th><button id="deathsOrder">Total Deaths</button></th>
                <th><button id="deaths7DaysOrder">Deaths in Last 7 Days</button></th>
            <tr>
            <?php foreach($cases7AscendingSorted as $result): ?>
            <tr>
                <td><?php echo $result["State/Territory"]; ?></td>
                <td><?php echo $result["Total Cases"]; ?></td>
                <td><?php echo $result["Cases in Last 7 Days"]; ?></td>
                <td><?php echo $result["Total Deaths"];?></td>
                <td><?php echo $result["Deaths in Last 7 Days"]?></td>
                
                
            </tr>
            <?php endforeach; ?>
            </table>
    </main>
            <script>
           let $ = (id) => document.getElementById(id);
            let stateAsc = true;
            let stateBtn = document.getElementById("stateOrder");
            let casesBtn = $("casesOrder");
            let cases7DaysBtn = $("cases7DaysOrder");
            let deathsBtn = $("deathsOrder");
            let deaths7DaysBtn = $("deaths7DaysOrder");
            stateBtn.addEventListener("click", () => { 
                    window.location = "../statistics.php";
                } 
            );
             casesBtn.addEventListener("click", () => {
                window.location = "./orderAscCases.php";
            });
            cases7DaysBtn.addEventListener("click", () => {
                window.location = "./orderDescCases7.php"
            })
            deathsBtn.addEventListener("click", () => {
                window.location = "./orderDescDeaths.php";
            })
            deaths7DaysBtn.addEventListener("click", () => {
                window.location = "./orderDescDeaths7.php";
            })
    
            
            </script>
</body>
    
    </html>