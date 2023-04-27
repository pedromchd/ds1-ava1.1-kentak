<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main>
    <fieldset>
      <legend>Login</legend>
      <form action="/auth/login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" required>
        <input type="submit" value="Submit">
        <a href="/register.php">Register</a>
      </form>
    </fieldset>
  </main>
</body>

</html>
