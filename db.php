<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get user input
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

// Escape user input for security
$id = mysqli_real_escape_string($conn, $id);
$first_name = mysqli_real_escape_string($conn, $first_name);
$last_name = mysqli_real_escape_string($conn, $last_name);
$email = mysqli_real_escape_string($conn, $email);
$address = mysqli_real_escape_string($conn, $address);
$password = mysqli_real_escape_string($conn, $password);

// Create SQL query to insert user input into database
$sql = "INSERT INTO users (id, fname, lname, email, address, password) VALUES ('$id', '$first_name', '$last_name', '$email', '$address', '$password')";

// Execute query and check for errors
if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();


// Create connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db2";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get user input
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Escape user input for security
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);

  // Create SQL query to check if email and password match a user in the database
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

  // Execute query and check for errors
  $result = $conn->query($sql);
  if (!$result) {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Check if a user was found
  if ($result->num_rows > 0) {
    // User found, redirect to home page or dashboard
    header("Location: home.php");
    exit();
  } else {
    // User not found, show error message
    echo "Invalid email or password";
  }
}

// Close connection
$conn->close();

?>
