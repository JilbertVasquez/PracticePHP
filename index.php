<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section class="con container-fluid d-flex justify-content-center align-items-center bg-primary ">
        <div class="form-container bg-danger rounded-3">
            <form action="includes/login.inc.php" method="POST" class="d-flex justify-content-center align-items-center flex-column container-fluid">
                <h1 class="text-uppercase p-2 text-white">Login</h1>
                <input class="mt-5 mb-2 p-3 rounded" type="text" name="username" placeholder="Enter Username...">
                <input class="mb-2 mt-2 p-3 rounded" type="password" name="pwd" placeholder="Enter Password...">
                <h7 class="text-white">Don't have account? <a class="text-decoration-underline text-white" href="signup.php">Sign Up Now !!!</a></h7>
                <button type="submit" name="submit" class="btn btn-primary mt-5">Login</button>
            </form>
        </div>
    
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>