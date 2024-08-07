<?php
session_start(); // Resume session
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: index.html");
    exit;
}
$username = $_SESSION['username']; // Get username from session
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <h2>Welcome, <?php echo $username; ?>!</h2>
  <p>This is a secure area. <a href="logout.php">Logout</a></p>
</body>
</html>
