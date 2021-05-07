<?php

class Test extends Dbh {
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        
        while ($row = $stmt->fetch()){
            echo $row['uidUsers'].'<br>';
        }

    }
    
    public function getUsersStmt($firstname, $email){
        $sql = "SELECT * FROM users WHERE uidUsers=? AND emailUsers=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$email]);
        $names = $stmt->fetchAll();
        foreach ($names as $name) {
            echo $name['uidUsers']."<br>";
        }        
    }
    
    public function setUsersStmt($firstname, $email,$password){
        $sql = "INSERT INTO users(uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $email, $password]);
        
    }
}