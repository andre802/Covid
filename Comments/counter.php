<?php
    require_once('database.php');
    $comment_id = filter_input(INPUT_POST, 'comment_id', FILTER_VALIDATE_INT);
    $like = filter_input(INPUT_POST, 'like');
    
    // Increment likes
    if ($comment_id != false || $like != false) {
        $query = '';
        if ($like == "Like") {
            $query = 'UPDATE comments SET likes = likes + 1 WHERE commentID = :comment_id';
        } else if ($like == "Dislike") {
            $query = 'UPDATE comments SET dislikes = dislikes + 1 WHERE commentID = :comment_id';
        }
        $statement = $db->prepare($query);
        $statement->bindValue(':comment_id', $comment_id);
        $statement->execute();
        $statement->closeCursor();
    }
    
    // Display the Article page
    header('Location: article.php');
?>
