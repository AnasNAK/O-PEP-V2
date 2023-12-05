<?php
session_start(); 

include '../model/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = $_POST['first'];
    $lastName = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (`FirstName`, `LastName`, `Email`, `Password`) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ssss', $firstName, $lastName, $email, $hashedPassword);
        $stmt->execute();
        $stmt->close();

        $_SESSION['user_email'] = $email;
        header("Location: ../view/Singup2.php");
        exit();
    } else {
        // Handle the case where the prepare statement fails
        echo "Error preparing statement: " . $mysqli->error;
    }
}
?>
