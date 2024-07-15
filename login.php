<?php
session_start(); // Start session to persist login state

// Hardcoded credentials for demonstration (replace with your own logic)
$valid_username = "user";
$valid_password = "password";

$error = ""; // Initialize error variable

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION['username'] = $username; // Store username in session variable
        header("Location: welcome.php"); // Redirect to welcome page
        exit;
    } else {
        // Authentication failed
        $error = "Invalid username or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" name="login">Login</button>
    <?php if (!empty($error)) : ?>
      <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
  </form>
</body>
</html>
