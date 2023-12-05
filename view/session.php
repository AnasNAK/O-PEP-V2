<?php
include '../model/config.php';

session_start();

function checkUserSession($mysqli) {
    if (isset($_SESSION['user_email'])) {
        $user_email = $_SESSION['user_email'];

        $query = "SELECT RoleId FROM user WHERE Email = ?";
        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            $stmt->bind_param('s', $user_email);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $role_id = $row['RoleId'];

                if ($role_id == 2) {
                    // Admin user
                    return 'admin';
                } elseif ($role_id == 1) {
                    // Client user
                    return 'client';
                } elseif ($role_id == 3) {
                    // Super Admin user
                    return 'superAdmin';
                } elseif ($role_id == 4) {
                    // User is blocked by Super Admin
                    return 'blocked';
                }
            } else {
                // Handle the case where no rows are returned
                echo "No user found with the specified email.";
            }

            $stmt->close();
        } else {
            // Handle the case where the prepare statement fails
            echo "Error preparing statement: " . $mysqli->error;
        }
    }

    // // If session is not set or user doesn't match any role, redirect to signIn.php
    // redirectToSignIn();
}
?>
