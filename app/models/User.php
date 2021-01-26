<?php

class User {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    //find a user by email

    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email',$email);
        $row = $this->db->single();

        // Check Row

        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}