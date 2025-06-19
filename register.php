<form method="POST">
  Username: <input name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Register</button>
</form>
<?php
if ($_POST) {
    require 'db_connect.php';
    $u = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO staff (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    echo "Staff registered!";
}
?>
