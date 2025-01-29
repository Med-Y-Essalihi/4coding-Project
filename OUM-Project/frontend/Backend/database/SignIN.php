<?php
// Start session
session_start();

// Include database connection
include 'ConnexionDBSingUP.php';


    // Validation
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Email = $_POST['email'] ?? null;
        $MP = $_POST['pass'] ?? null;

        if (empty($Email) || empty($MP)) {
            echo "<br> Please enter both email and password. <br>";
        } else {
            // Prepare SQL statement
            $sql = 'SELECT * FROM users WHERE Email = ? AND MP = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $Email);
            $stmt->bindParam(2, $MP);

            // Execute the statement
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                
                // User found, redirect to Home.html
                 header('Location: http://localhost/BackEnd/OUM-Project/OUM-Project/frontend/HTML/Home.html');
                exit();
            }
        }
    }
?>
