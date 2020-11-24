<?php require_once('../src/database.php');

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$queryPassword = 'Select password from profiles where email = :email';
$statement = $db->prepare($queryPassword);
$statement -> bindValue(':email', $email);
$statement -> execute();
$passwordResult = $statement->fetch(PDO::FETCH_NUM);
$statement -> closeCursor();
if ($password = $passwordResult[0]):
    $update = 'Update profiles set loggedIn = True where password = :password';
    $statement2 = $db->prepare($update);
    $statement2->bindValue(':password', $password);
    $statement2->execute();
    $statement2->closeCursor();
    include("../Index/index.php");
endif;
?>