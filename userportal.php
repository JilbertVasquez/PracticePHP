<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="userportal.css" rel="stylesheet">
    <title>User Portal</title>
</head>
<body>
    <div class="con d-flex flex-column justify-content-center align-items-center">
        <div class="navigation d-flex justify-content-end align-items-center px-3 p-1">
            <div class="d-flex flex-row justify-content-end align-items-center">
                <div class="px-5">
                    <?php 
                    $username = $_SESSION['username'];
                    echo "<a class='bg-danger' href='https://www.google.com'>$username</a>";
                ?>
                </div>
                
            <form action="includes/logout.inc.php" method="POST">
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
            </div>
        </div>
        <div class="sec-con bg-danger d-flex flex-row justify-content-center align-items-center ">
            <div class="left">
                <button id="profileBtn">Profile</button>
                <button id="changePassBtn">Change Password</button>
            </div>
            <div class="right">
                <div id="profile-section" class="section">
                    <?php include "profile.php"?>
                </div>
                <div id="changepass-section" class="section" style="display:block;">
                    <?php include "changepass.php"?>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="userchangesection.js"></script>
</body>
</html>