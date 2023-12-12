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
$user_id = $x['IdUser'];
if (isset($_POST['addArticle'])) {
    $title = $_POST['ArticleName'];
    $content = $_POST['ArticleDes'];
    $uploadedImage = $_FILES['image'];
    $imageName = $uploadedImage['name'];
    $imageTempName = $uploadedImage['tmp_name'];
    $author = $user_id;
    $id = $_POST['id_theme'];
   


    // Check if the form fields are not empty
    if (!empty($title) && !empty($content) && !empty($uploadedImage)) {
        // Generate a unique name for the uploaded image to avoid conflicts
        $imagePath = $uploadDir . uniqid() . '_' . $imageName;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($imageTempName, $imagePath)) {
            // File uploaded successfully, proceed to insert article data into the database
            $insertQuery = "INSERT INTO article (ArticleName, ArticleDes, ArticleImg, UserID, ThemeId) VALUES (?, ?, ?, ?, ?)";
            $insertStmt = $mysqli->prepare($insertQuery);
            $insertStmt->bind_param('ssssi', $title, $content, $imagePath, $author, $id);
            
            if ($insertStmt->execute()) {
                // Article inserted successfully

                // Retrieve the ID of the inserted article
                $query1 = "SELECT idArticle FROM article WHERE ArticleName = ?";
                $stmt = $mysqli->prepare($query1);
                $stmt->bind_param('s', $title);
                $stmt->execute();
                $result = $stmt->get_result();
                $data = mysqli_fetch_assoc($result);
                $idArticle = $data['idArticle'];

                // Insert tags
                $tags = $_POST['tags'];
                $query2 = "INSERT INTO art_tag (ArticleId, TagID) VALUES (?, ?)";
                $stmt = $mysqli->prepare($query2);
                $stmt->bind_param('ii', $idArticle, $tags);
                $stmt->execute();
                header("location:../view/article.php");
                
                // Additional logic or redirection can be added here
            } else {
                // Error handling for article insertion failure
                echo "Error: " . $mysqli->error;
            }
        } else {
            // Error handling for file upload failure
            echo "Error: File upload failed.";
        }
    } else {
        // Error handling for empty form fields
        echo "Error: All form fields are required.";
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

