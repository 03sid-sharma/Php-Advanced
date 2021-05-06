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
    
    <h2>SignUp</h2>

    <form action="includes/signup.inc.php" method="POST">
        <?php
           if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Enter FirstName..." value="'.$first.'"><br>';
           }else
               echo '<input type="text" name="first" placeholder="Enter FirstName...."><br>';
           
           if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Enter LastName..." value="'.$last.'"><br>';
           }else
               echo '<input type="text" name="last" placeholder="Enter LastName..."><br>';
        ?>

            <input type="text" name="email" placeholder="Enter email...">
            <br>

           <?php
           if (isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="Enter UserName..." value="'.$uid.'"><br>';
           }else
                echo '<input type="text" name="uid" placeholder="Enter UserName..."><br>';  
            ?>

        <input type="password" name="pwd" placeholder="Enter Password...">
        <br>
        <button type="submit" name="submit"> SignUp </button>
    </form>

    <?php
        // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // if (strpos($fullUrl,"signup=empty") == true) {
        //     echo "<p>You didn't fill all fields</p>";
        //     exit();
        // }else if(strpos($fullUrl,"signup=char") == true) {
        //     echo "<p>You filled invalid char</p>";
        //     exit();
        // }else if (strpos($fullUrl,"signup=email") == true){ 
        //     echo "<p>You filled invalid email</p>";
        //     exit();
        // }else if(strpos($fullUrl,"signup=success") == true) {
        //     echo "<p>You have been signed up</p>";
        //     exit();
        // }



        if (!isset($_GET['signup'])) {
            exit();
        }
        else{
            $signUpCheck = $_GET['signup'];
        
            if($signUpCheck == "empty"){
                echo "<p>You didn't fill all fields</p>";
                exit();
            }
            if($signUpCheck == "char"){
                echo "<p>You filled invalid char</p>";
                exit();
            }
            if($signUpCheck == "email"){
                echo "<p>You filled invalid email</p>";
                exit();
            }
            if($signUpCheck == "success"){
                echo "<p>You have been signedUp!</p>";
                exit();
            }
            
        }
        
    ?>

</body>
</html>