<?php
    include 'includes/class-autoload.inc.php'
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
    <?php
        // $testObj = new Test();
        // echo $testObj->getUsers();
        // echo $testObj->getUsersStmt("sid101","03sid.sharma@gmail.com");
        // echo $testObj->setUsersStmt("jon","jon@gmail.com","jon123");
        $userObj = new UsersView();
        $userObj->showUser("sid101");
        
    
    ?>
</body>
</html>