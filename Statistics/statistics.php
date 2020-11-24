<?php 
    require('../src/database.php');

    $query = 'Select * from covid19_tests_performed_by_state_1 order by state';
    $statement1 = $db->prepare($query);
    $statement1->execute();
    $results = $statement1->fetchAll();
    $statement1->closeCursor();

    $casesQuery = 'select `State/Territory`, `Total Cases`, `Cases in Last 7 Days`, `Total Deaths`, `Deaths in Last 7 Days` from united_states_covid19_cases_and_deaths_by_state__1_';
    $statement3 = $db->prepare($casesQuery);
    $statement3->execute();
    $casesAndDeaths= $statement3->fetchAll();
    $statement3->closeCursor();

    $stateAscending = 'select `State/Territory`, `Total Cases`, `Cases in Last 7 Days`, `Total Deaths`, `Deaths in Last 7 Days` from united_states_covid19_cases_and_deaths_by_state__1_ order by State';
    $stateDescending = 'select `State/Territory`, `Total Cases`, `Cases in Last 7 Days`, `Total Deaths`, `Deaths in Last 7 Days` from united_states_covid19_cases_and_deaths_by_state__1_ order by State desc';
    $statement4 = $db->prepare($stateAscending);
    $statement4 -> execute();
    $stateSortedAsc = $statement4 -> fetchAll();
    $statement4 -> closeCursor();

    $statement5 = $db->prepare($stateDescending);
    $statement5 -> execute();
    $stateSortedDesc = $statement5 -> fetchAll();
    $statement5 -> closeCursor();


    $loggedInQuery = 'Select firstName from profiles where loggedIn = True';
    $statement2 = $db->prepare($loggedInQuery);
    $statement2->execute();
    $name = $statement2->fetch();
    $statement2->closeCursor();
        require("../News/headerCovid.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Things Covid</title>
</head>
<body>
    <header>
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../Index/index.php">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="statistics.php" id="current">Statistics</a></li>
                <li><a href="#">Shop</a></li>
                <li>
                     <?php
            if ($name != NULL) {
                ?><a href="../Login/logout.php">
                <?php echo "Hello $name[0]";?>
                </a>
            <?php } else { 
                ?><a href="../Login/loginForm.php">
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
            <?php foreach($casesAndDeaths as $result): ?>
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
                if (stateAsc) {
                    window.location = "./changeStatistics/orderDescState.php";
                    stateAsc = false;
                } 
            });
            casesBtn.addEventListener("click", () => {
                window.location = "./changeStatistics/orderDescCases.php";
            });
            cases7DaysBtn.addEventListener("click", () => {
                window.location = "./changeStatistics/orderDescCases7.php"
            });
            deathsBtn.addEventListener("click", () => {
                window.location = "./changeStatistics/orderDescDeaths.php";
            })
            deaths7DaysBtn.addEventListener("click", () => {
                window.location = "./changeStatistics/orderDescDeaths7.php";
            })

                
            
        </script>
        <footer><?php include('../News/footerCovid.php'); ?></footer>

</body>

    </html>