<?php

require_once 'path/to/your/dbh.class.php';
require_once 'path/to/your/userprofile.class.php';


    // Create an instance of UserProfile
    $userProfile = new UserProfile();
    $user = $userProfile->getUser();

    // Check if user data is retrieved
    if ($user) {
        $id = $user['id'];
        $firstname = $user['firstname'];
        $lastname = $user['lastname'];
        $username = $user['username'];
        $gmail = $user['gmail'];

        // You can now use these variables as needed
        echo "ID: $id<br>";
        echo "First Name: $firstname<br>";
        echo "Last Name: $lastname<br>";
        echo "Username: $username<br>";
        echo "Gmail: $gmail<br>";
    } else {
        echo "User data not found.";
    }

