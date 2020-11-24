
<?php require_once('../src/database.php');
        $update = 'Update profiles set loggedIn = "False" where loggedIn = "True"';
        $statement = $db -> prepare($update);
        $statement->execute();
        $statement->closeCursor();
        include('../Index/index.php');
    ?>