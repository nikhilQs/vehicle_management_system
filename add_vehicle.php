
<!DOCTYPE html>
<html>
<head>
  <title>Add Vehicle - M/S SP SINGH</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-image: url('images/truck_background.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      color: white;
      padding: 50px;
      text-align: center;
    }
    form {
      background: rgba(0, 0, 0, 0.7);
      padding: 30px;
      max-width: 500px;
      margin: 0 auto;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.6);
    }
    input, select {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: none;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    h2 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <h2>Add New Vehicle</h2>
  <form action="save_vehicle.php" method="post">
    <input type="text" name="vehicle_no" placeholder="Vehicle Number" required><br>
    <select name="vehicle_type" required>
      <option value="">Select Vehicle Type</option>
      <option value="Hyva">Hyva</option>
      <option value="Excavator">Excavator</option>
      <option value="BackHoe">BackHoe</option>
      <option value="Tanker">Tanker</option>
    </select><br>
    <input type="text" name="driver_name" placeholder="Driver Name" required><br>
    <input type="text" name="contact" placeholder="Contact Number" required><br>
    <input type="submit" value="Add Vehicle">
  </form>
</body>
</html>
