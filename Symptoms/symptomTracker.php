<?php require_once('../src/database.php');
    $dateQuery = "Select CURRENT_TIMESTAMP";
    $dateStatement = $db->prepare($dateQuery);
    $dateStatement->execute();
    $date = $dateStatement->fetch();
    $dateStatement->closeCursor();

    $query = 'Select email from profiles where loggedIn = "True"';
    $emailStatement = $db->prepare($query);
    $emailStatement->execute();
    $email = $emailStatement->fetch();

    $addMinimum = 'Insert into symptoms (email, dateOfCheck) values(:email, :date)
    on duplicate key update dateOfCheck=:date';
    $minimumStatement = $db->prepare($addMinimum);
    $minimumStatement->bindValue(":email", $email["email"]);
    $minimumStatement->bindValue(":date", $date["0"]);
    $minimumStatement->execute();



    $symptom = isset($_POST['sympForm']) ? $_POST['sympForm'] : '';

    if (empty($symptom)) { 
    } else {
        $count = count($symptom);
       
        for ($i=0; $i < $count; $i++){
            $updateQ = "Update symptoms set "."$symptom[$i]".' = True';
            $updateS = $db -> prepare($updateQ);
            $updateS -> bindValue(':date', $date[0]);
            $updateS -> bindValue(':email', $email["email"]);
            $updateS -> execute();
            $updateS->closeCursor();
        }
    }
    include("./symptoms.php");
?>