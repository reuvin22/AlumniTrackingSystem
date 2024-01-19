<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracking System</title>
    <link rel="stylesheet" type='text/css' href="./serverSIdeCss/style.php">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-500 to-blue-500">
    <div class="h-screen flex justify-center items-center">
        <form action="./php/login.php" method="post" 
        class="grid border-2 p-24 rounded-2xl">
            <legend class="text-2xl mb-2 text-center text-4xl font-bold text-white">Admin Login</legend>
            <label for="username" class="text-xl text-white">Username</label>
            <input type="text" name="username" id="username"
            class="border-2 my-2 px-2 py-1">
            <label for="password" class="text-xl text-white">Password</label>
            <input type="password" name="password" id="password"
            class="border-2 my-2 px-2 py-1">
            <button type="submit" name="submit"
            class="w-full border-2 py-1 cursor-pointer rounded-lg font-bold mt-1 hover:bg-blue-500 text-white">Login</button>
            <a href="./index.php" class="text-center mt-1 hover:text-blue-900 text-white">Back to homepage</a>
        </form>
    </div>
</body>
</html>