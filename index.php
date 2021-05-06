<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Enter FirstName...">
        <br>
        <input type="text" name="last" placeholder="Enter LastName...">
        <br>
        <input type="text" name="email" placeholder="Enter email...">
        <br>
        <input type="text" name="uid" placeholder="Enter UserName...">
        <br>
        <input type="password" name="pwd" placeholder="Enter Password...">
        <br>
        <button type="submit" name="submit"> SignUp </button>
    </form>

</body>
</html>