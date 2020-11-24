<?php
    require_once('database.php');
    $content = filter_input(INPUT_POST, 'content');
    $username = filter_input(INPUT_POST, 'username');
    $user_id = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);
    
    // Create comment
    if ($content != false && $username != false && $user_id != false) {
        $query = 'INSERT INTO comments (username, userID, content) VALUES (:username, :user_id, :content)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':user_id', $user_id);
        $statement->bindValue(':content', $content);
        $statement->execute();
        $statement->closeCursor();
    }
    
    // Display the Article page
    header('Location: article.php');
?>
