<?php

// We then check if user has clicked button
if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../index.php?signup=empty");
        exit();
    }
    else{
        // Check if input chars are valid
        if(!preg_match('/^[a-zA-Z]*$/',$first) || !preg_match('/^[a-zA-Z]*$/',$last)){
            header("Location: ../index.php
            ?signup=char");
            exit();
        }
        else {
            // Check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../index.php?signup=email");
                exit();   
            }
            else{
                header("Location: ../index.php?signup=success");
                exit();
            }
        }
        
    }
}
?>