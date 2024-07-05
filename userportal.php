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
    <title>User Portal</title>
</head>
<body>
    hello world
    <form action="includes/logout.inc.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>