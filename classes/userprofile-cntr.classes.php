<?php

class UserProfileCntr {
    public function getUserInfo($username) {
        $userProfile = new UserProfile();
        $user = $userProfile->getUser($username);

        if ($user) {
            return $user;
        } else {
            echo "User data not found.";
            return null;
        }
    }
}
