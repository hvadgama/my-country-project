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

  print_r($_POST);

  echo "save data: "  ;
  $name = $_POST['fname'];
  $country = $_POST['country'];

  $query = "INSERT INTO state (name, country_id) values ('$name', $country)";

// echo $query;
  $result = $conn->query($query);
  
  if ($result) {
    // echo 'here';die;
    header("Location: state_insert.php");
  }
  else {
    print_r($conn->error);
  }

}

$sql = "SELECT id, name FROM country";
$result = $conn->query($sql );

  
?>

<!DOCTYPE html>
<html>
<body>

<h2>State insert:-</h2>


<form action="" method="post">
  <label for="country">Choose a country:</label>
  <select name="country" id="country">
  <?php
    while($row = $result->fetch_assoc()) {
?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
<?php
    }
    ?>
  </select>
  <br><br>
  <label for="fname">State Name:</label><br>
  <input type="text" id="fname" name="fname" value="" minlength="3" required><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page my list.php</p>

</body>
</html>
