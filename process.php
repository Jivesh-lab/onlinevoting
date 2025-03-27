<?php
session_start();

// Form data received
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include('dbConnect.php');

$sql = "SELECT * FROM admin WHERE username=:username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();
    // Compare the plain-text password provided by the user with the one stored in the database
    if ($row['password'] == $password) {
        $_SESSION['aid'] = $row['aid'];
        $_SESSION['admin_id'] = $username;
        $_SESSION['aname'] = $row['aname'];
        header("location:admin_dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Wrong Password";
    }
} else {
    $_SESSION['error'] = "Wrong User ID";
}

// Redirect back to the login page if authentication fails
header("location:admin_login.php");
exit;
?>

