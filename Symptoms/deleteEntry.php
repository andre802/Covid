<?php require_once('../src/database.php');
$date = $_POST["dateEntry"];
            $deleteQuery = "Delete from symptoms where dateOfCheck = :date";
            $statement4 = $db->prepare($deleteQuery);
            $statement4->bindValue(':date', $date);
            $statement4->execute();
            $statement4->closeCursor();
            include("symptoms.php");
    ?>