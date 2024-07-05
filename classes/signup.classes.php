<?php

class SignUp extends Dbh {

    public function setUser($fname, $lname, $username, $gmail, $pwd, $repwd) {
        $stmt = $this->connect()->prepare('INSERT INTO students (fname, lname, username, gmail, pwd, repwd) VALUES (?, ?, ?, ?, ?, ?)');

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($fname, $lname, $username, $gmail, $hashedpwd, $hashedpwd))) {
            $stmt = null;
            header ("location: ../signup.php=stmtfailed1");
            exit();
        }
    }

    public function checkUser($username, $gmail) {
        $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ? OR gmail = ?');

        if (!$stmt->execute(array($username, $gmail))) {
            $stmt = null;
            header ("location: ../signup.php=stmtfailed4");
            exit();
        }

        if (!$stmt->rowCount() > 0) {
            return false;
        }
        else {
            return true; 
        }
    }
}