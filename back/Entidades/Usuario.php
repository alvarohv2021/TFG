<?php

class Usuario{
    
    public $id, $username, $password, $email;

    public function __construct($id, $username, $password, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

}
?>