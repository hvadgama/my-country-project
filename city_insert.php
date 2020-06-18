<!DOCTYPE html>
<html>
<body>

<h2>City insert:-</h2>
<form action="/action_page.php">
  <label for="country">Choose a country:</label>
  <select name="state" id="state">
    <option value="gujarat">india</option>
    <option value="florida">usa</option>
    <option value="washinton dc">france</option>
  </select>
  <br><br>

  <label for="state">Choose a state:</label>
  <select name="state" id="state">
    <option value="gujarat">gujarat</option>
    <option value="florida">florida</option>
    <option value="washinton dc">washinton dc</option>
    <option value="new york">new york</option>
    <option value="paris">paris</option>
    <option value="nice">nice</option>
    <option value="abc">abc</option>
  </select>
  <br><br>
  
  <label for="fname">City Name:</label><br>
  <input type="text" id="fname" name="fname" value="" minlength="3" required><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page my list.php</p>

</body>
</html>
