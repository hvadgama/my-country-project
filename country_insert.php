<?php


$host = "localhost";
$username = "ubuntu";
$password = "ubuntu";
$db_name = "location_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
  die($conn->connect_error);
}

if ($_POST) {
  echo "save data: "  ;
  $name = $_POST['fname'];

  $query = "INSERT INTO country (name) values ('$name')";

//echo $query;
  $result = $conn->query($query);
  
  if ($result) {
    header("Location: country_insert.php");
  }

}


?>


<!DOCTYPE html>
<html>
<body>

<h2>Country insert:-</h2>

<form action="" method="post">
  <label for="fname">Country Name:</label><br>
  <input type="text" id="fname" name="fname" value="" minlength="3" required><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page my list.php</p>

</body>
</html>
