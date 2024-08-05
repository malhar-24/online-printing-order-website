<?php
session_start();

$error_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create a database connection
    $conn = new mysqli("localhost", "malhar24", "malhar2411", "malhar");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($stored_username, $stored_password);
    $stmt->fetch();
    // Check if the provided username and password match
    if ($stored_username === $email && $stored_password === $password) {
        $_SESSION["email"] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>