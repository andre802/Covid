<?php
    require_once('../src/database.php');
    $comment_id = filter_input(INPUT_POST, 'comment_id', FILTER_VALIDATE_INT);
    $user_id = filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
    $like = filter_input(INPUT_POST, 'like');
    
    // Increment likes
    if ($comment_id != false && $user_id != false && $like != false) {
        $query = 'INSERT INTO userCommentRating(commentID, userID) SELECT :comment_id, :user_id
                  WHERE NOT EXISTS(SELECT * FROM userCommentRating WHERE commentID = :comment_id AND userID = :user_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':comment_id', $comment_id);
        $statement->bindValue(':user_id', $user_id);
        $statement->execute();
        $statement->closeCursor();
        
        $query2 = 'SELECT * FROM userCommentRating WHERE commentID = :comment_id AND userID = :user_id';
        $statement2 = $db->prepare($query2);
        $statement2->bindValue(':comment_id', $comment_id);
        $statement2->bindValue(':user_id', $user_id);
        $statement2->execute();
        $rating = $statement2->fetch();
        $statement2->closeCursor();
        
        $query3 = '';
        $query4 = '';
        if ($like == "Like") {
            if ($rating['liked'] == 0) {
                $query3 = 'UPDATE comments SET likes = likes + 1 WHERE commentID = :comment_id';
                $query4 = 'UPDATE userCommentRating SET liked = 1 WHERE commentID = :comment_id AND userID = :user_id';
            } else {
                $query3 = 'UPDATE comments SET likes = likes - 1 WHERE commentID = :comment_id';
                $query4 = 'UPDATE userCommentRating SET liked = 0 WHERE commentID = :comment_id AND userID = :user_id';
            }
        } else if ($like == "Dislike") {
            if ($rating['disliked'] == 0) {
                $query3 = 'UPDATE comments SET dislikes = dislikes + 1 WHERE commentID = :comment_id';
                $query4 = 'UPDATE userCommentRating SET disliked = 1 WHERE commentID = :comment_id AND userID = :user_id';
            } else {
                $query3 = 'UPDATE comments SET dislikes = dislikes - 1 WHERE commentID = :comment_id';
                $query4 = 'UPDATE userCommentRating SET disliked = 0 WHERE commentID = :comment_id AND userID = :user_id';
            }
        }
        $statement3 = $db->prepare($query3);
        $statement3->bindValue(':comment_id', $comment_id);
        $statement3->execute();
        $statement3->closeCursor();
        $statement4 = $db->prepare($query4);
        $statement4->bindValue(':comment_id', $comment_id);
        $statement4->bindValue(':user_id', $user_id);
        $statement4->execute();
        $statement4->closeCursor();
    }
    
    // Display the Article page
    header('Location: article.php');
?>