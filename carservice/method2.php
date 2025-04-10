<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CarService";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);  // Store plain password

    // Debugging: Print password before inserting
    echo "Password entered: " . $password . "<br>";



    // ✅ Validate phone number (only digits, 10-15 characters)
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        echo "<script>
                alert('Invalid phone number! Enter a number between 10-15 digits.');
                window.location.href='method2.php';
              </script>";
        exit();
    }

    // ✅ Store plain password in database
    $sql = "INSERT INTO users (username, phone, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $phone, $email, $password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration successful!');
                window.location.href='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href='method2.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>