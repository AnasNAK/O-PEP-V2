<?php
include '../view/session.php';
//checking for user
$userRole = checkUserSession($mysqli);
if ($userRole === 'blocked') {
    header("Location: block-page.php");
    exit();
}
if ($userRole != 'admin' && $userRole != 'client') {
    header('location: SingIn.php');
}

$user_email = $_SESSION['user_email'];
$query = "SELECT RoleId ,IdUser FROM user WHERE Email = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $user_email);
$stmt->execute();
$result = $stmt->get_result();
$x = mysqli_fetch_assoc($result);

//inserting an article

$uploadDir = '../view/uploads/';

    if (isset($_POST['addArticle'])) {
        $title = $_POST['ArticleName'];
        $content = $_POST['ArticleDes'];
        $uploadedImage = $_FILES['image']; 
        $imageName = $uploadedImage['name'];
        $imageTempName = $uploadedImage['tmp_name'];   
        $author = $x['IdUser'];
        if (!empty($imageName)) {
            // Generate a unique name for the uploaded image to avoid conflicts
            $imagePath = $uploadDir . uniqid() . '_' . $imageName;
        
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($imageTempName, $imagePath)) {
                // File uploaded successfully, proceed to insert plant data into the database
                $insertQuery = "INSERT INTO article (ARticleName, ArticleDEes, ArticleImg,UserID) VALUES (?, ?, ?, ?)";
                $insertStmt = $mysqli->prepare($insertQuery);
                $insertStmt->bind_param('sssi', $title, $content, $imagePath,$author);
                $insertStmt->execute();
                
            }
        }
    
    }

// modifying an article    

if (isset($_POST['modifyArticle'])) {
    $id = $_POST['id'];
    $title = $_POST['ArticleName'];
    $content = $_POST['ArticleDes'];
    $uploadedImage = $_FILES['image']; 
    $imageName = $uploadedImage['name'];
    $imageTempName = $uploadedImage['tmp_name'];   
    $author = $x['IdUser'];
    if (!empty($imageName)) {
        // Generate a unique name for the uploaded image to avoid conflicts
        $imagePath = $uploadDir . uniqid() . '_' . $imageName;
    
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($imageTempName, $imagePath)) {
            // File uploaded successfully, proceed to insert plant data into the database
            $insertQuery = "UPDATE article SET ArticleName = ?, ArticleDes = ?, ArticleImg = ?,UserID = ? WHERE idArticle = ?";
            $insertStmt = $mysqli->prepare($insertQuery);
            $insertStmt->bind_param('sssii', $title, $content, $imagePath,$author,$id);
        }
    }
}
if(isset($_POST['deleteArticle'])){
    $id = $_POST['id'];
    $query = "DELETE FROM article WHERE idArticle = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
}

