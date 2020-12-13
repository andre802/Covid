<?php include_once('../src/database.php');
 $loggedInQuery = 'Select firstName from profiles where loggedIn = True';
    $statement = $db->prepare($loggedInQuery);
    $statement->execute();
    $name = $statement->fetch();
    $statement->closeCursor();
    include("../News/headerCovid.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylehseet" href="../News/header.css">
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
                <li><a href="../Index/index.php">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li>  <?php
            if ($name != NULL) {
                ?><a href="logout.php" id="current">
                <?php echo "Hello, $name[0]!";?>
                </a>
            <?php } else { 
                ?><a href="loginForm.php" id="current">
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
    <main id="login">
        <h2>Log In</h2>
        <form id="loginForm" action="" method="POST">
            <input name="email" type="text" placeholder="Enter your email" id="email" required><span></span>
            <input title="Password must be at least 8 characters long, contain at least one digit, an uppercase character, and a symbol" pattern="(?=.*[A-Z]+)(?=.*\d)(?=.*[!@#$%^&*()_+{}|[\]\\;',./:<>?])[A-Za-z\d!@#$%^&*()_+{}|[\]\\;',./:<>?]{8,}$" type="password" name="password" placeholder="Enter your password" id="password" required><span></span>
            <button type="submit" id="loginBtn" onclick="validateLogin()">Sign In</button>
            <p>Don't have an account? <a href="registerForm.php">Register</a></p>
        </form>
    </main>
        <script rel="script" src="./../src/validation.js"></script>

</body>
    <?php include('../News/footerCovid.php'); ?>

</html>