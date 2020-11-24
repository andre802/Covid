<?php require_once('../src/database.php');
            $query = 'Select firstName from profiles where loggedIn = True';
            $statement = $db->prepare($query);
            $statement->execute();
            $name = $statement->fetch();
            $statement->closeCursor();
            include('../News/headerCOVID.php');
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../News/header.css">
    <script href="../News/menuAction.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Things Covid</title>
</head>
<body>
    <header>
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../Index/index.php" id="current">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li><a href="#">Shop</a></li>
                <li id="loginLink">
                <?php
            if ($name != NULL) {
                ?><a href="../Login/logout.php">
                <?php echo "Hello $name[0]";?>
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
    <main>
        <h1>All Things Covid</h1>
        <h2>Stay Informed</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu massa at elit suscipit convallis. Proin pulvinar porttitor tellus eu convallis. Sed placerat auctor ipsum vitae eleifend. Proin id odio tristique, bibendum augue a, hendrerit ex. Cras iaculis, augue non tincidunt molestie, leo mauris scelerisque neque, vitae gravida mi nulla in dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris a pharetra enim. Nam mollis lorem sit amet vulputate fringilla. Mauris arcu lorem, placerat convallis dui vitae, vulputate lacinia nibh. Pellentesque imperdiet metus id velit sollicitudin rhoncus. Nullam elementum, purus sed fringilla tristique, eros felis volutpat dolor, eu laoreet lacus augue vel orci. Aliquam id leo massa. Integer diam sem, feugiat at feugiat a, semper ut tortor.
        <br>        
        <a href="../Quiz/html/howitworks.html">Learn More, Test Your Knowledge</a>
    </p>
        <h2>Stay Healthy</h2>
        <p>Integer venenatis at erat vitae sagittis. Proin eget velit cursus, suscipit velit eget, convallis justo. Sed quis lectus porta, venenatis dui vel, elementum ipsum. In nec purus mollis erat aliquam pretium. Maecenas sodales rutrum felis eget dapibus. Ut faucibus ultricies turpis, ut tempor nulla. Cras ac risus at magna tincidunt malesuada. Integer a nunc a magna dignissim congue. Suspendisse imperdiet metus ligula, id commodo tortor feugiat quis. Nam euismod quam porttitor, posuere magna et, semper erat. Vivamus nec metus consectetur, iaculis tortor vitae, porta dui. Etiam accumsan commodo arcu. In ac dignissim elit. Morbi laoreet diam vel ligula lobortis, gravida placerat dui faucibus. Nulla convallis turpis in est pellentesque, et cursus ante scelerisque.
        </p>
        <h2>Stay Hopeful</h2>
        <p>Donec eu nunc metus. Donec vel est libero. Mauris nec augue consequat risus iaculis placerat eget nec sem. Donec sagittis, orci at vestibulum condimentum, magna augue pretium neque, et cursus urna elit sed arcu. Nam dolor arcu, sagittis eget felis nec, dignissim sodales nibh. Quisque tincidunt, tortor in pulvinar venenatis, risus mauris bibendum mi, et tristique sem magna a sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in dapibus enim.
        </p>
    </main>
</body>
<?php include('../News/footerCovid.php'); ?>

</html>
