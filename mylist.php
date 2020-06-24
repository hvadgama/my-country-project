<?php

$host = "localhost";
$username = "ubuntu";
$password = "ubuntu";
$db_name = "location_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
  die($conn->connect_error);
}

$sql = "SELECT country.name AS country_name, state.name AS state_name, city.name AS city_name, country.id AS country_id, state.id AS state_id, city.id AS city_id
FROM city
RIGHT JOIN state ON city.state_id = state.id 
RIGHT JOIN country ON state.country_id = country.id ";
$result = $conn->query($sql); 



?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
th {
  text-align: left;
}
</style>
</head>
<body>

<h2>All lists.</h2>


<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Country</th>
    <th>State</th> 
    <th>City</th>
  </tr>
  <?php
  while($row = $result->fetch_assoc()) {
    //print_r($row);
?>
  
  <tr>
  
  <td><?php echo $row['country_id']?></td>
  <td><?php echo $row['country_name']?></td>
  <td><?php echo $row['state_name']?></td>
  <td><?php echo $row['city_name']?></td>
  
  </tr>
  <?php
  }
?>
  
</table>

</body>
</html>