<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['newpwd'];
    $lname = $_POST['renewpwd'];


    include "./classes/dbh.classes.php";
    include "./classes/changepass.classes.php";
    include "./classes/changepass-cntr.classes.php";

    $username = $_SESSION['username'];
    $singup = new ChangePassCntr($username, $newpwd, $renewpwd);
    $singup->setNewPass();


}