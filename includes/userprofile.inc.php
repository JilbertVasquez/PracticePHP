<?php

include "./classes/dbh.classes.php";
include "./classes/userprofile.classes.php";
include "./classes/userprofile-cntr.classes.php";

$username = $_SESSION['username'];
$userInfo = new UserProfileCntr();
$user = $userInfo->getUserInfo($username);
