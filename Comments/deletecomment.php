<?php
    require_once('database.php');
    $comment_id = filter_input(INPUT_POST, 'comment_id', FILTER_VALIDATE_INT);
    
    // Increment likes
    if ($comment_id != false) {
        $query = 'DELETE FROM comments WHERE commentID = :comment_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':comment_id', $comment_id);
        $statement->execute();
        $statement->closeCursor();
    }
    
    // Display the Article page
    header('Location: article.php');
?>
