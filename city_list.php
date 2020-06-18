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

<h2>City:-</h2>

<?php

$host = "localhost";
$username = "ubuntu";
$password = "ubuntu";
$db_name = "location_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if ($conn->connect_error) {
  die($conn->connect_error);
}

$sql = "SELECT id,name FROM city";
$result = $conn->query($sql);

?>

<table style="width:100%">
  <tr>
    <th>State</th>
    <th>Edit</th> 
    <th>Delete</th>
  </tr>
<?php
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $row['name']?></td>
    <td>
        <button name="name" value="value" data-id="<?php echo $row['id']?>">Edit</button>
    </td>
    <td><button name="name" value="value" data-id="<?php echo $row['id']?>">Delete</button></td>
  </tr>
<?php
}
?>
  
</table>

</body>
</html>
