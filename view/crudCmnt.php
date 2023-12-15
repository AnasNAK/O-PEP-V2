<?php
include '../model/config.php';

session_start();

$email = $_SESSION['user_email'];
$queryE = "select FirstName,IdUser from user where email = '$email'";
$stmtE = mysqli_query($mysqli , $queryE);
$resultE= mysqli_fetch_assoc($stmtE);
$userCmnt = $resultE['IdUser'];
$userNCmnt = $resultE['FirstName'];



if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['articleId'])){
        $idArticle = $_GET['articleId'];

        $queryCount = "SELECT COUNT(*) AS countcmnt
        FROM comment
        WHERE cmntSt = 1 AND ArticleId = '$idArticle' ";
        $stmt = mysqli_query($mysqli, $queryCount);
        
      
            if (mysqli_num_rows($stmt) > 0) {
                $countData = mysqli_fetch_assoc($stmt);
                $count = $countData['countcmnt'];
            } else {
                $count = 0; 
            }
        
        
        

    }
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment']) && isset($_POST['id_article'])) {

    $comment = $_POST['comment'];
    $id_article = $_POST['id_article'];

    if (empty($comment)) {
        echo "Comment cannot be empty.";
        exit();
    }
    // Insert the comment into the database
    $query = "INSERT INTO comment (sessionId, content, ArticleId) VALUES ('$userCmnt', '$comment', '$id_article')";
    $insertResult = mysqli_query($mysqli, $query);

    if ($insertResult) {
      
        echo "Comment added successfully!";
    } else {
        echo "Failed to add comment.";
    }
    exit(); 
}


// Handle GET request for fetching comments
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Fetch comments for the specific article ID sent via GET request
    if (isset($_GET['id_article'])) {
        $id_article = $_GET['id_article'];

        // Fetch comments associated with the specified article ID
        $query = "SELECT c.*, u.FirstName FROM comment c join user u on c.sessionId = u.IdUser WHERE ArticleId = '$id_article' and c.cmntSt = 1";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
            header('Content-Type: application/json');
            echo json_encode($comments);
        } else {
            echo "Failed to fetch comments.";
        }
    } else {
        echo "Article ID not provided for fetching comments.";
    }
    exit(); 
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['commentId']) && isset($_POST['updatedComment'])) {
  
    $commentId = $_POST['commentId'];
    $updatedComment = $_POST['updatedComment'];

    // Update the comment in the database using prepared statements to prevent SQL injection
    $query = "UPDATE comment SET Content = ?  WHERE IdComment = ? and sessionId = ?";
    $stmt = $mysqli->prepare($query);
 
        $stmt->bind_param('sii', $updatedComment, $commentId,$userCmnt);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            echo "Comment updated successfully!";
        } else {
            echo "Failed to update comment.";
        }
        $stmt->close();
    
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteComment']) ) {
    
    $commentId = $_POST['commentId'];


    // Perform the delete operation using prepared statements
    $query = "UPDATE comment SET cmntSt = 0  WHERE IdComment = ? and sessionId = ?";
    $stmt = $mysqli->prepare($query);

        $stmt->bind_param('ii', $commentId,$userCmnt);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Comment deleted successfully!";
        } else {
            echo "Failed to delete comment.";
        }
        $stmt->close();
    
}



?>

