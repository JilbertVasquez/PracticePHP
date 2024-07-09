<?php

class ChangePassCntr {
    private $username;
    private $newpass;
    private $renewpass;

    public function __construct($username, $newpass, $renewpass) {
        $this->username = $username;
        $this->newpass = $newpass;
        $this->renewpass = $renewpass;
    }

    public function setNewPass() {

        if (!$this->checkSamePass($this->newpass, $this->renewpass) == false) {
            header ("location: ../signup.php?error=?passwordNotMatch");
        }
        if (!$this->checkEmpty() == false) {
            header ("location: ../signup.php?error=?EmptyFields");
        }

        $userProfile = new ChangePass();
        $userProfile->UpdatePass($this->username, $this->newpass, $this->renewpass);
    }

    private function checkSamePass($newpass, $renewpass) {
        if ($newpass != $renewpass) {
            return false;
        }
        else {
            return true;
        }
    }

    private function checkEmpty() {
        return !empty($this->newpass) && !empty($this->renewpass);
    }
}
