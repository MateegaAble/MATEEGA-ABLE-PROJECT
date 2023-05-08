<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
  </head>
  </body>
    <h1>Sign Up</h1>
    <form action="db.php" method="post">
      <label for="id">ID Number:</label><br><br>
      <input type="text" id="id" name="id" required><br><br>

      <label for="first_name">First Name:</label><br><br>
      <input type="text" id="first_name" name="first_name" required><br><br>

      <label for="last_name">Last Name:</label><br><br>
      <input type="text" id="last_name" name="last_name" required><br><br>

      <label for="email">Email:</label><br><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="address">Address:</label><br><br>
       <input type="address" id="address" name="address" required><br><br>

      <label for="password">Password:</label><br><br>
      <input type="password" id="password" name="password" required><br><br>

      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>
