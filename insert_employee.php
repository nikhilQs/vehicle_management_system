<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ms_sp_singh";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $salary = $_POST['salary'];
  $joining_date = $_POST['joining_date'];
  $account_number = $_POST['account_number'];
  $bank_name = $_POST['bank_name'];
  $ifsc_code = $_POST['ifsc_code'];
  $branch_address = $_POST['branch_address'];

  $sql = "INSERT INTO employees (name, designation, salary, joining_date, account_number, bank_name, ifsc_code, branch_address)
          VALUES ('$name', '$designation', '$salary', '$joining_date', '$account_number', '$bank_name', '$ifsc_code', '$branch_address')";

  if ($conn->query($sql) === TRUE) {
    echo "New employee added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {
  echo "Please submit the form first.";
}

$conn->close();
?>
