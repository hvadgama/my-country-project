<!DOCTYPE html>
<html>
<body>

<h2>State insert:-</h2>


<form action="/action_page.php">
  <label for="country">Choose a country:</label>
  <select name="country" id="country">
    <option value="India">India</option>
    <option value="Usa">Usa</option>
    <option value="France">France</option>
  </select>
  <br><br>
<form action="/action_page.php">
  <label for="fname">State Name:</label><br>
  <input type="text" id="fname" name="fname" value="" minlength="3" required><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page my list.php</p>

</body>
</html>
