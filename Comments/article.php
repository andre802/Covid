<?php
    require_once('../src/database.php');
    $loggedInQuery = 'SELECT * from profiles where loggedIn = True';
    $statement = $db->prepare($loggedInQuery);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    
    // Get all comments
    $query = 'SELECT * FROM comments ORDER BY time desc';
    $statement2 = $db->prepare($query);
    $statement2->execute();
    $comments = $statement2->fetchAll();
    $statement2->closeCursor();
    
    function getTime($timePosted) {
        $timeAgo = (time() - 21600) - strtotime($timePosted);
        if($timeAgo == 0) {
            return "just now";
        } else if ($timeAgo < 60) {
            return $timeAgo." seconds ago";
        } else if ($timeAgo < 3600) {
            return floor($timeAgo/60)." minutes ago";
        } else if ($timeAgo < 86400) {
            return floor($timeAgo/3600)." hours ago";
        } else {
            return floor($timeAgo/86400)." days ago";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Things to keep you entertained during quarantine</title>
        <link rel="stylesheet" type="text/css" href="../News/virusCSS.css">
        <link rel="stylesheet" type="text/css" href="article.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <style>
            .button {
                padding: 7px;
                border-radius: 4px;
                margin-right: 3px;
            }
            form p {
                width: 60%;
                margin: 0 auto;
            }
            form {
                padding: 10px;
                box-shadow: 2px 2px 5px black;
                 margin: 0 auto;
            }
        </style>
            </head>
    <body class="background">
        <nav>
            <span id="logo"></span>
            <ul>
                <li><a href="../Index/index.php">Home</a></li>
                <li><a href="../Symptoms/symptoms.php">Symptom Checker</a></li>
                <li><a href="../Statistics/statistics.php">Statistics</a></li>
                <li id="loginLink">
                <?php
            if ($user != NULL) {
                ?><a href="../Login/logout.php">
                <?php echo "Hello $user[firstName]"?>
                </a>
            <?php } else { 
                ?><a href="../Login/loginForm.php">
                <?php echo 'Log In'; }?>
                </a></li>
            </ul>
        </nav>
        <?php include('../News/headerCOVID.php'); ?>
        <article>
            <h1>Things to keep you entertained during quarantine</h1>
            <h2>Play video games with friends</h2>
            <p>Playing video games is a great way to pass time with friends while social distancing and
               staying safe. There are plenty of games to play on the Xbox One, the Playstation 4, and
               even on PC. There's always the popular Minecraft available on all platforms or the newly
               released Call of Duty Black Ops Cold War if that's more your thing. Otherwise, you could
               play Among Us, a detective game inspired by Mafia.
            </p>
            <h2>Binge watch a new show</h2>
            <p>With all the free time we have, you could always binge watch a show you've been putting
               on a hold for a while. On Hulu or Netflix there are plenty of shows to watch like Game
               of Thrones or the Walking Dead. If you like anime, there's also shows like One Piece,
               Attack on Titan, and One Punch Man.
            </p>
            <h2>Read a new book</h2>
            <p>You may have an old book on the shelf you've been meaning to read, but haven't found the
               time. Or maybe you're out of physical books to read and don't know where to look. If
               that's the case there's always digital books on the Kindle and Nook apps.
            </p>
            <h2>Start exercising</h2>
            <p>You may feel a bit restless while quarantining due to not going out as much. It's a good
               time to take up exercising habits to live a healthier lifestyle and relax more. Exercise
               doesn't require access to a gym or large amounts of equipment. For example, you can do
               walking, planks, and push-ups with zero equipment.
            </p>
            <div id="comment_box">
                <h3>Comments</h3>
                <form action="comment.php" method="post">
                    <textarea name="content"></textarea><br>
                    <input type="hidden" name="username" value="<?php echo $user['firstName']; ?> <?php echo $user['lastName']; ?>">
                    <input type="hidden" name="userID" value="<?php echo $user['profileID']; ?>">
                    <input class="button" type="submit">
                </form>
            </div>
            <?php foreach ($comments as $comment) : ?>
                <div class="comment">
                    <form action="counter.php" method="post">
                        <span class="username"><?php echo $comment['username']; ?></span> <?php echo getTime($comment['time']); ?>
                        <p><?php echo $comment['content']; ?></p>
                        <input type="hidden" name="comment_id" value="<?php echo $comment['commentID']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $user['profileID']; ?>">
                        <input class="button" type="submit" name="like" value="Like"><?php echo $comment['likes']; ?>
                        <input class="button" type="submit" name="like" value="Dislike"> <?php echo $comment['dislikes']; ?>
                        <?php if ($comment['userID'] == $user['profileID'] ) {?>
                            <input class="button" type="submit" formaction="deletecomment.php" value="Delete">
                        <?php } ?>
                    </form>
                </div>
            <?php endforeach; ?>
        </article>
        <?php include('../News/footerCOVID.php'); ?>
    </body>
</html> 