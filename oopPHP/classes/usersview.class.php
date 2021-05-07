<?php

class UsersView extends Users {

    public function showUser($name){
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['uidUsers'];
    }

}