<?php
    session_start();
    if (!isset($_SESSION['todo-uname'])) {
        header("location:pages/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo</title>
</head>
<body>
    <h1>Welcome to simple todo</h1>
</body>
</html>