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




    if (!empty($title) && !empty($content) && !empty($uploadedImage)) {

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
                foreach ($tags as $tag) {
                    $query2 = "INSERT INTO art_tag (ArticleId, TagID) VALUES (?, ?)";
                    $stmt = $mysqli->prepare($query2);
                    $stmt->bind_param('ii', $idArticle, $tag);
                    $stmt->execute();
                    header("location:../view/article.php");
                }
            } else {

                echo "Error: " . $mysqli->error;
            }
        } else {

            echo "Error: File upload failed.";
        }
    } else {

        echo "Error: All form fields are required.";
    }
}

// modifying an article    

if (isset($_POST['modifyArticle'])) {

    // Assuming $mysqli is your database connection
    $article_id = $_POST['article_id'];

    $title = $_POST['name'];
    $content = $_POST['description'];
    $uploadedImage = $_FILES['image'];
    $imageName = $uploadedImage['name'];
    $imageTempName = $uploadedImage['tmp_name'];
    $author = $x['IdUser'];



    if (!empty($imageName)) {
        // Generate a unique name for the uploaded image to avoid conflicts
        $imagePath = $uploadDir . uniqid() . '_' . $imageName;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($imageTempName, $imagePath)) {
            // File uploaded successfully, proceed to update article data in the database
            $updateQuery = "UPDATE article SET ArticleName = ?, ArticleDes = ?, ArticleImg = ?, UserID = ? WHERE idArticle = ?";
            $updateStmt = $mysqli->prepare($updateQuery);

            // Bind parameters
            $updateStmt->bind_param('sssii', $title, $content, $imagePath, $author, $article_id);

            // Execute the statement
            if ($updateStmt->execute()) {
                $delete_query = "DELETE FROM art_tag where ArticleId = '$article_id' ";
                $do = mysqli_query($mysqli, $delete_query);

                $tags = $_POST['tags'];
                foreach ($tags as $tag) {

                    $query2 = "INSERT INTO art_tag (ArticleId, TagID) VALUES (?, ?)";
                    $stmt = $mysqli->prepare($query2);
                    $stmt->bind_param('ii', $article_id, $tag);
                    $stmt->execute();
                    header("location:../view/blog.php");
                }
            } else {
                // Handle error if execution fails
                echo "Error updating article: " . $updateStmt->error;
            }

            // Close the statement
            $updateStmt->close();
        } else {
            // Handle file upload failure
            echo "Error uploading file.";
        }
    } else {
        // Handle case where image is not uploaded
        echo "No image uploaded.";
    }
}
//delete anarticle
if (isset($_POST['deleteArticle'])) {
    $id = $_POST['toDelete'];
    $query = "DELETE FROM article WHERE idArticle = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $id);
    $result = $stmt->get_result();
    $stmt->execute();
}
