<?php
session_start();
$host_name = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($host_name, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$stmt->bind_result($userID, $hashedPassword);

$result = array();

if ($stmt->fetch()) {
    if (password_verify($userPassword, $hashedPassword)) {
        $_SESSION['userID'] = $userID;
        $result['success'] = true;
    } else {
        $result['success'] = false;
        $result['message'] = "Incorrect email or password.";
    }
} else {
    $result['success'] = false;
    $result['message'] = "Incorrect email or password.";
}

$stmt->close();
$conn->close();

echo json_encode($result);
?>