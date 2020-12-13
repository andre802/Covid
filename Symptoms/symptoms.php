<?php require_once('../src/database.php');
            $query = 'Select firstName, email from profiles where loggedIn = True';
            $statement = $db->prepare($query);
            $statement->execute();
            $name = $statement->fetch();
            $statement->closeCursor();

            $contactQuery = 'Select firstName, lastName, zipCode, email from profiles where NOT email = :email ';
            $statement2 = $db->prepare($contactQuery);
            if(is_array($name)) {
            $statement2 -> bindValue(':email', $name["email"]);
            }
            $statement2 -> execute();
            $traces = $statement2->fetchAll();
            $statement2 -> closeCursor();

            if (is_array($name)) {
            $symptomsQuery = 'Select * from symptoms where email = :email';
            $statement3 = $db->prepare($symptomsQuery);
            $statement3->bindValue(':email', $name[1]);
            $statement3->execute();
            $symptomCheck = $statement3->fetchAll();
            $statement3->closeCursor();

        }
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
                <li><a href="symptoms.php" id="current">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li id="loginLink">
                <?php
            if ($name != NULL) {
                ?><a href="../Login/logout.php">
                <?php echo "Hello $name[0]" ?>
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
    <main class="background" id="symptoms">
       <h1>Symptom Checker</h1>
       <?php if($name != null) {
           ?>
            <form id="symptomTracker" method="POST" action="symptomTracker.php">
            <span id="symptomList"><p>Do you have any of the following?</p>
            <ul>
                <li>Cough </li><input type="checkbox" name="sympForm[]" id="cough" value="cough"><br>
                <li>Fever/Chills </li><input type="checkbox" name="sympForm[]" id="fever" value="fever"><br>
                <li>Shortness of Breath, difficulty breathing </li><input type="checkbox" name="sympForm[]" id="breathing" value="breathing"><br>
                <li>Sore throat</li><input type="checkbox" name="sympForm[]" id="soreThroat" value="soreThroat"><br>
                <li>New loss of smell or taste</li><input type="checkbox" name="sympForm[]" id="smell" value="smell"><br>
                <li>Diarrhea</li><input type="checkbox" name="sympForm[]" id="diarrhea" value="diarrhea"><br>
                <li>Headache</li><input type="checkbox" name="sympForm[]" id="headache" value="headache"><br>
                <li>Nausea/Vomiting</li><input type="checkbox" name="sympForm[]" id="nausea" value="nausea"><br>
                <li>New Fatique</li><input type="checkbox" name="sympForm[]" id="fatique" value="fatigue"><br>
                <li>Congestion or runny nose</li><input type="checkbox" name="sympForm[]" id="congestion" value="congestion"><br>
            </ul>
            </span>
            <span id="contactTrace">
                <p>Have you been into contact with any of these people?</p>
                <?php  
                    foreach($traces as $person):
                        ?><span class="person">
                            <p><?php echo $person["firstName"];?>
                            <span><?php echo substr($person["lastName"],0,1)?></span>
                            <span><?php if ($person["zipCode"]) { echo $person["zipCode"]; };?></span>
                            <input type="checkbox" value="<?php echo $person['firstName']; echo $person['lastName']?>">
                            <br>    
                        </p>
                            </span>
                <?php endforeach ?>
            </span>
                <button id="symptomButton" type="submit">Submit</button>
            </form>
           
       <?php } else { ?>
        <p>Please <a href="../Login/loginForm.php">log in</a> to take this assessment.</p>
       <?php };?>
       <span id="pastSubmits">
        <?php 
            if (empty($symptomCheck)) {

            } else {
                foreach($symptomCheck as $track) {
                    ?><form action="deleteEntry.php" method="POST" class="symptomEntry">
                        <input type="datetime" name="dateEntry" id="time" value="<?php echo $track['dateOfCheck']?>" readonly>
                    <p class="symptomHeader">Symptoms:</p>
                    <p><?php if (isset($track["fever"])) {
                        echo "Fever";
                    }?></p>
                    <p><?php if (isset($track["cough"])) {
                        echo "Cough";
                    }?></p>
                    <p><?php if (isset($track["breathing"])) {
                        echo "Difficulty Breathing";
                    }?></p>
                    <p><?php if (isset($track["soreThroat"])) {
                        echo "Sore Throat";
                    }?></p>
                    <p><?php if (isset($track["smell"])) {
                        echo "Loss of taste or smell";
                    }?></p>
                    <p><?php if (isset($track["diarrhea"])) {
                        echo "Diarrhea";
                    }?></p>
                    <p><?php if (isset($track["headache"])) {
                        echo "Headache";
                    }?></p>
                    <p><?php if (isset($track["nausea"])) {
                        echo "Nausea or Vomiting";
                    }?></p>
                    <p><?php if (isset($track["fatigue"])) {
                        echo "Fatigue";
                    }?></p>
                    <p><?php if (isset($track["congestion"])) {
                        echo "Congestion or Runny Nose";
                    }?></p>
                    <span><button type="submit">Delete</button></span>
                </form>
                <?php
                  
                }
            }
        ?>
       </span>
    </main>
</body>
<footer><?php include('../News/footerCovid.php'); ?></footer>

</html>
