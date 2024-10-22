<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hashing password

    // Corrected typo in the SQL query
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Corrected typos in the INSERT statement and added a semicolon
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: index.php");
            exit(); // It's good practice to exit after a header redirect
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST["signIn"])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hashing password

    // Corrected typo in the SQL query
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit(); // It's good practice to exit after a header redirect
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>