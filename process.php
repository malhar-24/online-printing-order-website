<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Create a database connection
    $conn = new mysqli("localhost", "malhar24", "malhar2411", "malhar");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $password);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        ob_end_clean(); // Clear the buffer without outputting it

        // Display a success message with a delay
        echo '<script>alert("Registration successful!");</script>';
        echo '<script>setTimeout(function() { window.location.href = "login.html";alert("Login Now!"); }, 100);</script>'; // Redirect after a 2-second delay
        exit(); // Terminate script execution after redirection
    } else {
        echo '<script>alert("Registration failed. Please try again.");</script>';
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
