<?php

class SignUpCntr {
    private $fname;
    private $lname;
    private $username;
    private $gmail;
    private $pwd;
    private $repwd;

    public function __construct($fname, $lname, $username, $gmail, $pwd, $repwd) {
        $this->fname = $fname;
        $this->lname = $lname;  
        $this->username = $username;  
        $this->gmail = $gmail;  
        $this->pwd = $pwd;  
        $this->repwd = $repwd;  
    }

    public function singupUser() {
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?error=?EmptyFields");
        }

        if ($this->Pwd() == false) {
            header ("location: ../signup.php?error=?passwordNotMatch");
        }

        if ($this->invalidUsername() == false) {
            header ("location: ../signup.php?error=?invalidUsername");
        }

        if ($this->invalidGmail() == false) {
            header ("location: ../signup.php?error=?invalidGmail");
        }

        if ($this->userTaken() == false) {
            header ("location: .//signup.php?error=?userTaken");
        }

        $signup = new SignUp();
        $signup->setUser($this->fname, $this->lname, $this->username, $this->gmail, $this->pwd, $this->repwd);

        session_start();
        $_SESSION["username"] = $this->username;

        header("location: ../index.php?error=none");
        exit();
    }

    private function emptyInput() {
        return !empty($this->fname) && !empty($this->lname) && !empty($this->username) && !empty($this->gmail) && !empty($this->pwd) && !empty($this->repwd);
    }

    private function Pwd() {
        if (!($this-> pwd != $this->repwd)) {
            return false;
        }
        else {
            return true;
        }
    }

    private function invalidUsername() {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            return false;
        }
        return true;
    }

    private function invalidGmail() {
        if (!filter_var($this->gmail, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }

    private function userTaken() {
        $signup = new SignUp();
        if (!$signup->checkUser($this->username, $this->gmail)){
            return false;
        }
        return true;
    }
}