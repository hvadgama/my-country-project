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
  $state = $_POST['state'];

  $query = "INSERT INTO city (name, state_id) values ('$name', $state)";

// echo $query;
  $result = $conn->query($query);
  
  if ($result) {
    // echo 'here';die;
    header("Location: city_insert.php");
  }
  else {
    print_r($conn->error);
  }

}

$sql = "SELECT id, name FROM country";
$result = $conn->query($sql );

if (!$result) {
  print_r($conn->error);
}
  
?>
<!DOCTYPE html>
<html>
<body>

<script>

  function myfunction(value) {
    console.log(value);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Typical action to be performed when the document is ready:
          document.getElementById("state").innerHTML = xhttp.responseText;
          console.log(xhttp.responseText);
        }
    };
    xhttp.open("GET", "ajax.php?cid=" + value, true);
    xhttp.send();
  }

</script>

<h2>City insert:-</h2>
<form action="" method="post">
  <label for="country">Choose a country:</label>
  <select name="country" id="country" onchange="myfunction(this.value)">

  <option value="">--- select ---</option>
  <?php while($row = $result->fetch_assoc()) { ?>

    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

  <?php } ?>
   
  </select>
  <br><br>

  <label for="state">Choose a state:</label>
  <select name="state" id="state">
  <?php while($row = $result->fetch_assoc()) { ?>
    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
  <?php } ?>
  </select>
  <br><br>
  
  <label for="fname">City Name:</label><br>
  <input type="text" id="fname" name="fname" value="" minlength="3" required><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page my list.php</p>

</body>
</html>
