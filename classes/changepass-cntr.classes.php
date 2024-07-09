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
        $userProfile = new ChangePass();
        $userProfile->getUser($this->username, $this->newpass, $this->renewpass);

    }
}
