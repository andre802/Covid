<?php 
require_once('../src/database.php');

$firstName = filter_input(INPUT_POST, "firstName");
$lastName = filter_input(INPUT_POST, "lastName");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$age = filter_input(INPUT_POST, "age");
$gender = filter_input(INPUT_POST, "gender");

$race = filter_input(INPUT_POST, "race");
$zipcode = filter_input(INPUT_POST, "zipcode");

$addProfileQuery = 'Insert into profiles (firstName, lastName, email, password, age, gender, race, zipcode)
 values (:firstName, :lastName, :email, :password, :age, :gender, :race, :zipcode)';
$statement = $db -> prepare($addProfileQuery);
$statement-> bindValue(':firstName', $firstName);
$statement-> bindValue(':lastName', $lastName);
$statement-> bindValue(':email', $email);
$statement -> bindValue(':password', $password);
$statement -> bindValue(':age', $age);
$statement -> bindValue(':gender', $gender);
$statement -> bindValue(':race', $race);
$statement -> bindValue(':zipcode', $zipcode);
$statement -> execute();
$statement -> closeCursor();

include('../Index/index.php');
?>