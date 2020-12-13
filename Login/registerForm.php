<?php include_once('../src/database.php');
 $loggedInQuery = 'Select firstName from profiles where loggedIn = True';
    $statement = $db->prepare($loggedInQuery);
    $statement->execute();
    $name = $statement->fetch();
    $statement->closeCursor();
    require("../News/headerCovid.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
      <header>
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../Index/index.php" id="current">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li><?php
            if ($name != NULL) {
                ?><a href="logout.php">
                <?php echo "Hello $name[0]";?>
                </a>
            <?php } else { 
                ?><a href="loginForm.php">
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
    <main id="register">
        <h2>Register</h2>
        <form id="registrationForm" action="" method="POST" onsubmit="return false">
            <input placeholder="First Name" type="text" name="firstName" id="firstName" required><span id="firstNameRequired">*</span><br>
            <input placeholder="Last Name" type="text" name="lastName" id="lastName" required><span id="lastNameRequired">*</span><br>
            <input type="email" placeholder="Enter your email" id="email" name="email" required><span id="emailRequired">*</span><br>
            <input title="Password must be at least 8 characters long, contain at least one digit, an uppercase character, and a symbol" type="password" name="password" placeholder="Enter your password" id="password" required><span id="passwordRequired">*</span><br>
            <input title="Must be at least 18 years old to join." type="number" name="age" min="18" max="120" placeholder="Enter your age" id="age" required><span id="ageRequired">*</span><br>
            <select name="gender" id="gender">
                <option value="none" disabled hidden>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="nonbinary">Non-binary</option>
                <option value="other">Other</option>
                            </select>
            <br>    
            <select name="race" id="race">
                <option value="none" disabled hidden>Select your race/ethnicity</option>
                <option value="black">Black/African descent</option>
                <option value="white">White</option>
                <option value="hispanic">Hispanic or Latino</option>
                <option value="asian">Asian</option>
                <option value="americanIndian">American Indian</option>
                <option value="pacificIslander">Native Hawaiian or Pacific Islander</option>
            </select>
            <br>
            <input type="text" name="zipcode" id="zipcode" placeholder="Enter your zipcode">
            <br>
            <button type="submit" id="registerBtn" onclick="validateRegistration()">Register</button>
        </form>
    </main>
    
<script rel="script" src="./../src/validation.js"></script>
</body>
    <?php include('../News/footerCovid.php'); ?>

</html>