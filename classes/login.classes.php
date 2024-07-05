<?php

class Login extends Dbh {

    public function getUser($username, $pwd) {
        $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ? OR pwd = ?');

        if (!$stmt->execute(array($username, $pwd))) {
            $stmt = null;
            header ("location: ../signup.php=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header ("location: ../index.php?error=usernotfound");
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]['pwd']);

        if ($checkPwd == false) {
            $stmt = null;
            header ("location: ../index.php?error=wrongpassword");
        }
        else if ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ? OR pwd = ?');

            if (!$stmt->execute(array($username, $pwd))) {
                $stmt = null;
                header ("location: ../signup.php=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header ("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["username"] = $user[0]['username'];

            header("location: ../userportal.php?error=none");
            exit();
        }

    }
}