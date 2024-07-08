<?php

class UserProfile extends Dbh {
    public function getUser() {
        $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ?');

        session_start();
        $username = $_SESSION['username'];

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header ("location: ../signup.php=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header ("location: ../index.php?error=usernotfound");
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($pwdHashed) {
            $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ?');

            if (!$stmt->execute(array($username))) {
                $stmt = null;
                header ("location: ../username.php=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header ("location: ../username.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $user[0];
        }

    }
}