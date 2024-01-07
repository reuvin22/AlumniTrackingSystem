<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking System</title>
    <link rel="stylesheet" type='text/css' href="./serverSIdeCss/style.php">
</head>
<body>
    <div class="form-container">
        <form action="./php/login.php" method="post" class="login">
            <legend>Admin Login</legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit">Login</button>
            <a href="./index.php" class="homepage">Back to homepage</a>
        </form>
    </div>
</body>
</html>