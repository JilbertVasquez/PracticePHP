<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-cntr.classes.php";

    $singup = new SignUpCntr($fname, $lname, $username, $gmail, $pwd, $repwd);

    $singup->singupUser();

    // header ("location: ../index.php?error=none");

}