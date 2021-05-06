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
        // echo "test1234<br>";
        // echo password_hash("test1234",PASSWORD_DEFAULT);
    
        $input = "test1234";
        $hashedPasswordInDb = password_hash("test1234",PASSWORD_DEFAULT);

        echo password_verify($input,$hashedPasswordInDb);
    
    ?>
</body>
</html>