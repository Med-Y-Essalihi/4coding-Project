<?php
    // Start session
        session_start();

    // Include database connection
        include 'ConnexionDBSingUP.php';

    // Validation
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $FirstName = $_POST['Fname'];
            $LastName = $_POST['Lname'];
            $Email = $_POST['email'];
            $pwd = $_POST['pwd'];

            if (empty($FirstName) || empty($LastName) || empty($Email) || empty($pwd)) {
                echo "Sorry, you should fill out the form.";
            } else {
                $rep=$conn->exec("INSERT INTO users (Nom, Pre, Email, MP) VALUES ('$LastName', '$FirstName', '$Email', '$pwd')");
                // Redirect to Home.html
                header('Location: http://localhost/BackEnd/OUM-Project/OUM-Project/frontend/HTML/Home.html');
                exit(); 
            }
        }
?>