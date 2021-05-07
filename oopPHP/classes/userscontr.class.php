<?php

class UsersContr extends Users {

    public function createUser($username,$email,$password){
        $this->setUser($username,$email,$password);
        
    }
    
}