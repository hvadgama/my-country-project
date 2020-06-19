<?php

$host = "localhost";
$username = "ubuntu";
$password = "ubuntu";
$db_name = "location_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
  die($conn->connect_error);
}

$country_id = $_GET['cid'];

$sql = "SELECT id, name FROM state where country_id = {$country_id}";
$result = $conn->query($sql );

if (!$result) {
  print_r($conn->error);
}

?>

<?php while($row = $result->fetch_assoc()) { ?>

<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

<?php } ?>