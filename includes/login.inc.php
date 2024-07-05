<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-cntr.classes.php";

    $singup = new LoginCntr($username, $pwd);

    $singup->singupUser();

    // header ("location: ../index.php?error=none");

}