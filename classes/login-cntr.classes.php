<?php

class LoginCntr {
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;  
        $this->pwd = $pwd;  
    }

    public function singupUser() {
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?error=?EmptyFields");
        }


        $login = new Login();
        $login->getUser($this->username, $this->pwd);

    }

    private function emptyInput() {
        return !empty(!empty($this->username) && !empty($this->pwd));
    }

}