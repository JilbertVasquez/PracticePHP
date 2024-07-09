<?php

class ChangePass extends Dbh {
    public function UpdatePass($username, $newpwd, $renewpwd) {
        $stmt = $this->connect()->prepare('SELECT * FROM students WHERE username = ?');

        $hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($hashedPwd, $username))) {
            $stmt = null;
            header("location: ../changepass.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../changepass.php?error=updatefailed");
            exit();
        }

        header("location: ../changepass.php?success=passwordupdated");
    }
}