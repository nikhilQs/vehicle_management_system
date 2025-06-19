<?php
session_start();
if ($_POST) {
    require 'db_connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM staff WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_assoc();
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        $_SESSION['staff_id'] = $user['id'];
        header("Location: index.php");
    } else {
        echo "Invalid login.";
    }
}
?>
<form method="POST">
  Username: <input name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>
