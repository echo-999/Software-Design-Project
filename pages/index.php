<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JQuery/Javascript CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Welcome!</title>
</head>
<body>
<form action="../php/login_script.php" onsubmit="validate_login()">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter Username" autocomplete="off" required>
        <span id="username_error" hidden>Invalid username!</span>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
        <span id="password_error"></span>
    </div>
    <div>
        <button type="submit" name="submit_login" id="submit_login">Log In</button>
        <a href="register.php">Register</a>
    </div>
</form>

<!-- Add Jquery/Javascript CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function validate_login(){
        var valid = true;
        var message;
        var hasNumber = /\d/;
        var username = $("#username").val();
        if(username == "" || hasNumber.test(username)){
            message = "Invalid "
        }
    }
</script>
</body>
</html>
