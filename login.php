<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="cbr.css">
</head>

<body>
<?php include('header.php'); ?>
    <form id="loginForm">
        <input type="text" id="username">
        <input type="password" id="password">
        <input type="submit" value="ارسال">
    </form>

    <script>


        username = document.getElementById('username').value;
        password = document.getElementById('password').value;
    </script>
</body>

</html>